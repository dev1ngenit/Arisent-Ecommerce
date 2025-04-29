<style>
    .desktop-none {
        display: none !important;
    }

    @media only screen and (max-width: 600px) {
        .mobile-none {
            display: none !important;
        }

        .desktop-none {
            display: block !important;
        }
    }
</style>
<section class="sticky-navbar mobile-none">
    <div class="container">
        @php
            $site = App\Models\Sites::find(1);
        @endphp
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="py-3 pr-4 navbar-brand" href="{{ route('index') }}">

                <img class="" width="145px" src="{{ asset('upload/logo_black/' . optional($site)->logo_black) }}"
                    alt="" />
            </a>

            <!-- Categories Dropdown -->
            @php
                $categorys = App\Models\Admin\Category::where('status', '1')->latest('id')->limit(9)->get();
            @endphp
            <ul class="ml-auto navbar-nav">
                <li class="nav-item dropdown position-static">
                    <a class="mb-0 nav-link dropdown-toggle card-title cod__gray-color main-menu-link" href="#"
                        id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="pr-2 fa-solid fa-bars"></i>
                        Category
                    </a>
                    <div class="p-0 dropdown-menu dropdown-menu-full main-menu-drop"
                        aria-labelledby="navbarDropdownFeatures"
                        style="border-top: 2px solid #hsl(192.6deg 87.85% 48.2%)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="px-0 col-lg-2">
                                            <ul class="border-0 nav nav-tabs flex-column" id="myTab" role="tablist">
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
                                        <div class="px-0 col-lg-10">
                                            <div class="px-3 pt-2 tab-content" id="myTabContent">
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
                                                                <div class="col-lg-3">
                                                                    <div>
                                                                        <a href="">
                                                                            <h5 class="primary-color">
                                                                                {{ $subcat->subcategory_name }}
                                                                            </h5>
                                                                        </a>
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
                <i class="pr-2 fa fa-th" aria-hidden="true"></i>
            </button> --}}

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="mx-auto navbar-nav">

                    {{-- <li class="nav-item">
                        <a class="nav-link main-menu-link active" href="{{ route('index') }}">Home</a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link main-menu-link {{ Request::is('index') ? 'active' : '' }}"
                            href="{{ route('index') }}">Home</a>
                    </li>

                    {{-- All Brands Menu --}}

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link main-menu-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brands
                        </a>

                        @php
                            // $categories = DB::table('categories')->inRandomOrder()->limit(4)->get();
                            $categories = DB::table('categories')->where('status', '1')->limit(4)->get();
                        @endphp

                        <div class="mt-0 dropdown-menu w-100 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 2px solid #hsl(192.6deg 87.85% 48.2%);border-bottom: 1px solid #d9d9d9 !important"
                            aria-labelledby="navbarDropdown">
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
                                                        $brand = App\Models\Brand::where('status', '1')->find($brandId);
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
                            style="border-top: 2px solid #hsl(192.6deg 87.85% 48.2%)"
                            aria-labelledby="navbarDropdownPricing">
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

            <form class="ml-auto mr-3 searchbox" action="{{ route('product.search') }}" method="POST">
                @csrf
                <input type="search" placeholder="Product Search......" name="search" class="searchbox-input"
                    id="search" autocomplete="off" onkeyup="buttonUp();" required>
                <button class="searchbox-submit" value="GO"><i class="icofont-search-2"></i></button>
                <span class="searchbox-icon"><i class="icofont-search-2"></i></span>
            </form>

            {{-- <form class="ml-auto mr-3 searchbox" action="{{ route('product.search') }}" method="POST"
                id="searchForm">
                @csrf
                <input type="search" placeholder="Product Search......" name="search" id="search"
                    class="searchbox-input" autocomplete="off" onkeyup="liveSearch();" required>
                <button type="button" class="searchbox-submit" value="GO"><i
                        class="icofont-search-2"></i></button>
                <span class="searchbox-icon"><i class="icofont-search-2"></i></span>
            </form> --}}

            <!-- Here we'll display the live search results -->
            {{-- <div id="searchResults" class="mt-5"></div> --}}

            {{-- <script>
                function liveSearch() {
                    var searchQuery = $('#search').val();

                    if (searchQuery.length >= 2) { // Trigger the search after 3 characters
                        $.ajax({
                            url: "{{ route('product.search') }}", // URL for the search route
                            type: "POST",
                            data: {
                                _token: "{{ csrf_token() }}",
                                search: searchQuery
                            },
                            success: function(response) {
                                // Update the search results
                                $('#searchResults').html(response);
                            }
                        });
                    } else {
                        $('#searchResults').html(''); // Clear results if input is too short
                    }
                }
            </script> --}}



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
                                    </a>
                                @else
                                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                                        <i class="pr-2 fa-solid fa-user text-muted userLogin"></i>
                                    </a>
                                @endif

                                <div class="p-3 dropdown-menu user-panel-login" aria-labelledby="dropdownMenuButton"
                                    style="">

                                    @if (Auth::user())
                                        {{-- <p class="pl-3 text-muted">First time here? <a
                                                href="{{ route('template.one.login') }}" class="text-danger">Sign
                                                Up</a>
                                        </p> --}}
                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}">

                                            <img src="{{ url('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                                style="width: 30px;height:30px;" alt="">

                                            {{ Auth::user()->name }}</a>

                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-star"></i>
                                            My Dashboard</a>

                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-key"></i>
                                            Password Change</a>

                                        <hr class="mt-3 mb-2">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();this.closest('form').submit();"
                                                class="mt-0 cart-button w-100">
                                                Logout
                                            </a>
                                        </form>
                                    @else
                                        <a href="{{ route('template.one.login') }}" class="mt-0 cart-button w-100">
                                            Login
                                        </a>
                                        <hr class="mt-3 mb-2">
                                        <a href="{{ route('template.one.login') }}" class="pl-3 text-muted"
                                            style="font-size: 12px;">First time here? <span class="primary-color">Sign
                                                Up</span></a>
                                        <hr class="mt-2 mb-2">
                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-user"></i>
                                            My Profile</a>

                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('wishlist.product') }}"><i class="pr-2 fal fa-heart"></i>
                                            My Wishlist</a>

                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('compare.product') }}"><i class="pr-2 fal fa-random"></i>
                                            My Compare</a>

                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-box"></i>
                                            My Order</a>
                                        <hr class="mt-2 mb-2">
                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('template.one.view.cart') }}"><i
                                                class="pr-2 fal fa-shopping-cart"></i>
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

                                <div class="p-3 dropdown-menu cart-icons-menu" aria-labelledby="dropdownMenuButton"
                                    style="">
                                    <div class="pb-2 row">
                                        <div class="col-lg-12">

                                            {{-- Cart Items --}}

                                            <div id="miniCart"></div>

                                            {{-- Cart Items --}}

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="pt-2 mb-3 total-text d-flex justify-content-between">
                                                <span class="f-800 cod__black-color">Total Price</span>
                                                <span class="f-800 cod__black-color">Tk <span
                                                        id="cartSubTotal"></span></span>
                                            </div>

                                            <div class="d-flex justify-content-between">

                                                <a href="{{ route('template.one.checkout') }}"
                                                    class="p-0 text-black bg-transparent checkout"
                                                    style="text-decoration: underline">Checkout</a>

                                                <a href="{{ route('template.one.view.cart') }}"
                                                    class="p-0 text-black bg-transparent viewcart"
                                                    style="text-decoration: underline">View
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



<section class="sticky-navbar desktop-none">
    <div class="container px-0 mx-0 w-100 ms-5">
        @php
            $site = App\Models\Sites::find(1);
        @endphp
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="py-3 pr-4 navbar-brand" href="{{ route('index') }}">

                <img class="" width="145px"
                    src="{{ asset('upload/logo_black/' . optional($site)->logo_black) }}" alt="" />
            </a>

            <!-- Categories Dropdown -->
            @php
                $categorys = App\Models\Admin\Category::where('status', '1')
                    ->orderBy('category_name', 'ASC')
                    ->limit(9)
                    ->latest()
                    ->get();
            @endphp

            {{-- <ul class="ml-auto navbar-nav">
                <li class="nav-item dropdown position-static">
                    <a class="mb-0 nav-link dropdown-toggle card-title cod__gray-color main-menu-link" href="#"
                        id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="pr-2 fa-solid fa-bars"></i>

                        Category
                    </a>
                    <div class="p-0 dropdown-menu dropdown-menu-full main-menu-drop"
                        aria-labelledby="navbarDropdownFeatures" style="border-top: 2px solid #hsl(192.6deg 87.85% 48.2%)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="px-0 col-lg-2">
                                            <ul class="border-0 nav nav-tabs flex-column" id="myTab"
                                                role="tablist">
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
                                        <div class="px-0 col-lg-10">
                                            <div class="px-3 pt-2 tab-content" id="myTabContent">
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
            </ul> --}}
            <!-- Navbar Toggler -->

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="mx-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link main-menu-link {{ Request::is('index') ? 'active' : '' }}"
                            href="{{ route('index') }}">Home</a>
                    </li>

                    {{-- All Brands Menu --}}

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link main-menu-link dropdown-toggle" href="javascript:void(0)"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Brands
                        </a>

                        @php
                            // $categories = DB::table('categories')->inRandomOrder()->limit(4)->get();
                            $categories = DB::table('categories')->where('status', '1')->limit(4)->get();
                        @endphp

                        <div class="mt-0 dropdown-menu w-100 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 2px solid #hsl(192.6deg 87.85% 48.2%);border-bottom: 1px solid #d9d9d9 !important"
                            aria-labelledby="navbarDropdown">
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
                                                        $brand = App\Models\Brand::where('status', '1')->find($brandId);
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
                            style="border-top: 2px solid #hsl(192.6deg 87.85% 48.2%)"
                            aria-labelledby="navbarDropdownPricing">
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

            {{-- <form class="ml-auto mr-3 searchbox" action="{{ route('product.search') }}" method="POST">
                @csrf
                <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                    id="search" autocomplete="off" name="search" onkeyup="buttonUp();" required>
                <button class="searchbox-submit" value="GO"><i class="icofont-search-2"></i></button>
                <span class="searchbox-icon"><i class="icofont-search-2"></i></span>
            </form> --}}

            {{-- <div>
                @if (Auth::user())
                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="font-size: 20px;">
                        <i class="fa-solid fa-user text-danger userLogin"></i>
                    </a>
                @else
                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="font-size: 20px;">
                        <i class="pr-2 fa-solid fa-user text-muted userLogin"></i>
                    </a>
                @endif
            </div> --}}

            <div class="cart--header__middle">
                <div class="cart--header__list">
                    <ul class="list-inline">
                        <li>
                            <div class="dropdown">

                                @if (Auth::user())
                                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                                        <i class="fa-solid fa-user text-danger userLogin"></i>
                                    </a>
                                @else
                                    <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                                        <i class="pr-2 fa-solid fa-user text-muted userLogin"></i>
                                    </a>
                                @endif

                                <div class="p-3 dropdown-menu user-panel-login" aria-labelledby="dropdownMenuButton"
                                    style="">

                                    @if (Auth::user())
                                        {{-- <p class="pl-3 text-muted">First time here? <a
                                                href="{{ route('template.one.login') }}" class="text-danger">Sign
                                                Up</a>
                                        </p> --}}
                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}">

                                            <img src="{{ url('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                                style="width: 30px;height:30px;" alt="">

                                            {{ Auth::user()->name }}</a>

                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-star"></i>
                                            My Dashboard</a>

                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-key"></i>
                                            Password Change</a>

                                        <hr class="mt-3 mb-2">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();this.closest('form').submit();"
                                                class="mt-0 cart-button w-100">
                                                Logout
                                            </a>
                                        </form>
                                    @else
                                        <a href="{{ route('template.one.login') }}" class="mt-0 cart-button w-100">
                                            Login
                                        </a>
                                        <hr class="mt-3 mb-2">
                                        <a href="{{ route('template.one.login') }}" class="pl-3 text-muted"
                                            style="font-size: 12px;">First
                                            time
                                            here? <span class="text-danger">Sign Up</span></a>
                                        <hr class="mt-2 mb-2">
                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-user"></i>
                                            My Profile</a>

                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('wishlist.product') }}"><i class="pr-2 fal fa-heart"></i>
                                            My Wishlist</a>

                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('compare.product') }}"><i class="pr-2 fal fa-random"></i>
                                            My Compare</a>

                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-box"></i>
                                            My Order</a>
                                        <hr class="mt-2 mb-2">
                                        <a class="pl-3 dropdown-item userlogin-header" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="pr-2 fal fa-shopping-cart"></i>
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

                                <div class="p-3 dropdown-menu cart-icons-menu" aria-labelledby="dropdownMenuButton"
                                    style="">
                                    <div class="pb-2 row">
                                        <div class="col-lg-12">

                                            {{-- Cart Items --}}

                                            <div id="miniCart">

                                            </div>

                                            {{-- Cart Items --}}

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="pt-2 mb-3 total-text d-flex justify-content-between">
                                                <span class="f-800 cod__black-color">Total Price</span>
                                                <span class="f-800 cod__black-color">Tk <span
                                                        id="cartSubTotal"></span></span>
                                            </div>

                                            <div class="d-flex justify-content-between">

                                                <a href="{{ route('template.one.checkout') }}"
                                                    class="p-0 text-black bg-transparent checkout"
                                                    style="text-decoration: underline">Checkout</a>

                                                <a href="{{ route('template.one.view.cart') }}"
                                                    class="p-0 text-black bg-transparent viewcart"
                                                    style="text-decoration: underline">View
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
