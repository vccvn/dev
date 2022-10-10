

        <!--=====================================-->
        <!--=       Category Area Start      	=-->
        <!--=====================================-->
        <!-- Start Categories Area  -->
        <div class="edu-categorie-area categorie-area-1 edu-section-gap">
            <div class="container">
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    {{-- <span class="pre-title pre-textsecondary">Categories</span> --}}
                    <h2 class="title">{{$data->title}}</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                    <p>{!! nl2br(htmlentities($data->description)) !!}</p>
                </div>
                <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    {{-- <h2 class="title">Online <span class="color-primary">Classes</span> For Remote Learning.</h2> --}}
                    <h2 class="title">
                        {{$data->slogan_title}}
                    </h2>
                    
                </div>


                <div class="row g-5">
                    {!! $children !!}
                </div>
            </div>
        </div>
        <!-- End Categories Area  -->
