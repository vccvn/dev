
        <!--=====================================-->
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        <div class="edu-about-area about-style-3">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-content">
                            <div class="section-title section-left">
                                @if ($data->sub_title)
                                    <span class="pre-title">{{$data->sub_title}}</span>
                                @endif
                                <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title))) !!}</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                            </div>
                            @if ($children && $tabs = $children->getComponentDatas())
                                    
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach ($tabs as $item)
                                        
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{$loop->index == 0 ?'active':""}}" data-bs-toggle="tab" data-bs-target="#about-edu-{{$data->index}}-{{$loop->index}}" type="button" role="tab" aria-selected="true">{{$item->title}}</button>
                                        </li>
                                        
                                    @endforeach
                                    
                                </ul>
                                <div class="tab-content">
                                    @foreach ($tabs as $item)
                                        
                                        <div class="tab-pane fade {{$loop->index == 0 ?'show active':''}}" id="about-edu-{{$data->index}}-{{$loop->index}}" role="tabpanel">
                                            <p>{{$item->description}}</p>
                                            <ul class="features-list">
                                                @if ($features = nl2array($item->features))
                                                    @foreach ($features as $line)
                                                        <li>{{$line}}</li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        
                                    @endforeach
                                    
                                </div>

                                
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="{{$data->image_large??theme_asset('images/about/about-04.jpg')}}" alt="{{$data->title}}">
                            <img class="main-img-2" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="{{$data->image_small??theme_asset('images/about/about-05.jpg')}}" alt="{{$data->title}}">
                            <ul class="shape-group">
                                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape">
                                </li>
                                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="-2" src="{{theme_asset('images/about/shape-39.png')}}" alt="Shape">
                                </li>
                                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <img data-depth="2" src="{{theme_asset('images/about/shape-07.png')}}" alt="Shape">
                                </li>
                                <li class="shape-4" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                    <span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1">
                    <img class="rotateit" src="{{theme_asset('images/about/shape-13.png')}}" alt="Shape">
                </li>
                <li class="shape-2 scene">
                    <span></span>
                </li>
            </ul>
        </div>