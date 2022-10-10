{{-- @section('title', $page_title) --}}
@include($_lib.'register-meta')
@extends($_layout.'master')
@section('content')
    {!! $html->home_area->components !!}

@endsection