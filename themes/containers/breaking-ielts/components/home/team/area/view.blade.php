

        <!--=====================================-->
        <!--=      		Team Area Start   		=-->
        <!--=====================================-->
        <!-- Start Team Area  -->
        <div class="edu-team-area team-area-1 gap-tb-text">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">{{$data->sub_title('Instructors')}}</span>
                    <h2 class="title">{!! nl2br(preg_replace('/\*([^\*]*)\*/si', '<span class="color-secondary">$1</span>', htmlentities($data->title('Course Instructors')))) !!}</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="row g-5">
                    {!! $children !!}
                </div>
            </div>
        </div>