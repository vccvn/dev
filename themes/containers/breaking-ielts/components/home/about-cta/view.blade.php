

        <!--=====================================-->
        <!--=       About Us Area Start      	=-->
        <!--=====================================-->
        <div class="gap-bottom-equal edu-about-area about-style-1">
            <div class="container edublink-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                <span class="pre-title">{{$data->sub_title}}</span>
                                <h2 class="title">
                                    {!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}
                                </h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>{{$data->description}}</p>
                            </div>
                            <ul class="features-list">
                                @if ($features = nl2array($data->features))
                                    @foreach ($features as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="contact-form form-style-2">
                            <div class="section-title">
                                <h4 class="title">{{$data->form_title}}</h4>
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
                                        <textarea name="message" id="contact-message" cols="30" rows="4" placeholder="Nội dung liên hệ"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">{{ $data->form_button_text('Đăng ký tư vấn') }} <i class="icon-4"></i></button>
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
                <ul class="shape-group">
                    <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                        <span data-depth="-2.3"></span>
                    </li>
                </ul>
            </div>
        </div>