
                    
                    
                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-team-grid team-style-1">
                            <div class="inner">
                                <div class="thumbnail-wrap">
                                    <div class="thumbnail">
                                        <a href="{{$data->link}}">
                                            <img src="{{$data->avatar(theme_asset('images/team/team-0'.($data->index+1).'.jpg'))}}" alt="{{$data->itle}}">
                                        </a>
                                    </div>
                                    <ul class="team-share-info">
                                        <li><a href="{{$data->link}}"><i class="icon-share-alt"></i></a></li>
                                        @if ($data->facebook)
                                        <li><a href="{{$data->facebook}}"><i class="icon-facebook"></i></a></li>    
                                        @endif
                                        @if ($data->twitter)
                                        <li><a href="{{$data->twitter}}"><i class="icon-twitter"></i></a></li>
                                        @endif
                                        @if ($data->linkedin)
                                        <li><a href="{{$data->linkedin}}"><i class="icon-linkedin2"></i></a></li>
                                        @endif
                                        
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{$data->link}}">{{$data->title}}</a></h5>
                                    <span class="designation">{{$data->job('Giảng viên')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Instructor Grid  -->