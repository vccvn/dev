
                        @if ($t = count($courses))
                        @php
                            if(isset($column_class) && $column_class){
                                $columnClass = $column_class;
                            }
                            else{

                                $xs = isset($col_xs) && is_numeric($col_xs) && in_array($col_xs, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_xs : null;

                                $sm = isset($col_sm) && is_numeric($col_sm) && in_array($col_sm, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_sm : 12;

                                $md = isset($col_md) && is_numeric($col_md) && in_array($col_md, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_md : 6;

                                $lg = isset($col_lg) && is_numeric($col_lg) && in_array($col_lg, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_lg : 4;

                                $xl = isset($col_xl) && is_numeric($col_xl) && in_array($col_xl, [1,2,3,4,5,6,7,8,9,10,11,12]) ? $col_xl : $lg;


                                $columnClass = ($xs? 'col-' . $xs. ' ' : ''). 'col-sm-' . $sm . ' ' .'col-md-' . $md . ' ' . 'col-lg-' . $lg . ' ' .  'col-xl-' . $xl;

                            }
                            
                        @endphp
                        <div class="row g-5">
                            
                            @foreach ($courses as $course)
                                @php
                                    $url = $course->view_url;
                                    $rating_avg = $course->rating_avg??0;
                                    $rating_count = $course->rating_count??0;
                                @endphp                    
                                <!-- Start Single Course  -->
                                <div class="{{$columnClass}}" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="{{$url}}">
                                                    <img src="{{$course->getThumbnail()}}" alt="{{$course->title}}">
                                                </a>
                                                <div class="time-top">
                                                    <span class="duration"><i class="icon-61"></i>{{$course->duetime_label}}</span>
                                                </div>
                                                
                                            </div>
                                            <div class="content">
                                                <span class="course-level">
                                                    {{-- Cho người mới bắt đầu --}}
                                                    {{$course->user_level}}
                                                </span>
                                                <h6 class="title">
                                                    <a href="{{$url}}">{{$course->title}}</a>
                                                </h6>
                                                @if ($rating_avg && $rating_count)
                
                                                    <div class="course-rating">
                                                        <div class="rating">
                                                            @for ($i = 0; $i < $rating_avg; $i++)
                                                                
                                                            <i class="icon-23"></i>
                                                            
                                                            @endfor
                                                        </div>
                                                        <span class="rating-count">({{$rating_avg}} /{{$rating_count}})</span>
                                                    </div>
                                                    
                                                @endif
                                                <div class="course-price">{{$course->price_format_text}}</div>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>{{$course->lesson_count??0}} buổi học</li>
                                                    <li><i class="icon-25"></i>{{$course->student_count??0}} học viên</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="course-hover-content-wrapper">
                                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                                        </div>
                                        <div class="course-hover-content-wrapper">
                                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                                        </div>
                                        <div class="course-hover-content">
                                            <div class="content">
                                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                                <span class="course-level">
                                                    {{-- Khóa level 2 --}}
                                                    {{$course->course_level}}
                                                </span>
                                                <h6 class="title">
                                                    <a href="{{$url}}">{{$course->title}}</a>
                                                </h6>
                                                @if ($rating_avg && $rating_count)
                
                                                    <div class="course-rating">
                                                        <div class="rating">
                                                            @for ($i = 0; $i < $rating_avg; $i++)
                                                                
                                                            <i class="icon-23"></i>
                                                            
                                                            @endfor
                                                        </div>
                                                        <span class="rating-count">({{$rating_avg}} /{{$rating_count}})</span>
                                                    </div>
                                                    
                                                @endif
                                                <div class="course-price">{{$course->price_format_text}}</div>
                                                <p>{{$course->getShortDesc(80)}}</p>
                                                <ul class="course-meta">
                                                    <li><i class="icon-24"></i>{{$course->lesson_count??0}} buổi học</li>
                                                    <li><i class="icon-25"></i>{{$course->student_count??0}} học viên</li>
                                                </ul>
                                                <a href="{{$url}}" class="edu-btn btn-secondary btn-small">Nhập học <i class="icon-4"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                            @endforeach
                            
                        </div>
                    @endif