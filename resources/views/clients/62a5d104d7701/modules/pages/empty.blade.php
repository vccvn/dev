@extends($_layout.'blog')
@section('title', $page_title)
@include($_lib.'register-meta')

@section('page.header.show', 'breadcrumb')
@section('content')
<div class="col-12">
    <div class="alert alert-warning text-center">
        Không tìm thấy kết quả phù hộp!
    </div>
</div>
@endsection