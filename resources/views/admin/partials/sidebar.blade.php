<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('admin.dashboard') }}">
            <img alt="Logo" src="{{ asset('upload/logo_white/' . optional($site)->logo_white) }}"
                class="h-25px logo text-white" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                {{-- <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>

                    </span>

                </div> --}}
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor">
                                    </rect>
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                        fill="currentColor"></rect>
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                        fill="currentColor"></rect>
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                        fill="currentColor"></rect>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Backend Operation</span>
                    </div>
                </div>


                {{-- Product Supply Section --}}
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Request::routeIs('all.product') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Product Supply</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div
                        class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('all.product', 'all.banner', 'all.brand', 'all.category', 'all.offer', 'all.offer.category', 'all.color') ? 'here show' : '' }}">

                        {{-- Brand --}}
                        {{-- @if (Auth::guard('admin')->user()->can('brand.menu')) --}}
                            <div class="menu-item">

                                {{-- @if (Auth::guard('admin')->user()->can('all.brand')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.brand') ? 'active' : '' }}"
                                        href="{{ route('all.brand') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Brand</span>
                                    </a>
                                {{-- @endif --}}

                            </div>
                        {{-- @endif --}}

                        {{-- Banner --}}
                        {{-- @if (Auth::guard('admin')->user()->can('banner.menu')) --}}
                            <div class="menu-item">

                                {{-- @if (Auth::guard('admin')->user()->can('all.banner')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.banner') ? 'active' : '' }}"
                                        href="{{ route('all.banner') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Banner</span>
                                    </a>
                                {{-- @endif --}}

                            </div>
                        {{-- @endif --}}
                        {{-- Banner --}}

                        {{-- Category --}}
                        {{-- @if (Auth::guard('admin')->user()->can('category.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.category')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.category') ? 'active' : '' }}"
                                        href="{{ route('all.category') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Category</span>
                                    </a>
                                {{-- @endif --}}

                            </div>
                        {{-- @endif --}}

                        {{-- Product  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('product.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.product')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.product') ? 'active' : '' }}"
                                        href="{{ route('all.product') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product</span>
                                    </a>
                                {{-- @endif --}}

                            </div>
                        {{-- @endif --}}


                        {{-- Offer Category --}}
                        {{-- @if (Auth::guard('admin')->user()->can('offer.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.offer')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.offer.category') ? 'active' : '' }}"
                                        href="{{ route('all.offer.category') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Offer Category</span>
                                    </a>
                                {{-- @endif --}}

                            </div>
                        {{-- @endif --}}


                        {{-- Offer --}}
                        {{-- @if (Auth::guard('admin')->user()->can('offer.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.offer')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.offer') ? 'active' : '' }}"
                                        href="{{ route('all.offer') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Offer</span>
                                    </a>
                                {{-- @endif --}}
                            </div>
                        {{-- @endif --}}


                        {{-- Color --}}
                        {{-- @if (Auth::guard('admin')->user()->can('color.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.color')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.color') ? 'active' : '' }}"
                                        href="{{ route('all.color') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Color</span>
                                    </a>
                                {{-- @endif --}}
                            </div>
                        {{-- @endif --}}

                    </div>
                </div>
                {{-- Product Supply Section --}}

                {{-- Ecommerce Section --}}
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Request::routeIs('admin.all.order', 'all.shipping.charge', 'all.coupon') ? 'here show' : '' }}">

                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Ecommerce Manage</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion menu-active-bg">

                        {{-- Order Section  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('order.menu')) --}}
                            <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('admin.all.order') ? 'active' : '' }}"
                                    href="{{ route('admin.all.order') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Order Manage</span>
                                </a>
                            </div>
                        {{-- @endif --}}

                        {{-- Shipping Charge  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('shipping.menu'))
                            <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('all.shipping.charge') ? 'active' : '' }}"
                                    href="{{ route('all.shipping.charge') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Shipping Charge</span>
                                </a>
                            </div>
                        @endif --}}

                        {{-- Coupon --}}
                        {{-- @if (Auth::guard('admin')->user()->can('coupon.menu'))
                            <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('all.coupon') ? 'active' : '' }}"
                                    href="{{ route('all.coupon') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Coupon</span>
                                </a>
                            </div>
                        @endif --}}



                    </div>
                </div>
                {{-- Ecommerce Section --}}


                {{-- Employee Section --}}
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Request::routeIs('all.admin.permission', 'all.employcat', 'all.dept') ? 'here show' : '' }}">

                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Employee Manage</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion menu-active-bg">

                        {{-- All Admin --}}
                        {{-- @if (Auth::guard('admin')->user()->can('admin.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.admin')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.admin.permission') ? 'active' : '' }}"
                                        href="{{ route('all.admin.permission') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">All Admin</span>
                                    </a>
                                {{-- @endif --}}
                            </div>
                        {{-- @endif --}}

                        {{-- Department --}}
                        {{-- @if (Auth::guard('admin')->user()->can('dept.menu')) --}}
                        {{-- <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('all.dept') ? 'active' : '' }}"
                                    href="{{ route('all.dept') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Employee Dept.</span>
                                </a>
                            </div> --}}
                        {{-- @endif --}}

                        {{-- Employee Category --}}
                        {{-- @if (Auth::guard('admin')->user()->can('dept.menu'))
                            <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('all.employcat') ? 'active' : '' }}"
                                    href="{{ route('all.employcat') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Employee Category</span>
                                </a>
                            </div>
                        @endif --}}

                    </div>

                </div>
                {{-- Employee Section --}}

                {{-- User Section --}}
                {{-- @if (Auth::guard('admin')->user()->can('user.menu')) --}}
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('all.user') ? 'active' : '' }}"
                            href="{{ route('all.user') }}" title="All User" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">User Manage</span>
                        </a>
                    </div>
                {{-- @endif --}}
                {{-- User Section --}}

                {{-- Contact Management Section --}}
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Request::routeIs('all.contact', 'all.subscribe', 'all.about', 'all.faq', 'all.term', 'admin.privacy-policy.index', 'admin.return-policy.index') ? 'here show' : '' }}">

                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Content Management</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion menu-active-bg">



                        {{-- Contact --}}
                        {{-- @if (Auth::guard('admin')->user()->can('contact.menu')) --}}
                            <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('all.contact') ? 'active' : '' }}"
                                    href="{{ route('all.contact') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Contact</span>
                                </a>
                            </div>
                        {{-- @endif --}}

                        {{-- Subscribe --}}
                        {{-- @if (Auth::guard('admin')->user()->can('subscribe.menu')) --}}
                        <div class="menu-item">
                            <a class="menu-link {{ Request::routeIs('all.subscribe') ? 'active' : '' }}"
                                href="{{ route('all.subscribe') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Subscribe</span>
                            </a>
                        </div>
                        {{-- @endif --}}

                        {{-- About --}}
                        {{-- @if (Auth::guard('admin')->user()->can('about.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.about')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.about') ? 'active' : '' }}"
                                        href="{{ route('all.about') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">About</span>
                                    </a>
                                {{-- @endif --}}
                            </div>
                        {{-- @endif --}}

                        {{-- Faq  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('faq.menu')) --}}
                        {{-- @if (Auth::guard('admin')->user()->can('faq.menu')) --}}
                            <div class="menu-item">
                                {{-- @if (Auth::guard('admin')->user()->can('all.faq')) --}}
                                    <a class="menu-link {{ Request::routeIs('all.faq') ? 'active' : '' }}"
                                        href="{{ route('all.faq') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Faq</span>
                                    </a>
                                {{-- @endif --}}
                            </div>
                        {{-- @endif --}}
                        {{-- @endif --}}

                        {{-- Term  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('term.menu')) --}}
                            <div class="menu-item">
                                <a class="menu-link {{ Request::routeIs('all.term') ? 'active' : '' }}"
                                    href="{{ route('all.term') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Terms & Condition</span>
                                </a>
                            </div>
                        {{-- @endif --}}

                        {{-- Privacy & Policy  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('term.menu')) --}}
                        <div class="menu-item">
                            <a class="menu-link {{ Request::routeIs('admin.privacy-policy.index') ? 'active' : '' }}"
                                href="{{ route('admin.privacy-policy.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Privacy & Policy</span>
                            </a>
                        </div>
                        {{-- @endif --}}

                        {{-- Return & Policy  --}}
                        {{-- @if (Auth::guard('admin')->user()->can('term.menu')) --}}
                        <div class="menu-item">
                            <a class="menu-link {{ Request::routeIs('admin.return-policy.index') ? 'active' : '' }}"
                                href="{{ route('admin.return-policy.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Return & Policy</span>
                            </a>
                        </div>
                        {{-- @endif --}}

                    </div>
                </div>
                {{-- Content Management Section --}}

                {{-- Setting Section --}}
                {{-- @if (Auth::guard('admin')->user()->can('setting.menu')) --}}
                    <div class="menu-item">
                        {{-- @if (Auth::guard('admin')->user()->can('all.setting')) --}}
                            <a class="menu-link {{ request()->routeIs('all.sites') ? 'active' : '' }}"
                                href="{{ route('all.sites') }}" title="Setting Page" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                fill="currentColor" />
                                            <path
                                                d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Setting</span>
                            </a>
                        {{-- @endif --}}
                    </div>
                {{-- @endif --}}
                {{-- Setting Section --}}

                {{-- Role & Permission Section --}}
                @if (Auth::guard('admin')->user()->can('role.menu'))
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('all.roles.permission') ? 'active' : '' }}"
                            href="{{ route('all.roles.permission') }}" title="Role In Permission"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Role In Permission</span>
                        </a>
                    </div>
                @endif
                {{-- Role & Permission Section --}}

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->

    <!--begin::Footer-->
    {{-- <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf

            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();this.closest('form').submit();"
                class="btn btn-custom btn-primary w-100">
                <span class="btn-label">Logout</span>

            </a>

        </form>

    </div> --}}
    <!--end::Footer-->

</div>
