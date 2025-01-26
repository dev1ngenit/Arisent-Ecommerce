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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Privacy & Policy</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Privacy & Policy<span class="ms-2 badge bg-danger"></span></li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="{{ route('admin.privacy-policy.create') }}" class="btn btn-light-primary btn-sm">Add
                    Privacy & Policy</a>

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <div class="card card-flash">

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="30%">Name</th>
                        <th width="30%">Status</th>
                        <th width="100%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $item->name }}</td>
                            <td class="text-start">
                                @if ($item->status == 'active')
                                    <span class="badge badge-light-success">Is_active</span>
                                @else
                                    <span class="badge badge-light-danger">Is_inactive</span>
                                @endif
                            </td>
                            <td>

                                @if ($item->status == 'active')
                                    <a href="{{ route('privacy-policy.inactive', $item->id) }}" title="Inactive"><i
                                            class="bi bi-hand-thumbs-down text-danger fs-3"></i></a>
                                @else
                                    <a href="{{ route('privacy-policy.active', $item->id) }}" title="Active"><i
                                            class="bi bi-hand-thumbs-up text-success fs-3"></i></a>
                                @endif

                                {{-- @if (Auth::guard('admin')->user()->can('edit.privacy')) --}}
                                <a href="{{ route('admin.privacy-policy.edit', $item->id) }}" class="text-primary">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                {{-- @endif

                                @if (Auth::guard('admin')->user()->can('delete.privacy')) --}}
                                <a href="{{ route('delete.privacy', $item->id) }}" class=""
                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>
                                {{-- @endif --}}


                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
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
    @endpush
@endsection
