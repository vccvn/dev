
        <!--=====================================-->
        <!--=       Contact Me Area Start       =-->
        <!--=====================================-->
        <section class="contact-us-area">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="offset-lg-2 col-lg-8 mr-auto ml-auto">
                        <div class="contact-form form-style-2">
                            <div class="section-title">
                                <h4 class="title">{{$data->form_title('Liên Hệ')}}</h4>
                                <p>{{$data->form_description}}</p>
                            </div>
            
                            <form class="rnt-contact-form rwt-dynamic-form {{ parse_classname('contact-form') }}" id="contact-form" method="POST" action="{{ route('client.contacts.ajax-send') }}" data-ajax-url="{{ route('client.contacts.ajax-send') }}" >
                                @csrf
                                <input type="hidden" name="subject" value="{{$data->form_subject}}">
                                <div class="row row--10">
                                    <div class="form-group col-12">
                                        <input type="text" name="name" id="contact-name" placeholder="Họ tên">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="email" name="email" id="contact-email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="tel" name="phone_number" id="contact-phone" placeholder="Số điện thoại">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" id="contact-message" cols="30" rows="4" placeholder="Nội dung"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">{{ $data->form_button_text('Gửi liên hệ') }} <i class="icon-4"></i></button>
                                    </div>
                                </div>
                            </form>
                            <ul class="shape-group">
                                <li class="shape-1 scene"><img data-depth="1" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape"></li>
                                <li class="shape-2 scene"><img data-depth="-1" src="{{theme_asset('images/counterup/shape-02.png')}}" alt="Shape"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>