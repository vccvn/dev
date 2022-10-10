
                            <!-- Start Single Widget  -->
                            <div class="edu-blog-widget widget-search">
                                <div class="inner">
                                    <h4 class="widget-title">{{$data->title('Tìm kiếm')}}</h4>
                                    <div class="content">
                                        <form class="blog-search" action="{{route('client.search')}}">
                                            <button class="search-button"><i class="icon-2"></i></button>
                                            <input type="text" name="search" value="{{$request->search}}" placeholder="{{$data->placeholder('Tìm kiếm...')}}">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget  -->