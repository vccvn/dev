@extends($_layout.'master')
@include($_lib.'register-meta')
@section('page.header.show', 'breadcrumb')
@section('content')



@if (!session('order_code'))
<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <div class="login-title">
                <h2>Thanh Toán</h2>
            </div>

            <form class="form" action="{{route('client.payments.check-order')}}" method="POST">
                @csrf
                @if ($error = session('error'))
                <div class="alert alert-danger text-center">
                    {{$error}}
                </div>
                @endif

                <div class="input">
                    <label class="form__label" for="contact">
                        Email hoặc Số điện thoại <span>*</span>
                    </label>
                    <input type="text" name="contact" id="contact" class="form-control" value="{{old('contact')}}">
                </div>
                @if ($error = $errors->first('contact'))
                <div class="alert alert-danger text-center">
                    {{$error}}
                </div>
                @endif
                <div class="input">
                    <label class="form__label" for="order_code">
                        Mã đơn hàng <span>*</span>
                    </label>
                    <input type="text" name="order_code" id="order_code" class="form-control" value="{{old('order_code')}}">
                </div>
                @if ($error = $errors->first('order_code'))
                <div class="alert alert-danger text-center">
                    {{$error}}
                </div>
                @endif
                <div class="input submit">
                    <button type="submit" class="btn btn-colored-default">Tiếp tục</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Log In Section End -->





@else


<section class="page-not-found section-b-space">
    <div class="container">
        <div class="ps-section__content">

            <div class="row">
                <div class="col-lg-6 mb-md--40">
                    <h3 class="heading-secondary mb-5">Thanh toán</h3>
                    <div class="login-reg-box bg-white">
                        <form action="{{route('client.payments.verify-transfer')}}" method="post" enctype="multipart/form-data">
                            <div class="ps-form__content">
                                @csrf
                                <input type="hidden" name="order_code" value="{{session('order_code')}}">
                                <div class="form-group">
                                    <label class="form__label" for="order_code">
                                        Mã đơn hàng <span>*</span>
                                    </label>
                                    <input type="text" name="code" id="order_code" class="form-control" value="{{session('order_code')}}" placeholder="Mã đơn hàng" readonly>
                                </div>
                                @if ($error = $errors->first('order_code'))
                                <div class="alert alert-danger text-center">
                                    {{$error}}
                                </div>
                                @endif

                                <div class="form-group mt-3">
                                    <label for="billing_transaction_image" class="form__label mb-2">Biên lai <span>*</span></label>
                                    <div class="custom-file">
                                        <input type="file" name="image" id="billing_transaction_image" class="custom-file-input">
                                        {{-- <label class="custom-file-label" for="billing_transaction_image">Chưa có file nào dc chọn</label> --}}
                                    </div>
                                    @if ($errors->has('image'))
                                    <div class="error has-error">{{$errors->first('image')}}</div>
                                    @endif
                                </div>
                                <div class="form-group mt-3">
                                    <label for="orderNotes" class="form__label mb-2">Ghi chú </label>
                                    <textarea class="form-control" id="orderNotes" name="note" placeholder="Ghi chú (Tùy chọn)">{{old('note')}}</textarea>
                                </div>
                                <div class="form-group submit mt-3">
                                    <button type="submit" class="btn btn-colored-default">Gửi</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mb-md--40">
                    <h3 class="heading-secondary mb-5">Hướng dẫn</h3>
                    <div class=" bg-white" style="font-size: large">
                        @include($_lib.'payments.transfer')
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>


@endif






@endsection
