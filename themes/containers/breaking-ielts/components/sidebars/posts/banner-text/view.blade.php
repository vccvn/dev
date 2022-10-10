

                            <!-- Start Single Widget  -->
                            <div class="edu-blog-widget widget-action">
                                <div class="inner">
                                    <h4 class="title">{!! preg_replace('/\*([^\*]*)\*/si', '<span>$1</span>', htmlentities($data->title)) !!}</h4>
                                    <span class="shape-line"><i class="icon-19"></i></span>
                                    <p>{{$data->description}}</p>
                                    <a href="{{$data->url}}" class="edu-btn btn-medium">{{$data->button_text}} <i class="icon-4"></i></a>
                                </div>
                            </div>
                            <!-- End Single Widget  -->