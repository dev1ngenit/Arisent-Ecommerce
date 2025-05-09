<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">


    <meta charset="utf-8" />
    <meta name="description" content="{{ optional($site)->site_slogan }} " />
    <meta name="keywords" content="Admin, bootstrap, boo" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ optional($site)->site_name }}" />
    <meta property="og:site_name" content="{{ optional($site)->site_name }}" />
    <title>{{ optional($site)->site_name }}</title>

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="shortcut icon" href="{{ asset('backend/login/assets/logo/Favicon_Dadabhaai.png') }}" />

    <link href="{{ asset('backend/assets/css/tagsinput.css') }}" rel="stylesheet">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    {{-- <link href="{{ asset('backend/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}

    <link href="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Summernote CSS -->


</head>


<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <div class="d-flex flex-column flex-root">

        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            <!--begin::Aside-->
            @include('admin.partials.sidebar')
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <!--begin::Header-->
                @include('admin.partials.header')
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <!--begin::Post-->
                    {{-- <div class="post d-flex flex-column-fluid" id="kt_post"> --}}


                    <!--begin::Container-->
                    {{-- <div id="kt_content_container" class="container-xxl"> --}}
                    <div id="" class="mx-5">

                        <!--begin::Row-->
                        @yield('admin')
                        <!--end::Row-->

                    </div>
                    <!--end::Container-->
                    {{-- </div> --}}
                    <!--end::Post-->

                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                @include('admin.partials.footer')
                <!--end::Footer-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->

    </div>
    <!--end::Root-->

    <!--end::Main-->

    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('backend/assets/js/tagsinput.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/documentation/general/datatables/advanced.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/documentation/editors/tinymce/basic.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/documentation/editors/quill/basic.js') }}"></script>
    <!--end::Page Vendors Javascript-->

    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/documentation/forms/dropzonejs.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/documentation/general/stepper.js') }}"></script>
    <!--end::Page Custom Javascript-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/delete_code.js') }}"></script>
    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>


    @yield('barChart')

    <!--end::Javascript-->

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize CKEditor for each textarea with the class 'editor'
            document.querySelectorAll('.editor').forEach(function(textarea) {
                ClassicEditor
                    .create(textarea)
                    .then(editor => {
                        console.log("CKEditor initialized successfully:", editor);
                    })
                    .catch(error => {
                        console.error("CKEditor initialization error:", error);
                    });
            });
        });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // Set editor height
            });
        });
    </script>


</body>
<!--end::Body-->

</html>
