<?php
add_js_src('static/plugins/ckeditor5/build/ckeditor.js');
add_js_src('static/manager/js/ckeditor.js');


$input->addClass("crazy-ckeditor");
$input->type="textarea";

?>

{!! $input !!}