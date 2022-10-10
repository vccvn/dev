@php
    $postSettings = $options->theme->posts;
    if($dynamicSettings = get_ielts_post_settings($dynamic->id)){
        $postSettings = $dynamicSettings;
    }

    $postOptions = $postSettings->makeByPrefix('list_');
    $show_breadcrumb = $postSettings->show_breadcrumb;
    $layout = $postOptions->layout('sidebar');
    $style = $postOptions->style;
    $listType = $postOptions->type('list');
@endphp
@extends($_layout.'master')
@section('title', $page_title)
@include($_lib.'register-meta')
@section('show_breadcrumb', 1)
@section('breadcrumb.title', $page_title)
@section('content')
    
    @include($_current.'templates.empty.'.$style)

@endsection