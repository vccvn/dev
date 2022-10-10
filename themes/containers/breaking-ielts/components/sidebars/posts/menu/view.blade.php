

                            <!-- Start Single Widget  -->
                            <div class="edu-blog-widget widget-categories">
                                <div class="inner">
                                    <h4 class="widget-title">{{$data->title}}</h4>
                                    <div class="content">
                                        {!! 
                                        $helper->getCustomMenu(['id' => $data->menu_id], $data->level(1), [
                                            'class' => 'category-list'
                                        ]) 
                                        !!}
                                    </div>
                                </div>
                            </div>
