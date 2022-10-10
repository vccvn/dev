<div class="row g-4">
    <!-- filter button -->
    <div class="filter-button">
        <button class="danger-button danger-center btn btn-sm filter-btn"><i data-feather="align-left"></i> Bộ lọc</button>
    </div>
    <!-- filter button -->
    <!-- label and featured section -->
    <div class="col-md-12">
        <h3 class="">{{$page_title}}</h3>
        @php
            $cc = array_map('trim', explode(',', $request->categories));
        @endphp
        @if (count($cc) && count($categories = $helper->getProductCategories(['id' => $cc])))
            
            <ul class="short-name mt-3">
                @foreach ($categories as $cate)
                    <li>
                        <div class="label-tag">
                            <span>{{$cate->name}}</span>
                            <button type="button" class="btn-close btn-close-filter-category" data-id="{{$cate->id}}" aria-label="Close"></button>
                        </div>
                    </li>
                   
                @endforeach
                
            </ul>
            
        @endif

        @if (isset($category) && $category && $category->first_content)
            <div class="cate-content-box {{strlen($category->first_content) > 300?'viewmoreable':''}}">
                <div class="content-box article-content">
                    {!! $category->first_content !!}
                </div>
                
                <div class="see-more-content">
                    <a href="javascript:;" class="btn-see-more">Xem thêm</a>
                </div>
            </div>
        @endif
    </div>

</div>
