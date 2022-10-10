



        <!--=====================================-->
        <!--=        Blog Area Start            =-->
        <!--=====================================-->
        <section class="section-gap-equal">
            <div class="container{{$listType == 'grid'?'-max':''}}">
                <div class="row row--30">
                    <div class="{{$layout == 'sidebar' ? 'col-lg-8 col-xl-9': 'col-12'}}">
                        <div class="alert alert-warning text-cxenter">
                            Danh sách trống
                        </div>
                    </div>
                    @if ($layout == 'sidebar')
                            
                        <div class="col-lg-4 col-xl-3">
                            @include($_current . 'templates.sidebars.style-2')
                        </div>
                    
                    @endif
                </div>
            </div>
        </section>