@if (count($tags = $helper->getTags(['@sort'=> $data->sorttype, '@limit' => $data->tag_number])))


                            <!-- Start Single Widget  -->
                            <div class="edu-blog-widget widget-tags">
                                <div class="inner">
                                    <h4 class="widget-title">{{$data->title('Thẻ bải viết')}}</h4>
                                    <div class="content">
                                        <div class="tag-list">
                                            
                                            @foreach ($tags as $tag)
                                            <a href="{{route('client.posts.tag', ['tag' => $tag->slug])}}">{{$tag->name}}</a>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget  -->
@endif
