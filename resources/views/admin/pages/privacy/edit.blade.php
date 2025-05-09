@extends('admin.admin_dashboard')
@section('admin')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Privacy & Policy</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Privacy & Policy<span class="ms-2 badge bg-danger"></span>
                    </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="{{ route('admin.privacy-policy.create') }}" class="btn btn-light-primary btn-sm">Back</a>

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <div class="card card-flash">

        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.privacy-policy.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')


                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-12">

                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                    autocomplete="off" value="{{ $item->name }}">
                                @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-12">

                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Content</label>
                                <textarea name="content" rows="3" cols="3"
                                    class="tinymce_metronic form-control @error('content') is-invalid @enderror">{!! $item->content !!}</textarea>
                                @error('content')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Effective Date</label>
                                <input type="date" name="effective_date"
                                    class="form-control @error('effective_date') is-invalid @enderror"
                                    placeholder="Question" value="{{ $item->effective_date }}"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">

                                @error('effective_date')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Expiration Date</label>
                                <input type="date" name="expiration_date"
                                    class="form-control @error('expiration_date') is-invalid @enderror"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $item->expiration_date }}">

                                @error('expiration_date')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Version</label>
                                <input type="type" name="version"
                                    class="form-control @error('version') is-invalid @enderror" placeholder="Version"
                                    value="{{ $item->version }}">

                                @error('version')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                </div>

            </form>

        </div>

    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {

                        name: {
                            required: true,
                        },

                        // banner_image: {
                        //     required: true,
                        // },

                        content: {
                            required: true,
                        },



                    },
                    messages: {

                        name: {
                            required: 'Please Enter Course Category Name',
                        },

                        // banner_image: {
                        //     required: 'Please Enter Banner Image',
                        // },

                        content: {
                            required: 'Please Enter Description Field',
                        },


                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                });
            });
        </script>
    @endpush
@endsection
