
        <!--=====================================-->
        <!--=        Event Area Start         =-->
        <!--=====================================-->
        <div class="edu-event-area event-area-1 section-gap-equal">
            <div class="container{{$listType == 'grid'?'-max':''}}">
                <div class="row g-5">
                    <div class="{{$layout == 'sidebar' ? 'col-lg-8 col-xl-9': 'col-12'}} col-pr--35">
                        @if ($t = count($pages))
                            
                            @if ($listType == 'grid')
                                @include($_template.'pages.list.grid')
                            @else
                                @include($_template.'pages.list.list')
                            @endif
                            
                            {{ $pages->links($_template . 'pagination') }}
                        @else
                            <div class="alert alert-warning text-cxenter">
                                Danh sách trống
                            </div>
                        @endif

                    </div>
                    @if ($layout == 'sidebar')
                            
                        <div class="col-lg-4 col-xl-3">
                            @include($_current . 'templates.sidebars.style-2')
                        </div>
                    
                    @endif
                    
                </div>

            </div>
        </div>
