@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
                    <!--begin::Separator-->
                    {{-- <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span> --}}
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2"></span>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            {{-- <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_6244763d93048">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option" data-dropdown-parent="#kt_menu_6244763d93048"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Create</a>
                <!--end::Primary button-->
            </div> --}}
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xl-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger">

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">

                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-3 bg-light-success px-4 py-8 rounded-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0"
                                                y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32"
                                                xml:space="preserve">
                                                <style>
                                                    .st1 {
                                                        fill: #333
                                                    }
                                                </style>
                                                <path class="st1"
                                                    d="M25.838 31H6.162a3.957 3.957 0 0 1-3.245-1.661 3.956 3.956 0 0 1-.549-3.604l.704-2.113a6.034 6.034 0 0 1 4.966-4.059C10.131 19.307 13.211 19 16 19c2.788 0 5.869.307 7.963.563a6.032 6.032 0 0 1 4.965 4.059l.704 2.113a3.954 3.954 0 0 1-.55 3.604A3.955 3.955 0 0 1 25.838 31zM16 21c-2.688 0-5.681.298-7.718.549a4.02 4.02 0 0 0-3.312 2.706l-.704 2.112c-.206.618-.106 1.274.274 1.802S5.511 29 6.162 29h19.676a1.98 1.98 0 0 0 1.622-.83c.381-.528.48-1.185.275-1.803l-.704-2.112a4.02 4.02 0 0 0-3.312-2.706C21.681 21.298 18.687 21 16 21zM16 18c-4.687 0-8.5-3.813-8.5-8.5S11.313 1 16 1c4.687 0 8.5 3.813 8.5 8.5S20.687 18 16 18zm0-15c-3.584 0-6.5 2.916-6.5 6.5S12.416 16 16 16s6.5-2.916 6.5-6.5S19.584 3 16 3z" />
                                                <path
                                                    d="M12.04 10.54c-.543 0-.988-.435-1-.98a4.964 4.964 0 0 1 1.394-3.564 4.968 4.968 0 0 1 3.505-1.535c.562.01 1.009.428 1.02.98a1 1 0 0 1-.98 1.02 2.982 2.982 0 0 0-2.103.92 2.981 2.981 0 0 0-.836 2.139 1 1 0 0 1-.98 1.02h-.02z"
                                                    style="fill:#008ad0" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="{{ route('all.user') }}" class="text-dark fw-bold fs-6">Total User</a>
                                        <span class="float-end fw-bolder badge bg-success">{{ count($totalUser) }}</span>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-3 bg-light-primary px-4 py-8 rounded-2">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 122.88 114.58">
                                                <title>product</title>
                                                <path
                                                    d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="{{ route('all.product') }}" class="text-primary fw-bold fs-6">Total
                                            Product</a>
                                        <span class="float-end fw-bolder badge bg-primary">{{ count($totalProduct) }}</span>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3 bg-light-danger px-4 py-8 rounded-2 ">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-danger fw-bold fs-6 mt-2">Daliy Revenue</a>
                                        <span class="float-end fw-bolder text-danger">Tk {{ $daliyRevenue }}</span>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-3 bg-light-info px-4 py-8 rounded-2 ">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="{{ route('all.admin.permission') }}"
                                            class="text-info fw-bold fs-6 mt-2">Total Employee</a>
                                        <span class="float-end fw-bolder badge bg-info">{{ count($totalEmployee) }}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->

                {{-- Order Statistics --}}

                {{-- <div class="col-xl-12">

                    <!--begin::Charts Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Order Statistics</span>
                                <span class="text-muted fw-bold fs-7">More than MonthWise Statistics</span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->

                            <canvas id="kt_chartjs_2" class="mh-400px"
                                style="display: block; box-sizing: border-box; height: 321px; width: 643px;" width="643"
                                height="321"></canvas>

                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                </div> --}}

                {{-- Order Statistics --}}
            </div>
            <!--end::Row-->

            {{-- Order Status --}}
            @php
                $totalOrder = App\Models\User\Order::latest()->get();

                $countPending = App\Models\User\Order::where('status', 'pending')->get();
                $countProcessing = App\Models\User\Order::where('status', 'processing')->get();
                $countShipped = App\Models\User\Order::where('status', 'shipped')->get();
                $countDeliver = App\Models\User\Order::where('status', 'delivered')->get();
                $countCancel = App\Models\User\Order::where('status', 'cancel')->get();
            @endphp
            <div class="row g-5 g-xl-8">

                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Order Status</span>
                                <span class="text-muted fw-bold fs-7">Latest order status</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">

                            <!--begin::Items-->
                            <div class="">

                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">

                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{ asset('upload/pending.jpg') }}" class=""
                                                    style="width: 100%;height: 100%;" alt="" />
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="{{ route('admin.all.order') }}"
                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Pending</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">Total Order {{ count($totalOrder) }}
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">{{ count($countPending) }}</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">

                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{ asset('upload/processing.jpg') }}" class=""
                                                    style="width: 100%;height: 100%;" alt="" />
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="{{ route('all.processing.order') }}"
                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Processing
                                                Order</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">Total Order {{ count($totalOrder) }}
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">{{ count($countProcessing) }}</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">

                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{ asset('upload/shipped.png') }}" class=""
                                                    style="width: 100%;height: 100%;" alt="" />
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="{{ route('all.shipped.order') }}"
                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Shipped Order</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">Total Order {{ count($totalOrder) }}
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">{{ count($countShipped) }}</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">

                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{ asset('upload/what-does-shipped-mean-2-1024x683.jpg') }}"
                                                    class="" style="width: 100%;height: 100%;" alt="" />
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="{{ route('all.delivered.order') }}"
                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Delivered</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">Total Order {{ count($totalOrder) }}
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">{{ count($countDeliver) }}</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">

                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{ asset('upload/cancel.jpg') }}" class=""
                                                    style="width: 100%;height: 100%;" alt="" />
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="{{ route('all.cancel.order') }}"
                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Cancel Order</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">Total Order {{ count($totalOrder) }}
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">{{ count($countCancel) }}</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Latest Order Products</span>
                                <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                            </h3>
                            <div class="card-toolbar">

                                <ul class="nav">

                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Day</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-2 bg-light-info">
                                                    <th>No</th>
                                                    <th>Invoice No</th>
                                                    <th>Order No</th>
                                                    <th>Amount</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th style="width: 40px;">Action</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                                @foreach ($orders as $key => $order)
                                                    <tr class="border-1">

                                                        <td scope="row" class="text-center">{{ $key + 1 }}</td>
                                                        <td>{{ $order->invoice_number }}</td>
                                                        <td>{{ $order->order_number }}</td>
                                                        <td>Tk {{ $order->total_amount }}</td>
                                                        <td>{{ $order->payment_method }}</td>

                                                        <td class="text-center">
                                                            @if ($order->status == 'pending')
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @elseif($order->status == 'processing')
                                                                <span
                                                                    class="badge badge-primary">{{ $order->status }}</span>
                                                            @elseif($order->status == 'shipped')
                                                                <span class="badge badge-info">{{ $order->status }}</span>
                                                            @elseif($order->status == 'delivered')
                                                                <span
                                                                    class="badge badge-success">{{ $order->status }}</span>
                                                            @elseif($order->status == 'cancelled')
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @endif
                                                        </td>

                                                        <td>

                                                            <a href="{{ route('admin.order.details', $order->id) }}"><i
                                                                    class="fa fa fa-eye text-muted pr-2"></i></a>

                                                            <a href="{{ route('admin.order.delete', $order->id) }}"
                                                                id="delete"><i class="fa fa-close text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-2 bg-light-info">
                                                    <th>No</th>
                                                    <th>Invoice No</th>
                                                    <th>Order No</th>
                                                    <th>Amount</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th style="width: 40px;">Action</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                                @foreach ($monthOrders as $key => $order)
                                                    <tr class="border-1">

                                                        <td scope="row" class="text-center">{{ $key + 1 }}</td>
                                                        <td>{{ $order->invoice_number }}</td>
                                                        <td>{{ $order->order_number }}</td>
                                                        <td>Tk {{ $order->total_amount }}</td>
                                                        <td>{{ $order->payment_method }}</td>

                                                        <td class="text-center">
                                                            @if ($order->status == 'pending')
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @elseif($order->status == 'processing')
                                                                <span
                                                                    class="badge badge-primary">{{ $order->status }}</span>
                                                            @elseif($order->status == 'shipped')
                                                                <span class="badge badge-info">{{ $order->status }}</span>
                                                            @elseif($order->status == 'delivered')
                                                                <span
                                                                    class="badge badge-success">{{ $order->status }}</span>
                                                            @elseif($order->status == 'cancelled')
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @endif
                                                        </td>

                                                        <td>

                                                            <a href="{{ route('admin.order.details', $order->id) }}"><i
                                                                    class="fa fa fa-eye text-muted pr-2"></i></a>

                                                            <a href="{{ route('admin.order.delete', $order->id) }}"
                                                                id="delete"><i class="fa fa-close text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-2 bg-light-info">
                                                    <th>No</th>
                                                    <th>Invoice No</th>
                                                    <th>Order No</th>
                                                    <th>Amount</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th style="width: 40px;">Action</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                                @foreach ($yearOrders as $key => $order)
                                                    <tr class="border-1">

                                                        <td scope="row" class="text-center">{{ $key + 1 }}</td>
                                                        <td>{{ $order->invoice_number }}</td>
                                                        <td>{{ $order->order_number }}</td>
                                                        <td>Tk {{ $order->total_amount }}</td>
                                                        <td>{{ $order->payment_method }}</td>

                                                        <td class="text-center">
                                                            @if ($order->status == 'pending')
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @elseif($order->status == 'processing')
                                                                <span
                                                                    class="badge badge-primary">{{ $order->status }}</span>
                                                            @elseif($order->status == 'shipped')
                                                                <span class="badge badge-info">{{ $order->status }}</span>
                                                            @elseif($order->status == 'delivered')
                                                                <span
                                                                    class="badge badge-success">{{ $order->status }}</span>
                                                            @elseif($order->status == 'cancelled')
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">{{ $order->status }}</span>
                                                            @endif
                                                        </td>

                                                        <td>

                                                            <a href="{{ route('admin.order.details', $order->id) }}"><i
                                                                    class="fa fa fa-eye text-muted pr-2"></i></a>

                                                            <a href="{{ route('admin.order.delete', $order->id) }}"
                                                                id="delete"><i class="fa fa-close text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            {{-- Order Status --}}


            {{-- Employee Section  --}}
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List Widget 2-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title fw-bolder text-dark">Total Employee</h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">

                            @foreach ($profileDatas as $profileData)
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                            class="" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $profileData->name }}</a>
                                        <span class="text-muted d-block fw-bold">{{ $profileData->designation }}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            @endforeach

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List Widget 6-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title fw-bolder text-dark">Notifications</h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->

                        @php
                            $admin = Auth::guard('admin')->user();
                        @endphp

                        <div class="card-body pt-0">

                            <!--begin::Item-->
                            @foreach ($admin->notifications as $notification)
                                @if (!empty($notification->data['category']) && $notification->data['category'] == 'user_notifications')
                                    <div class="d-flex align-items-center bg-light-info rounded p-5">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-info me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <div class="flex-grow-1 me-2">
                                            <a href="{{ route('all.user') }}"
                                                class="fw-bolder text-gray-800 text-hover-primary fs-6">{{ $notification->data['message'] }}</a>
                                            <span
                                                class="text-muted fw-bold d-block">{{ $notification->data['name'] }}</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Lable-->
                                        <span
                                            class="fw-bolder text-info py-1">{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                                        <!--end::Lable-->
                                    </div>
                                @endif
                            @endforeach

                            <!--end::Item-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 6-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">

                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Offer</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Latest Offer</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->


                        <div class="card-body pt-5">

                            <!--begin::Item-->
                            @forelse ($offers as $offer)
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('storage/offer_category_image/' . $offer->category->offer_category_image) }}"
                                                class="align-self-center" style="width: 100%;height: 100%;"
                                                alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{ $offer->category->offer_category_name }}s</a>
                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                        </div>

                                        @php
                                            $amount = $offer->price - $offer->discount_price;
                                            $discount = ($amount / $offer->price) * 100;
                                        @endphp

                                        <span class="badge badge-light fw-bolder my-2">{{ round($discount) }}%</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            @empty
                                <p>No Offer Avaiable</p>
                            @endforelse
                            <!--end::Item-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            {{-- Employee Section  --}}


        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection

@section('barChart')
    <script>
        var ctx = document.getElementById('kt_chartjs_2');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [{
                    label: 'Dataset 1',
                    data: Utils.numbers(NUMBER_CFG),
                    borderColor: Utils.CHART_COLORS.red,
                    backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
                },
                {
                    label: 'Dataset 2',
                    data: Utils.numbers(NUMBER_CFG),
                    borderColor: Utils.CHART_COLORS.blue,
                    backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),
                }
            ]
        };

        // Chart config
        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            },
            defaults: {
                global: {
                    defaultFont: fontFamily
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    </script>
@endsection
