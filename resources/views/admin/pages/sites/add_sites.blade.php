@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--begin::Content-->

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Sites</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Edit Sites<span class="ms-2 badge bg-danger"></span></li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="{{ route('all.sites') }}" class="btn btn-light-primary btn-sm">Back</a>

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!--begin::Table-->

                    <form action="{{ route('store.site') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        {{-- <input type="hidden" name="id" value="{{ $site->id }}"> --}}

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Site
                                            Name</label>
                                        <input type="text" name="site_name" class="form-control form-control-sm"
                                            placeholder="Site Name" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Site
                                            Slogan</label>
                                        <input type="text" name="site_slogan" class="form-control form-control-sm"
                                            placeholder="Site Slogan" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Company
                                            Name</label>
                                        <input type="text" name="company_name" class="form-control form-control-sm"
                                            placeholder="Company Name" value="" autocomplete="off">

                                    </div>
                                </div>

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Phone
                                            One</label>
                                        <input type="text" name="phone_one" class="form-control form-control-sm"
                                            placeholder="Phone One" value="" autocomplete="off">
                                    </div>

                                </div>

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Phone
                                            Two</label>
                                        <input type="tel" name="phone_two" class="form-control form-control-sm"
                                            placeholder="Phone Two" value="" autocomplete="off">

                                    </div>

                                </div>

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Whatsapp
                                            Number</label>
                                        <input type="tel" name="whatsapp_number" class="form-control form-control-sm"
                                            placeholder="Whatsapp Number" value="" autocomplete="off">
                                    </div>

                                </div>

                                <div class="col-3">

                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Address</label>
                                        <input type="text" name="address" class="form-control form-control-sm"
                                            placeholder="Address" value="" autocomplete="off">
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Contact
                                            Email</label>
                                        <input type="email" name="contact_email" class="form-control form-control-sm"
                                            placeholder="Contact Email" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Info
                                            Email</label>
                                        <input type="email" name="info_email" class="form-control form-control-sm"
                                            placeholder="Info Email" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Support
                                            Email</label>
                                        <input type="email" name="support_email" class="form-control form-control-sm"
                                            placeholder="Support Email" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Sales
                                            Email</label>
                                        <input type="email" name="sales_email" class="form-control form-control-sm"
                                            placeholder="Sales Email" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Facebook
                                            Url</label>
                                        <input type="text" name="facebook_url" class="form-control form-control-sm"
                                            placeholder="Facebook Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Skype
                                            Url</label>
                                        <input type="text" name="skype_url" class="form-control form-control-sm"
                                            placeholder="Skype Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Twitter
                                            Url</label>
                                        <input type="text" name="twitter_url" class="form-control form-control-sm"
                                            placeholder="Skype Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Instragram
                                            Url</label>
                                        <input type="text" name="instagram_url" class="form-control form-control-sm"
                                            placeholder="Instragram Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Linedin
                                            Url</label>
                                        <input type="text" name="linkedin_url" class="form-control form-control-sm"
                                            placeholder="Linedin Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Youtube
                                            Url</label>
                                        <input type="text" name="youtube_url" class="form-control form-control-sm"
                                            placeholder="Youtube Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Github
                                            Url</label>
                                        <input type="text" name="github_url" class="form-control form-control-sm"
                                            placeholder="Github Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Portfolio
                                            Url</label>
                                        <input type="text" name="portfolio_url" class="form-control form-control-sm"
                                            placeholder="Portfolio Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Fiver
                                            Url</label>
                                        <input type="text" name="fiver_url" class="form-control form-control-sm"
                                            placeholder="Fiver Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Upword
                                            Url</label>
                                        <input type="text" name="upwork_url" class="form-control form-control-sm"
                                            placeholder="Fiver Url" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Service Day
                                            Url</label>
                                        <input type="text" name="service_days" class="form-control form-control-sm"
                                            placeholder="Service Day" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Service Time
                                            Url</label>
                                        <input type="text" name="service_time" class="form-control form-control-sm"
                                            placeholder="Service Time" value="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">White Logo</label>
                                        <input type="file" name="logo_white" class="form-control form-control-sm"
                                            autocomplete="off" onchange="previewImage(event, 'white-logo-preview')">
                                    </div>
                                    <div id="white-logo-preview-container" style="margin-top: 10px;">
                                        <img id="white-logo-preview" src="" alt="White Logo Preview"
                                            style="display:none; max-width: 30%; height: auto;">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Black Logo</label>
                                        <input type="file" name="logo_black" class="form-control form-control-sm"
                                            autocomplete="off" onchange="previewImage(event, 'black-logo-preview')">
                                    </div>
                                    <div id="black-logo-preview-container" style="margin-top: 10px;">
                                        <img id="black-logo-preview" src="" alt="Black Logo Preview"
                                            style="display:none; max-width: 30%; height: auto;">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2">Favicon</label>
                                        <input type="file" name="favicon" class="form-control form-control-sm"
                                            autocomplete="off" onchange="previewImage(event, 'favicon-preview')">
                                    </div>
                                    <div id="favicon-preview-container" style="margin-top: 10px;">
                                        <img id="favicon-preview" src="" alt="Favicon Preview"
                                            style="display:none; max-width: 30%; height: auto;">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Update
                                Site</button>
                        </div>
                    </form>

                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Post-->

    <script>
        function previewImage(event, previewId) {
            var preview = document.getElementById(previewId);
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; // Show image when loaded
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
