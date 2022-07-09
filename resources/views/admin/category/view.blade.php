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
                            <h3 class="box-title">Category List</h3>
                            <a href="{{ route('category.create') }}" class="btn btn-success float-right">Create Category</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category Icon</th>
                                            <th>Category Name En</th>
                                            <th>Category Name Hin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><span><i class="{{ $item->category_icon }}"></i></span></td>
                                                <td>{{ $item->category_name_en }}</td>
                                                <td>{{ $item->category_name_hin }}</td>

                                                <td>
                                                    <a href="{{ route('category.edit', $item->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('category.delete', $item->id) }}"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Are You Sure Delete This Items ?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category Icon</th>
                                            <th>Category Name En</th>
                                            <th>Category Name Hin</th>
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
