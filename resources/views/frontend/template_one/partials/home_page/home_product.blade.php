@php
    $categorys = App\Models\Admin\Category::where('status', '1')->orderBy('id', 'ASC')->distinct()->limit(4)->get();
    $allproducts = App\Models\Admin\Product::where('status', '1')->latest()->get();
@endphp

<section class="pb-20">
    <div class="container">
        <div class="row all__product--row align-items-center justify-content-between">
            <div class="col-xl-12 col-md-12">
                <div class="all__product--menu mb-30">
                    <nav>
                        <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link btn orange-bg-btn pure__black-color active" id="nav-all-tab"
                                data-toggle="tab" href="#categoryAll" role="tab" aria-controls="nav-home"
                                aria-selected="true">All</a>
                            @foreach ($categorys as $category)
                                @if ($category->products->isNotEmpty())
                                    <a class="nav-item nav-link btn orange-bg-btn pure__black-color"
                                        id="nav-category{{ $category->id }}-tab" data-toggle="tab"
                                        href="#categorys_{{ $category->id }}" role="tab"
                                        aria-controls="nav-category{{ $category->id }}" aria-selected="false">
                                        {{ $category->category_name }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="all__product--body pb-20">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- All Products Tab -->


                        <!-- Category-specific Products -->
                        @foreach ($categorys as $key => $category)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="categoryAll"
                                role="tabpanel" aria-labelledby="nav-all-tab">
                                <div class="product__active product_slider owl-carousel mr-2">
                                    @foreach ($allproducts as $cat_product)
                                        <div class="product-grid mr-3">
                                            <div class="product-image">
                                                <a href="{{ url('product/' . $cat_product->id . '/' . $cat_product->product_slug) }}"
                                                    class="image">
                                                    <img title="{{ $cat_product->product_name }}"
                                                        src="{{ asset($cat_product->product_image) }}"
                                                        data-tip="{{ $cat_product->product_name }}"
                                                        style="width:100%; height: 300px;">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a type="submit" class="add_to_wishlist"
                                                            style="cursor: pointer;"
                                                            data-product_id="{{ $cat_product->id }}"
                                                            data-tip="Wishlist"><i class="far fa-heart"></i></a></li>
                                                    <li><a type="submit" style="cursor:pointer;" class="add_to_compare"
                                                            data-product_id="{{ $cat_product->id }}"
                                                            data-tip="Compare"><i class="fas fa-random"></i></a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="product-content d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span><a class="text-muted"
                                                            href="{{ url('product/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ $cat_product->brand->brand_name }}</a></span>
                                                    <h3 title="{{ $cat_product->product_name }}"
                                                        class="title font-weight-bold">
                                                        <a
                                                            href="{{ url('product/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ substr($cat_product->product_name, 0, 25) }}</a>
                                                    </h3>
                                                </div>

                                                {{-- <div class="price font-weight-bold pr-2">
                                                    @if ($cat_product->price_status == 'rfq')
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->sas_price }}</h6>
                                                    @elseif ($cat_product->price_status == 'offer_price')
                                                        <del>${{ $cat_product->price }}</del>
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->discount_price }}</h6>
                                                    @elseif ($cat_product->price_status == 'price')
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->price }}</h6>
                                                    @endif
                                                </div> --}}

                                                <div class="price font-weight-bold pr-2">
                                                    @if ($cat_product->price_status == 'rfq' && !is_null($cat_product->sas_price))
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->sas_price }}
                                                        </h6>
                                                    @elseif (
                                                        $cat_product->price_status == 'offer_price' &&
                                                            !is_null($cat_product->discount_price) &&
                                                            !is_null($cat_product->price))
                                                        <del>${{ $cat_product->price }}</del>
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->discount_price }}
                                                        </h6>
                                                    @elseif ($cat_product->price_status == 'price' && !is_null($cat_product->price))
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->price }}
                                                        </h6>
                                                    @else
                                                        <!-- Optional: Show a default message if no price is available -->
                                                        <h6 class="grenadier-color mb-0 font-weight-bold"></h6>
                                                    @endif
                                                </div>


                                            </div>

                                            {{-- <a type="submit" style="cursor:pointer;"
                                                class="add-cart add_to_cart_btn_product"
                                                data-product_id="{{ $cat_product->id }}">Add to cart</a> --}}

                                            @if ($cat_product->sas_price !== null || $cat_product->price !== null || $cat_product->discount_price !== null)
                                                <a type="submit" style="cursor:pointer;"
                                                    class="add-cart add_to_cart_btn_product"
                                                    data-product_id="{{ $cat_product->id }}">Add to cart</a>
                                            @else
                                                <a href="{{ route('template_one.contact') }}" class="add-cart">Contact
                                                    Us</a>
                                            @endif

                                            {{-- @if ($product->sas_price !== null || $product->price !== null || $product->discount_price !== null)
                                                <a type="submit" style="cursor:pointer;"
                                                    class="add-cart add_to_cart_btn_product"
                                                    data-product_id="{{ $product->id }}">Add to cart</a>
                                            @else
                                                <a href="{{ route('template_one.contact') }}" class="add-cart">Contact
                                                    Us</a>
                                            @endif --}}

                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="categorys_{{ $category->id }}" role="tabpanel"
                                aria-labelledby="nav-category{{ $category->id }}-tab">
                                <div class="product__active product_slider owl-carousel mr-2">
                                    @foreach ($category->products->unique() as $cat_product)
                                        <div class="product-grid mr-3">
                                            <div class="product-image">
                                                <a href="{{ url('product/' . $cat_product->id . '/' . $cat_product->product_slug) }}"
                                                    class="image">
                                                    <img title="{{ $cat_product->product_name }}"
                                                        src="{{ asset($cat_product->product_image) }}"
                                                        data-tip="{{ $cat_product->product_name }}"
                                                        style="width:100%; height: 300px;">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a type="submit" class="add_to_wishlist"
                                                            style="cursor: pointer;"
                                                            data-product_id="{{ $cat_product->id }}"
                                                            data-tip="Wishlist"><i class="far fa-heart"></i></a></li>
                                                    <li><a type="submit" style="cursor:pointer;" class="add_to_compare"
                                                            data-product_id="{{ $cat_product->id }}"
                                                            data-tip="Compare"><i class="fas fa-random"></i></a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="product-content d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span><a class="text-muted"
                                                            href="{{ url('product/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ $cat_product->brand->brand_name }}</a></span>
                                                    <h3 title="{{ $cat_product->product_name }}"
                                                        class="title font-weight-bold">
                                                        <a
                                                            href="{{ url('product/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ substr($cat_product->product_name, 0, 25) }}</a>
                                                    </h3>
                                                </div>

                                                {{-- <div class="price font-weight-bold pr-2">
                                                    @if ($cat_product->price_status == 'rfq')
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->sas_price }}</h6>
                                                    @elseif ($cat_product->price_status == 'offer_price')
                                                        <del>${{ $cat_product->price }}</del>
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->discount_price }}</h6>
                                                    @elseif ($cat_product->price_status == 'price')
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->price }}</h6>
                                                    @endif
                                                </div> --}}

                                                <div class="price font-weight-bold pr-2">
                                                    @if ($cat_product->price_status == 'rfq' && !is_null($cat_product->sas_price))
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->sas_price }}
                                                        </h6>
                                                    @elseif (
                                                        $cat_product->price_status == 'offer_price' &&
                                                            !is_null($cat_product->discount_price) &&
                                                            !is_null($cat_product->price))
                                                        <del>${{ $cat_product->price }}</del>
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->discount_price }}
                                                        </h6>
                                                    @elseif ($cat_product->price_status == 'price' && !is_null($cat_product->price))
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            ${{ $cat_product->price }}
                                                        </h6>
                                                    @else
                                                        <!-- Optional: Display something else if all prices are null -->
                                                        <h6 class="grenadier-color mb-0 font-weight-bold"></h6>
                                                    @endif
                                                </div>


                                            </div>


                                            {{-- <a type="submit" style="cursor:pointer;"
                                                class="add-cart add_to_cart_btn_product"
                                                data-product_id="{{ $cat_product->id }}">Add to cart</a> --}}

                                            @if ($cat_product->sas_price !== null || $cat_product->price !== null || $cat_product->discount_price !== null)
                                                <a type="submit" style="cursor:pointer;"
                                                    class="add-cart add_to_cart_btn_product"
                                                    data-product_id="{{ $cat_product->id }}">Add to cart</a>
                                            @else
                                                <a href="{{ route('template_one.contact') }}"
                                                    class="add-cart">Contact Us</a>
                                            @endif


                                            {{-- @if ($product->sas_price !== null || $product->price !== null || $product->discount_price !== null)
                                                <a type="submit" style="cursor:pointer;"
                                                    class="add-cart add_to_cart_btn_product"
                                                    data-product_id="{{ $product->id }}">Add to cart</a>
                                            @else
                                                <a href="{{ route('template_one.contact') }}"
                                                    class="add-cart">Contact Us</a>
                                            @endif --}}

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
