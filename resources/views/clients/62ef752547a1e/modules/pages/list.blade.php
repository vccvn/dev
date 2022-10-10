@php
    $pageSettings = $options->theme->pages;
    if (isset($parent)) {
        if ($dynamicSettings = get_ielts_page_settings($parent->id)) {
            $pSettings = $dynamicSettings;
            $pageSettings->merge($dynamicSettings->all());
        }
        if ($parent != $article && ($peSettings = get_ielts_page_settings($article->id))) {
            $pageSettings->merge($peSettings->all());
        }
    } elseif ($pSettings = get_ielts_page_settings($article->id)) {
        $pageSettings->merge($pSettings->all());
    }

    $pageOptions = $pageSettings->makeByPrefix('list_');
    $show_breadcrumb = $pageSettings->show_breadcrumb;
    $layout = $pageOptions->layout('sidebar');
    $style = $pageOptions->style;
    $listType = $pageOptions->type('list');
@endphp
@extends($_layout.'master')
@section('title', $page_title)
@include($_lib.'register-meta')
@section('show_breadcrumb', $show_breadcrumb?1:'')
@section('breadcrumb.title', $page_title)
@section('content')
    
    @include($_current.'templates.list.'.$style)

@endsection