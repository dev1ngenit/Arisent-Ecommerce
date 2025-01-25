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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Subscribe</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Total Subscribe<span
                            class="ms-2 badge bg-danger">{{ count($subscribes) }}</span></li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            {{-- <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-light-primary btn-sm">Add
                    Contact</a>

            </div> --}}
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

                    <table id="kt_datatable_example_5" class="table table-striped" style="width:100%">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="text-center" style="width: 60px;">No</th>
                                {{-- <th>Name</th> --}}
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribes as $key => $subscribe)
                                <tr>

                                    <td class="text-center">{{ $key + 1 }}</td>
                                    {{-- <td>{{ $subscribe->name }}</td> --}}
                                    <td>{{ $subscribe->email }}</td>
                                    {{-- <td>{{ $subscribe->phone }}</td>
                                    <td>{{ $subscribe->message }}</td> --}}

                                    <td>
                                        <a href="" class="ms-1" title="Edit"></a>

                                        <a href="{{ route('delete.subscribe', $subscribe->id) }}" class="ms-1"
                                            id="delete" title="Delete"><i
                                                class="bi bi-trash3-fill fs-3 text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Post-->


    {{-- Data Table  --}}
    <script>
        $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
@endsection
