@extends($_layout.'master')
@section('title', $account->formConfig->title)
@include($_lib.'register-meta')
@php
    add_js_src(theme_asset('js/filter.js'));
@endphp
@section('content')
    <section class="section-b-space min-80vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xxl-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        @foreach ($account->settings as $sk => $item)
                            <li class="nav-item mb-2">
                                <a href="{{route('client.account.settings', ['tab' => $item->slug])}}" class="nav-link font-light {{$account->tab == $sk ? "active":""}}" id="tab" data-bs-target="#dash"><i class="fas fa-angle-right"></i>{{$item->title}}</a>
                            </li>
                        @endforeach
                        <li class="nav-item mb-2">
                            <a href="{{route('client.orders.manager')}}" class="nav-link font-light" id="5-tab" data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Quản lý đơn hàng</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('client.account.logout')}}" class="nav-link font-light" id="6-tab" data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Thoát</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8 col-xxl-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Hiển thị menu</button>
                    </div>
                    <form method="POST" action="{{route('client.account.settings', ['tab' => $account->formConfig->slug])}}" class="form">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade dashboard-profile dashboard" id="dash">
                                <div class="box-head">
                                    <h3>{{$account->formConfig->title}}</h3>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Cật nhật</a>
                                </div>
                                <ul class="dash-profile">
                                    @csrf
                                    @if ($message = session('message'))
                                        <div class="alert alert-success mb-3">
                                            {{$message}}
                                        </div>
                                    @elseif($error = session('error'))
                                        <div class="alert alert-danger mb-3">
                                            {{$error}}
                                        </div>
                                    @endif
                                    @if ($form = $account->form)
                                        <?php
                                        $form->map('addClass', 'form-control');
                                        ?>
                                        @foreach ($form as $input)
                                            <li>
                                                <div class="left">
                                                    <label for="{{$input->id}}" class="font-light" >{{$input->label}}</label>
                                                </div>
                                                <div class="right">
                                                    {!!$input!!}
                                                </div>
                                            </li>
                                            <li>
                                                @if ($input->error)
                                                    <div class="has-error text-danger">{{$input->error}}</div>
                                                @endif
                                            </li>
                                        @endforeach
                                    @endif
                                    <li class="mt-20">
                                        <div class="left">
                                    
                                        </div>
                                        <div class="right">
                                            <button class="btn btn-theme btn-theme-color">Cật nhật</button>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection