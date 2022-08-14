@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Product List</h3>
                            <a href="{{ route('slider-add') }}" class="btn btn-success float-right">Create User</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>User Image</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Phone</th>
                                            <th>User Role</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset($user->profile_photo) }}"
                                                        style="width: 80px;height:80px;margin: 0 auto;display: flex;"
                                                        alt="">
                                                </td>

                                                <td class="text-justify">{{ $user->name }}</td>
                                                <td class="text-justify">{{ $user->email }}</td>
                                                <td class="text-justify">{{ $user->phone }}</td>
                                                <td class="text-justify">{{ $user->role_as }}</td>
                                                {{-- <td class="text-justify">{{ $user->status }}</td> --}}

                                                <td>
                                                    @if ($user->status == 1)
                                                        <span class="badge badge-pill badge-success p-2">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger p-2">Inactive</span>
                                                    @endif
                                                </td>

                                                <td width="20%">

                                                    <a href="{{ route('slider-edit', $user->id) }}" class="btn btn-info"
                                                        title="Product Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('slider.delete', $user->id) }}" class="btn btn-danger"
                                                        title="Product Delete"
                                                        onclick="return confirm('Are You Sure Delete This Items ?')"><i
                                                            class="fa fa-trash"></i></a>
                                                    @if ($user->status == 1)
                                                        <a href="{{ route('user.inactive', $user->id) }}"
                                                            class="btn btn-danger text-light" title="Inactive Now">
                                                            <i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{ route('user.active', $user->id) }}"
                                                            class="btn btn-primary text-light" title="Aactive Now">
                                                            <i class="fa fa-arrow-up"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>User Image</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Phone</th>
                                            <th>User Role</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
@endsection
@section('script')
    <script src="{{ asset('backend') }}/../assets/vendor_components/datatable/datatables.min.js"></script>
    <script src="{{ asset('backend') }}/js/pages/data-table.js"></script>
@endsection
