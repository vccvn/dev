

        <!--=====================================-->
        <!--=        Courses Area Start         =-->
        <!--=====================================-->
        <div class="edu-course-area course-area-1 gap-tb-text">
            <div class="container-max">


                {{-- <div class="edu-sorting-area">
                    <div class="sorting-left">
                        <h6 class="showing-text">Chúng <span>71</span> courses available for you</h6>
                    </div>
                    <div class="sorting-right">
                        <div class="layout-switcher">
                            <label>Grid</label>
                            <ul class="switcher-btn">
                                <li><a href="course-one.html" class="active"><i class="icon-53"></i></a></li>
                                <li><a href="course-four.html" class=""><i class="icon-54"></i></a></li>
                            </ul>
                        </div>
                        <div class="edu-sorting">
                            <div class="icon"><i class="icon-55"></i></div>
                            <select class="edu-select">
                                <option>Filters</option>
                                <option>Low To High</option>
                                <option>High Low To</option>
                                <option>Last Viewed</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
                @if ($t = count($pages))
                    @include($_template.'pages.list.course-'.$listType)
                    {{ $pages->links($_template . 'pagination') }}
                @else
                    <div class="alert alert-warning text-cxenter">
                        Danh sách trống
                    </div>
                @endif
            </div>
        </div>
