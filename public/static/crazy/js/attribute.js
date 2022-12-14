function ProductAttribute(selector) {
    var $el = $(selector);
    var addValueUrl = $el.data("add-value-url"),
        detailUrl = $el.data("detail-url");

    this.id = 0;
    this.attributeData = {};
    this.isGetting = false;


    var self = this;
    this.init = function () {
        // check box
        $el.on('change', '.attr-checkbox', function () {
            var _this = this;
            setTimeout(function () {
                var stt = $(_this).is(':checked');

            }, 50);
        });

        $el.on('click', '.btn-add-attribute-value', function () {
            let $this = $(this);
            let attribute_id = $this.data('id'),
                value_type = $this.data('value-type'),
                label = $this.data('label');



            self.addValuePopup(attribute_id, value_type, label, function (rs) {
                let value = rs.data.id,
                    text = rs.data.text_value || rs.data[value_type + '_value'] || value;
                if ($this.hasClass('ref-checklist')) {
                    let tpl = $el.find('#attribute-' + attribute_id + '-template').html();
                    $el.find('.attribute-' + attribute_id + '-wrapper .btn-add-value-block').before(App.str.eval(tpl, { text: text, value: value }));
                } else if ($this.hasClass('ref-multiselect')) {
                    $this.parent().parent().find('select').append('<option value="' + value + '" selected>' + text + '</option>');
                } else if ($this.hasClass('ref-select')) {
                    let $select = $this.parent().parent().find('select');
                    $select.find('option').prop('selected', false);
                    $select.append('<option value="' + value + '" selected>' + text + '</option>');
                    $select.val(value);
                }

            });
        });

        // $el.on('change', '.attribute-input-select', function(){
        //     let $this = $(this);
        //     if($this.val() == '--add--'){

        //         let attribute_id = $this.data('attribute-id'),
        //             value_type = $this.data('attribute-value-type'),
        //             label = $this.data('attribute-label'),
        //             options = $this.find('option');
        //         options.prop('selected',false);

        //         self.addValuePopup(attribute_id, value_type, label, function(rs){
        //             let value = rs.data[value_type+'_value'],
        //                 text = rs.data.text_value || value;
        //             $(options[options.length - 1]).before('<option value="'+value+'" selected>'+text+'</option>');
        //         }); 
        //     }
        // });
    }

    this.getAttributeDetail = function(id, success){
        if(this.isGetting) return false;
        this.isGetting = true;
        ajaxRequest(detailUrl, "GET", {id:id}, function(rs){
            self.isGetting = false;
            if(rs.status){
                self.attributeData = rs.data;
                if(typeof success == "function"){
                    success(self.attributeData);
                }
            }else{
                App.Swal.error("L???i kh??ng x??c ?????nh");
            }
        }, function(e){
            self.isGetting = false;
            App.Swal.error("L???i kh??ng x??c ?????nh");
        });
    };

    this.showForm = function (attributeValue, done) {
        var attrVal = (typeof attributeValue == "object") ? attributeValue : {};
        let attr = this.attributeData;
        let inputTypes = {
            int: "number",
            decimal: "number",
            varchar: "text",
            text: "textarea"
        };
        var hasColorInput = false;
        let inputType = inputTypes[attr.value_type];
        let label = attr.label || attr.name;
        let placeholder = "nh???p " + label;
        let inputs = {};

        if (attrVal && attrVal.id) {
            inputs.id = {
                type: "hidden",
                value: attrVal.id
            };
        }
        inputs.value = {
            type: inputType,
            label: label,
            placeholder: placeholder,
            id: attr.name + '-value',
            validate: function (value) {
                if (value.length == 0) return false;
                if (inputType == "number") {
                    if (attr.value_type == "int" && parseInt(value) != value) {
                        return false
                    }
                    let numberValue = Number(value);
                    return !isNaN(numberValue);
                }
                return true;
            }
        }

        if (attr.value_type == "decimal") {
            inputs.value.step = 0.1;
        }

        if (attr.value_type != 'text') {
            inputs.text = {
                type: "text",
                label: "Text hi???n th???",
                placeholder: "Kh??ng b???t bu???c"
            }
        }
        if (attr.advance_value_type == "image") {
            inputs.image_data = {
                type: "file",
                label: "H??nh ???nh",
                id: "attribute-value-image-input",
                value: ""
            };
        }
        else if (attr.advance_value_type == "color") {
            inputs.color = {
                type: "text",
                label: "M??u s???c",
                id: "attribute-value-color-input",
                value: "#fff",
                wrapper_class: "circle"
            };
            hasColorInput = true;
        }
        if (attrVal) {
            if (typeof attrVal[attr.value_type + "_value"] != "undefined") {
                inputs.value.value = attrVal[attr.value_type + "_value"];
            }
            if (attr.value_type != 'text') {
                inputs.text.value = attrVal.text_value || "";
            }

        }
        var popup_data = {
            title: "Th??m gi?? tr??? " + label,
            inputs: inputs,
            btnDone: "Th??m",
            size: "md",
            done: function (data) {
                if (data.image_data) {
                    if (data.image_data.length) {
                        data.image = data.image_data[0].data;
                    }
                    data.image_data = null;
                }
                if(typeof done == "function"){
                    done(data);
                }
            }
        };
        App.modal.popup(popup_data, null, function () {
            App.coloris.add('#attribute-value-color-input');
        }, function (popup, modal) {
            // if (modal.last_open != "color-picker-modal") {
            //     modal.show('custom-modal');
            // }
        });
    };


    /**
     * Th??m gi?? tr??? cho thu???c t??nh
     * @param {number} attribute_id id thuoc tinh
     * @param {string} value_type lo???i gi?? tr???
     * @param {string} label nh??n
     * @returns {boolean}
     */
    this.addValuePopup = function (attribute_id, value_type, label, successCallback) {
        return this.getAttributeDetail(attribute_id, function(attr){
            self.showForm(null, function(data){
                let failCallback = function () {
                    setTimeout(function () {
                        App.modal.hide_callback = function () {
                            App.modal.show('popup-modal');
                        }
                    })
                };
                data.attribute_id = attribute_id;
                self.addAttributeValue(data, successCallback,
                    function (ers) {
                        if (ers.errors) {
                            let messages = [];
                            for (const key in ers.errors) {
                                if (object.hasOwnProperty(key)) {
                                    const element = ers.errors[key];
                                    messages.push(element);
                                }
                            }
                            App.modal.error(messages.join('<br />'), failCallback);
                        }
                    });
            });
        })
        let inputTypes = {
            int: "number",
            decimal: "number",
            varchar: "text",
            text: "textarea"
        };
        let inputType = inputTypes[value_type];
        let placeholder = "nh???p " + label;
        let inputs = {
            value: {
                type: inputType,
                label: label,
                placeholder: placeholder,
                id: 'attribute' + attribute_id + '-' + 'value',
                validate: function (value) {
                    if (value.length == 0) return false;
                    if (inputType == "number") {
                        if (value_type == "int" && parseInt(value) != value) {
                            return false
                        }
                        let numberValue = Number(value);
                        return !isNaN(numberValue);
                    }
                    return true;
                }
            }
        };
        if (value_type != 'text') {
            inputs.text = {
                type: "textarea",
                label: "Text hi???n th???",
                placeholder: "Kh??ng b???t bu???c"
            }
        }
        App.modal.popup({
            title: "Th??m gi?? tr??? " + label,
            inputs: inputs,
            btnDone: "Th??m",
            done: function (data) {
                let failCallback = function () {
                    setTimeout(function () {
                        App.modal.hide_callback = function () {
                            App.modal.show('popup-modal');
                        }
                    })
                };
                data.attribute_id = attribute_id;
                self.addAttributeValue(data, successCallback,
                    function (ers) {
                        if (ers.errors) {
                            let messages = [];
                            for (const key in ers.errors) {
                                if (object.hasOwnProperty(key)) {
                                    const element = ers.errors[key];
                                    messages.push(element);
                                }
                            }
                            App.modal.error(messages.join('<br />'), failCallback);
                        }
                    });
            }
        });
    };

    /**
     * th??m gi?? tr??? cho thu???c t??nh
     * @param {object} data 
     * @param {function} calback
     * @return {void}
     */
    this.addAttributeValue = function (data, success, fail) {
        if (typeof success != "function") success = cl;
        if (typeof fail != "function") fail = null;
        showLoading();
        ajaxRequest(addValueUrl, "POST", data, function (rs) {
            hideLoading();
            if (rs.status) {
                success(rs);
            } else if (fail) {
                fail(rs);
            }
            else if (rs.errors) {
                let messages = [];
                for (const key in rs.errors) {
                    if (object.hasOwnProperty(key)) {
                        const element = rs.errors[key];
                        messages.push(element);
                    }
                }
                App.modal.error(messages.join('<br />'));
            } else {
                App.modal.warning(rs.message);
            }
        }, function (e) {
            hideLoading();
            if (fail) {
                fail(e);
            }
            else {
                App.modal.error("L???i kh??ng x??c ?????nh");
            }

        })

    };
}


App.attrInput = {
    list: {},
    add: function (selector) {
        var $el = $(selector);
        if ($el.length) {
            let $select = new ProductAttribute($el[0]);
            $select.init();
            this.list[$el.data('id')] = $select;
        }
    },
    /**
     * 
     * @param {string} id 
     * @return {ProductAttribute}
     */
    getTag: function (id) {
        if (id) {
            if (typeof this.list[id] != "undefined") {
                return this.list[id];
            }
        }
        return null;
    },
    /**
     * l???y data
     * @param {string} id 
     */
    getData: function (id) {
        var tag = this.getTag(id);
        if (tag) return tag.getData();
        return [];
    }
};



$(function () {
    var $cs = $('.product-attributes');
    if ($cs.length) {
        $cs.each(function (i, el) {
            App.attrInput.add(el);
        });
    }
});
