
@php
$contacts = $options->theme->contacts;
    $show_page_header = 1;
    $page_title = $contacts->page_title('Liên hệ');
    $socials = $options->theme->socials;
    $list = ['facebook', 'twitter', 'instagram', 'youtube', 'linkedin'];
@endphp
@extends($_layout.'master')
@section('title', $page_title)

@section('show_breadcrumb', 1)
@section('breadcrumb.title', $page_title)

@if ($contacts->page_description)
    
@section('meta_description', $contacts->page_description)
    
@endif

@include($_lib.'register-meta')

@section('content')
    

        <!--=====================================-->
        <!--=       Contact Me Area Start       =-->
        <!--=====================================-->
        <section class="contact-us-area">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-6">
                        <div class="contact-us-info">
                            <h3 class="heading-title">{{$contacts->info_title}}</h3>
                            <ul class="address-list">
                                <li>
                                    <h5 class="title">Địa chỉ</h5>
                                    <p>{{$contacts->address}}</p>
                                </li>
                                <li>
                                    <h5 class="title">Email</h5>
                                    <p><a href="mailto:{{$email = $contacts->email('breakingielts@gmail.com')}}">{{$email}}</a></p>
                                </li>
                                <li>
                                    <h5 class="title">Hotline</h5>
                                    <p><a href="tel:{{$phone = $contacts->phone_number($siteinfo->phone_number('0945786960'))}}">{{$phone}}</a></p>
                                </li>
                            </ul>
                            <ul class="social-share">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                @foreach ($list as $item)
                                    @if ($link = $socials->get($item))
                                        <li><a href="{{$link}}"><i class="icon-{{$item . ($item == 'linkedin'?2:'')}}"></i></a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="offset-xl-2 col-lg-6">
                        <div class="contact-form form-style-2">
                            <div class="section-title">
                                <h4 class="title">{{$contacts->form_title}}</h4>
                                <p>{{$contacts->form_description}}</p>
                            </div>
            
                            <form class="rnt-contact-form rwt-dynamic-form {{ parse_classname('contact-form') }}" id="contact-form" method="POST" action="{{ route('client.contacts.ajax-send') }}" data-ajax-url="{{ route('client.contacts.ajax-send') }}" >
                                @csrf
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
                                        <textarea name="message_number" id="contact-message" cols="30" rows="4" placeholder="Nội dung liên hệ"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">{{ $contacts->button_text('Send message') }} <i class="icon-4"></i></button>
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
        <!--=====================================-->
        <!--=      Google Map Area Start        =-->
        <!--=====================================-->
        <div class="google-map-area">
            <div class="mapouter">
                <div class="gmap_canvas">
                    {!! $contacts->map_code !!}
                </div>
            </div>
        </div>


    @endsection