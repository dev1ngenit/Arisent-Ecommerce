<style>
    .active {
        color: rgb(237, 33, 41) !important;
    }
</style>

<div class="col-lg-3 order-2 order-lg-1">

    @php
        $brands = App\Models\Brand::where('status', '1')->orderBy('brand_name', 'ASC')->latest()->limit(7)->get();
        $categorys = App\Models\Admin\Category::where('status', '1')
            ->orderBy('category_name', 'ASC')
            ->latest()
            ->limit(9)
            ->get();
    @endphp

    <div class="common-sidebar shop-banner-sidebar">

        {{-- Category  --}}

        <div class="common-cat">
            <div class="side-title">
                <h6>Category</h6>
            </div>
            <div id="accordionBrands" class="accordion">
                <div class="card border-0 shadow-none mb-0">

                    @foreach ($categorys as $category)
                        <div class="card-header pl-0 {{ optional($catwiseproduct)->id == $category->id ? 'mark-cat' : 'collapsed' }}"
                            data-toggle="collapse" data-parent="#accordion"
                            aria-expanded="{{ optional($catwiseproduct)->id == $category->id ? 'true' : '' }}"
                            href="#cat{{ $category->id }}">
                            <a
                                class="card-title {{ optional($catwiseproduct)->id == $category->id ? 'mark-cat' : '' }}">
                                {{ $category->category_name }}
                            </a>
                        </div>

                        <div id="cat{{ $category->id }}" class="collapse" data-parent="#accordion"
                            style="background-color: #f5f5f5;">

                            @php
                                $subcategorys = App\Models\Admin\SubCategory::where('status', '1')
                                    ->where('category_id', $category->id)
                                    ->latest()
                                    ->get();
                            @endphp

                            <div id="accordion2" class="accordion pl-3">
                                @foreach ($subcategorys as $subcategory)
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-header category-filter {{ optional($childcatwiseproduct)->subcategory_id == $subcategory->id ? 'mark-sub-cat' : 'collapsed' }} pl-0"
                                            data-toggle="collapse" data-target="#sub{{ $subcategory->id }}">
                                            <a class="card-title">
                                                {{ $subcategory->subcategory_name }}
                                            </a>
                                        </div>

                                        <div id="sub{{ $subcategory->id }}" class="collapse" data-parent="#accordion2"
                                            style="background-color: #f5f5f5;">
                                            @php
                                                $childcategorys = App\Models\Admin\ChildCategory::where('status', '1')
                                                    ->where('subcategory_id', $subcategory->id)
                                                    ->latest()
                                                    ->get();
                                            @endphp
                                            @foreach ($childcategorys as $childcategory)
                                                <div class="card-body p-2 {{ optional($childcatwiseproduct)->id == $childcategory->id ? 'marks' : '' }}"
                                                    aria-expanded="{{ optional($childcatwiseproduct)->id == $childcategory->id ? 'true' : 'false' }}">
                                                    <a href="{{ url('product/childcategory/' . $childcategory->id . '/' . $childcategory->childcategory_slug) }}"
                                                        class="pl-3 text-muted childcategory-link {{ optional($childcatwiseproduct)->id == $childcategory->id ? 'marks' : 'collapsed' }}">{{ $childcategory->childcategory_name }}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        {{-- Category  --}}


        {{-- Brand  --}}
        <div class="common-cat mt-5">
            <div class="side-title">
                <h6>Brands</h6>
            </div>
            <div>
                @foreach ($brands as $brand)
                    <div class="card brand-filter pl-0">
                        <a class="card-title mb-0 {{ request()->route('brand_slug') == $brand->brand_slug ? 'active-brand' : '' }}"
                            style="color: #170000; padding: .75rem 0rem; color: {{ request()->route('brand_slug') == $brand->brand_slug ? 'red' : '#170000' }};"
                            href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">
                            {{ $brand->brand_name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Brand  --}}

    </div>

</div>
