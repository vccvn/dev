



        <!--=====================================-->
        <!--=        Blog Area Start            =-->
        <!--=====================================-->
        <section class="section-gap-equal">
            <div class="container{{$listType == 'grid'?'-max':''}}">
                <div class="row row--30">
                    <div class="{{$layout == 'sidebar' ? 'col-lg-8 col-xl-9': 'col-12'}}">
                        @if ($t = count($posts))
                            @if ($listType == 'standard')
                                @include($_template.'posts.list.blog-standard')
                            @elseif($listType == 'list')
                                @include($_template.'posts.list.blog-list')
                            @else
                                @include($_template.'posts.list.blog-masonry')
                            @endif
                            
                            {{ $posts->links($_template . 'pagination') }}
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
        </section>