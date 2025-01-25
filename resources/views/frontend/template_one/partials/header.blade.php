<section class="sticky-navbar">
    <div class="container">
        @php
            $site = App\Models\Sites::find(1);
        @endphp
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="navbar-brand py-3 pr-4" href="{{ route('index') }}">

                <img class="" width="145px" src="{{ asset('upload/logo_black/' . $site->logo_black) }}"
                    alt="" />
            </a>

            <!-- Categories Dropdown -->
            @php
                $categorys = App\Models\Admin\Category::where('status', '1')
                    ->orderBy('category_name', 'ASC')
                    ->limit(9)
                    ->latest()
                    ->get();
            @endphp
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle card-title cod__gray-color mb-0 main-menu-link" href="#" id="navbarDropdownFeatures"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-bars pr-2"></i>

                        Category
                    </a>
                    <div class="dropdown-menu dropdown-menu-full main-menu-drop p-0"
                        aria-labelledby="navbarDropdownFeatures" style="border-top: 2px solid #cd3301">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2 px-0">
                                            <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                                                @foreach ($categorys as $key => $category)
                                                    <li class="nav-item">
                                                        <a class="nav-link main_cat_triger w-100 pl-4 {{ $key == 0 ? 'active' : '' }}"
                                                            id="tab-{{ $category->id }}" data-toggle="tab"
                                                            href="#category{{ $category->id }}" role="tab"
                                                            aria-controls="category{{ $category->id }}"
                                                            aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $category->category_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-lg-10 px-0">
                                            <div class="tab-content px-3 pt-2" id="myTabContent">
                                                @foreach ($categorys as $key => $category)
                                                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                                        id="category{{ $category->id }}" role="tabpanel"
                                                        aria-labelledby="tab-{{ $category->id }}">
                                                        @php
                                                            $catwissubcat = App\Models\Admin\SubCategory::where(
                                                                'status',
                                                                '1',
                                                            )
                                                                ->where('category_id', $category->id)
                                                                ->orderBy('subcategory_name', 'ASC')
                                                                ->latest()
                                                                ->get();
                                                        @endphp
                                                        <div class="row">
                                                            @forelse ($catwissubcat as $subcat)
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <h5 class="" style="color: #ef4416;">
                                                                            {{ $subcat->subcategory_name }}
                                                                        </h5>
                                                                        <div class="divider"></div>
                                                                        @php
                                                                            $childcats = App\Models\Admin\ChildCategory::where(
                                                                                'status',
                                                                                '1',
                                                                            )
                                                                                ->where('subcategory_id', $subcat->id)
                                                                                ->orderBy('childcategory_name', 'ASC')
                                                                                ->limit(7)
                                                                                ->latest()
                                                                                ->get();
                                                                        @endphp
                                                                        <ul class="main-link-cat">
                                                                            @forelse ($childcats as $childcat)
                                                                                <li>
                                                                                    <a
                                                                                        href="{{ url('product/childcategory/' . $childcat->id . '/' . $childcat->childcategory_slug) }}">{{ $childcat->childcategory_name }}</a>
                                                                                </li>
                                                                            @empty
                                                                                <p>No ChildCategory Available</p>
                                                                            @endforelse
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            @empty
                                                                <div class="col-lg-12">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center h-100">
                                                                        <p>No Subcategory Available</p>
                                                                    </div>
                                                                </div>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Navbar Toggler -->

            {{-- <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-th pr-2" aria-hidden="true"></i>
            </button> --}}

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link main-menu-link" href="{{ route('index') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>

                    {{-- All Brands Menu --}}

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link main-menu-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brands
                        </a>

                        @php
                            // $categories = DB::table('categories')->inRandomOrder()->limit(4)->get();
                            $categories = DB::table('categories')->where('status','1')->limit(4)->get();
                        @endphp

                        <div class="dropdown-menu w-100 mt-0 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 2px solid #cd3301;border-bottom: 1px solid #d9d9d9 !important" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    @foreach ($categories as $category)
                                        <div class="col-lg-3">
                                            <a href="javascript:;"
                                                class="main-sub-menu">{{ $category->category_name }}</a>
                                            <div class="link-divider"></div>
                                            <ul class="submenu level-1">
                                                @php
                                                    $brands = DB::table('brands')
                                                        ->join('products', 'brands.id', '=', 'products.brand_id')
                                                        ->join(
                                                            'categories',
                                                            'products.category_id',
                                                            '=',
                                                            'categories.id',
                                                        )
                                                        ->where('categories.id', $category->id)
                                                        ->pluck('brands.id')
                                                        ->unique();
                                                @endphp
                                                @forelse ($brands as $brandId)
                                                    @php
                                                        $brand = App\Models\Brand::where('status','1')->find($brandId);
                                                    @endphp

                                                    @if ($brand)
                                                        <li><a
                                                                href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">{{ $brand->brand_name }}</a>
                                                        </li>
                                                    @endif
                                                @empty
                                                    <p>No brand available for this category.</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- All Offer Menu --}}
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle main-menu-link" href="#" id="navbarDropdownPricing"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Offers
                        </a>
                        @php
                            $offers = App\Models\Admin\OfferCategory::where('status', '1')
                                ->orderBy('offer_category_name', 'ASC')
                                ->limit(4)
                                ->latest()
                                ->get();
                        @endphp
                        <div class="dropdown-menu dropdown-menu-full main-menu-drop"
                            style="border-top: 2px solid #cd3301" aria-labelledby="navbarDropdownPricing">
                            <div class="container">
                                <div class="row">
                                    @foreach ($offers as $offer)
                                        <div class="col-lg-3">
                                            <a href="javascript:;"
                                                class="main-sub-menu">{{ $offer->offer_category_name }}</a>
                                            <div class="link-divider"></div>

                                            <ul class="submenu level-1">

                                                @php
                                                    $offerNames = App\Models\Admin\Offer::where('status', '1')
                                                        ->where('offer_category_id', $offer->id)
                                                        ->limit(4)
                                                        ->latest()
                                                        ->get();
                                                @endphp

                                                @forelse ($offerNames as $offerName)
                                                    <li class=""> <a
                                                            href="{{ route('offerwise.product', $offerName->id) }}">{{ $offerName->name }}</a>
                                                    </li>
                                                @empty
                                                @endforelse

                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link main-menu-link" href="{{ route('template.one.all_product') }}">Products
                            <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>

            <!-- Search Form -->
            {{-- <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form> --}}

            <form class="searchbox ml-auto mr-3" action="{{ route('product.search') }}" method="POST">
                @csrf
                <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                    id="search" autocomplete="off" name="search" onkeyup="buttonUp();" required>
                <button class="searchbox-submit" value="GO"><i class="icofont-search-2"></i></button>
                <span class="searchbox-icon"><i class="icofont-search-2"></i></span>
            </form>

            <div class="cart--header__middle d-none d-md-block">
                <div class="cart--header__list">
                    <ul class="list-inline">
                        <li>
                            <div class="dropdown">

                                @if (Auth::user())
                                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                                        <i class="fa-solid fa-user text-danger userLogin"></i>

                                        {{-- <img src="{{  url('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                            style="width: 40px;height:40px;" alt="">
                                            {{ Auth::user()->name }} --}}
                                    </a>
                                @else
                                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                                        <i class="fa-solid fa-user text-muted userLogin pr-2"></i>
                                    </a>
                                @endif

                                <div class="dropdown-menu p-3 user-panel-login" aria-labelledby="dropdownMenuButton"
                                    style="">

                                    @if (Auth::user())
                                        {{-- <p class="text-muted pl-3">First time here? <a
                                                href="{{ route('template.one.login') }}" class="text-danger">Sign
                                                Up</a>
                                        </p> --}}
                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}">

                                            <img src="{{ url('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                                style="width: 30px;height:30px;" alt="">

                                            {{ Auth::user()->name }}</a>

                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-star pr-2"></i>
                                            My Dashboard</a>

                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-key pr-2"></i>
                                            Password Change</a>

                                        <hr class="mb-2 mt-3">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();this.closest('form').submit();"
                                                class="cart-button w-100 mt-0">
                                                Logout
                                            </a>
                                        </form>
                                    @else
                                        <a href="{{ route('template.one.login') }}" class="cart-button w-100 mt-0">
                                            Login
                                        </a>
                                        <hr class="mb-2 mt-3">
                                        <a href="{{ route('template.one.login') }}" class="text-muted pl-3"
                                            style="font-size: 12px;">First
                                            time
                                            here? <span class="text-danger">Sign Up</span></a>
                                        <hr class="mb-2 mt-2">
                                        <a class="dropdown-item userlogin-header pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-user pr-2"></i>
                                            My Profile</a>

                                        <a class="dropdown-item userlogin-header pl-3" style="font-size: 12px;"
                                            href="{{ route('wishlist.product') }}"><i class="fal fa-heart pr-2"></i>
                                            My Wishlist</a>

                                        <a class="dropdown-item userlogin-header pl-3" style="font-size: 12px;"
                                            href="{{ route('compare.product') }}"><i class="fal fa-random pr-2"></i>
                                            My Compare</a>

                                        <a class="dropdown-item userlogin-header pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-box pr-2"></i>
                                            My Order</a>
                                        <hr class="mb-2 mt-2">
                                        <a class="dropdown-item userlogin-header pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-shopping-cart pr-2"></i>
                                            My Cart</a>
                                    @endif
                                </div>
                            </div>
                        </li>




                        <li class="" id="compareLink">
                            <a class="wishlist" href="{{ route('compare.product') }}" style="font-size: 20px;">
                                <i class="fas fa-random text-muted wishlist">
                                    <span class="cart__count" id="cartCompareQty">0</span>
                                </i>
                            </a>
                        </li>

                        <li class="" id="wishlistLink">
                            <a class="wishlist" href="{{ route('wishlist.product') }}" style="font-size: 20px;">
                                <i class="fas fa-heart text-muted wishlist">
                                    <span class="cart__count" id="cartWishlistQty">0</span>
                                </i>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown">

                                <a href="javascript:void(0);" class="border-0 bg-none text-muted" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="font-size: 20px;">

                                    <i class="fa-solid fa-cart-plus userLogin wishlist">
                                        <span class="cart__count-amount" id="cartQty">0</span>
                                    </i>

                                </a>

                                <div class="dropdown-menu p-3 cart-icons-menu" aria-labelledby="dropdownMenuButton"
                                    style="">
                                    <div class="row pb-2">
                                        <div class="col-lg-12">

                                            {{-- Cart Items --}}

                                            <div id="miniCart">

                                            </div>

                                            {{-- Cart Items --}}

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="total-text d-flex justify-content-between pt-2 mb-3">
                                                <span class="f-800 cod__black-color">Total Price</span>
                                                <span class="f-800 cod__black-color">$ <span
                                                        id="cartSubTotal"></span></span>
                                            </div>

                                            <div class="d-flex justify-content-between">

                                                <a href="{{ route('template.one.checkout') }}"
                                                    class="checkout bg-transparent p-0 text-black" style="text-decoration: underline">Checkout</a>

                                                <a href="{{ route('template.one.view.cart') }}"
                                                    class="viewcart bg-transparent p-0 text-black" style="text-decoration: underline">View
                                                    Cart</a>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>

@push('scripts')
@endpush
