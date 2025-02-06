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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">User</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Total User <span
                            class="ms-2 badge bg-danger">{{ count($users) }}</span></li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <!--begin::Primary button-->
                {{-- <a href="{{ route('all.category') }}" class="btn btn-sm btn-light-primary">Category</a>
                <a href="{{ route('all.subcategory') }}" class="btn btn-sm btn-light-info">Sub Category</a>
                <a href="{{ route('all.childcategory') }}" class="btn btn-sm btn-light-dark">Child Category</a> --}}
                <!--end::Primary button-->

                <a href="" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#addModal">Add
                        User</a>

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    {{-- <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container"> --}}
    <!--begin::Products-->
    <div class="card card-flush">

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->

            <table id="kt_datatable_example_5" class="table table-striped" style="width:100%">
                <thead class="bg-dark text-light">
                    <tr>
                        <th class="text-center" style="width: 60px">No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>

                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                @if ($user->status == 1)
                                    <span class="badge badge-light-success">Active</span>
                                @else
                                    <span class="badge badge-light-danger">inactive</span>
                                @endif
                            </td>
                            <td>

                                @if (Auth::guard('admin')->user()->can('status.user'))
                                    @if ($user->status == 1)
                                        <a href="{{ route('user.inactive.admin', $user->id) }}" title="Inactive"><i
                                                class="bi bi-hand-thumbs-down text-danger fs-3"></i></a>
                                    @else
                                        <a href="{{ route('user.active.admin', $user->id) }}" title="Active"><i
                                                class="bi bi-hand-thumbs-up text-success fs-3"></i></a>
                                    @endif
                                @endif

                                {{-- @if (Auth::guard('admin')->user()->can('delete.user')) --}}
                                    <a href="{{ route('delete.user', $user->id) }}" class="ms-1" id="delete"
                                        title="Delete"><i class="bi bi-trash3-fill fs-3 text-danger"></i></a>
                                {{-- @endif --}}


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
    {{-- </div>
        <!--end::Container-->
    </div>
    <!--end::Post--> --}}


    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header" style="background: #6196A6;height: 50px;">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Add User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('store.user') }}" method="POST" id="myForm">

                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" autocomplete="off" placeholder="Name"
                                        class="form-control form-control-sm">
                                </div>
                            </div>



                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" autocomplete="off" placeholder="Email"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Phone</label>
                                    <input type="tel" name="phone" autocomplete="off" placeholder="Phone"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" autocomplete="off" placeholder="Address"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" autocomplete="off" placeholder="******"
                                        class="form-control form-control-sm">
                                </div>
                            </div>

                        </div>


                        <div class="row">



                            <div class="col-6">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-select form-select-sm">
                                    <option selected disabled>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>

                    </div>

                </form>

            </div>
        </div>
    </div>



    {{-- DataTable  --}}
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
