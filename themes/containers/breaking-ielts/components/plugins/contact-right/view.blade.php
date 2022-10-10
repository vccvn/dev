@php
    $email = $data->email??($options->theme->contacts->email??$siteinfo->email('breakingieltsvn@gmail.com'));
    $phone_number = $data->phone_number??($options->theme->contacts->phone_number??$siteinfo->phone_number('0987654321'));
    $messenger_url = $data->messeng_url;
    $custom_link = $data->custom_link;
@endphp
<div class="right-widget">
    <a href="mailto:{{$email}}">
        <img src="{{theme_asset('images/icons/mail.svg')}}">
        <span>Email</span>
    </a>
    <a href="tel:{{$phone_number}}">
        <img src="{{theme_asset('images/icons/phone.svg')}}">
        <span>Phone</span>
    </a>
    <a href="{{$messenger_url}}" target="_blank">
        <img src="{{theme_asset('images/icons/mes.svg')}}">
        <span>Messenger</span>
    </a>
    <a href="{{$custom_link}}" target="_blank">
        <img src="{{theme_asset('images/icons/test.svg')}}">
        <span>Test</span>
    </a>
</div>
