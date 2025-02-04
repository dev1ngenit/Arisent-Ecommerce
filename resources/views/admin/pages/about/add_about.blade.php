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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">About</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Add About</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="{{ route('all.about') }}" class="btn btn-light-primary btn-sm">Back</a>

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

                <div class="" style="background: #6196A6;height: 50px;">
                    <h6 class="float-end mt-4 text-white me-3 fw-bolder">About Us Edit From</h6>
                </div>

                <div class="card-body">

                    <form action="{{ route('store.about') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            {{-- Breadcrumb & Section --}}
                            <div class="col-6 shadow-sm bg-white border-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="fw-bolder">Breadcrumb & Section</h4>
                                        <hr>
                                        <div class="row">

                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">Breadcrumb Title</label>
                                                    <input type="text" class="form-control form-control-sm mt-2"
                                                        name="breadcrumb_title" required>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">Breadcrumb Sub Title</label>
                                                    <input type="text" required class="form-control form-control-sm mt-2"
                                                        name="breadcrumb_sub_title">
                                                </div>
                                            </div>

                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">Section One Badge</label>
                                                    <input type="text" required class="form-control form-control-sm mt-2"
                                                        name="section_one_badge">
                                                </div>
                                            </div>


                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">Section One Title</label>
                                                    <input type="text" required class="form-control form-control-sm mt-2"
                                                        name="section_one_title">
                                                </div>
                                            </div>

                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">Section One Sub Title</label>
                                                    <input type="text" required class="form-control form-control-sm mt-2"
                                                        name="section_one_sub_title">
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- CEO Section --}}
                            <div class="col-6 shadow-sm bg-white border-3">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="fw-bolder">CEO Section</h4>
                                        <hr>
                                        <div class="row">

                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">CEO Section Badge</label>
                                                    <input type="text" class="form-control form-control-sm mt-2"
                                                        name="ceo_section_badge">
                                                </div>
                                            </div>

                                            <div class="col-6 mb-2">
                                                <div class="form-group">
                                                    <label for="">CEO Section Title</label>
                                                    <input type="text" class="form-control form-control-sm mt-2"
                                                        name="ceo_section_title">
                                                </div>
                                            </div>

                                            <div class="col-4 mb-2">
                                                <div class="form-group">
                                                    <label for="">CEO Sub Title</label>
                                                    <input type="text" class="form-control form-control-sm mt-2"
                                                        name="ceo_section_sub_title">
                                                </div>
                                            </div>

                                            <div class="col-4 mb-2">
                                                <div class="form-group">
                                                    <label for="">CEO Name</label>
                                                    <input type="text" class="form-control form-control-sm mt-2"
                                                        name="ceo_section_ceo_name">
                                                </div>
                                            </div>

                                            <div class="col-4 mb-2">
                                                <div class="form-group">
                                                    <label for="">Designation</label>
                                                    <input type="text" class="form-control form-control-sm mt-2"
                                                        name="ceo_section_ceo_designation">
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="col-12 shadow-sm bg-white border-3 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <label for="" class="mb-3">Section One
                                                        Description</label>
                                                    <textarea name="section_one_description" class="tinymce_metronic" id=""></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <label for="" class="mb-3">Section Two
                                                        Description</label>
                                                    <textarea name="section_two_description" class="tinymce_metronic" id=""></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <label for="" class="mb-3">CEO Description</label>
                                                    <textarea name="ceo_section_description" class="tinymce_metronic"> </textarea>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            {{-- Why Choose Us --}}
                            <div class="col-12 mt-4">
                                <h4 class="fw-bolder">Why Choose Us</h5>
                                    <hr>
                            </div>

                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="" class="mb-2">Choose Us Section Title</label>
                                                <input type="text" value="" name="choose_us_section_title"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Contact Section --}}
                            <div class="col-12 mt-4">
                                <h4 class="fw-bolder">Contact Section</h5>
                                    <hr>
                            </div>

                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-12 mb-2">
                                            <div class="form-group">
                                                <label for="" class="mb-2">Contact Section Title</label>
                                                <input type="text" value="" name="contact_section_title"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Head Office Title</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="head_office_title" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Head Office Address</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="head_office_address" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Head Office Email</label>
                                                <input type="email" class="form-control form-control-sm mt-2"
                                                    name="head_office_email" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Head Office Phone</label>
                                                <input type="tel" class="form-control form-control-sm mt-2"
                                                    name="head_office_phone" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office One Title</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_one_title" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office One Address</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_one_address" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office One Email</label>
                                                <input type="email" class="form-control form-control-sm mt-2"
                                                    name="sub_office_one_email" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office One Phone</label>
                                                <input type="tel" class="form-control form-control-sm mt-2"
                                                    name="sub_office_one_phone" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Two Title</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_two_title" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Two Address</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_two_address" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Two Email</label>
                                                <input type="email" class="form-control form-control-sm mt-2"
                                                    name="sub_office_two_email" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Two Phone</label>
                                                <input type="tel" class="form-control form-control-sm mt-2"
                                                    name="sub_office_two_phone" value="">
                                            </div>
                                        </div>


                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Three Title</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_three_title" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Three Address</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_three_address" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Three Email</label>
                                                <input type="email" class="form-control form-control-sm mt-2"
                                                    name="sub_office_three_email" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Three Phone</label>
                                                <input type="tel" class="form-control form-control-sm mt-2"
                                                    name="sub_office_three_phone" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Four Title</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_four_title" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Four Address</label>
                                                <input type="text" class="form-control form-control-sm mt-2"
                                                    name="sub_office_four_address" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Four Email</label>
                                                <input type="email" class="form-control form-control-sm mt-2"
                                                    name="sub_office_four_email" value="">
                                            </div>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <div class="form-group">
                                                <label for="">Sub Office Four Phone</label>
                                                <input type="tel" class="form-control form-control-sm mt-2"
                                                    name="sub_office_four_phone" value="">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <hr>




                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-light-primary btn-sm float-end">Add
                                    About</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </div>


    <!--end::Post-->
@endsection
