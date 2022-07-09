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
                            <h3 class="box-title">Brand List</h3>
                            <a href="{{ route('brand.create') }}" class="btn btn-success float-right">Create Brand</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Brand Name En</th>
                                            <th>Brand Name Hin</th>
                                            <th>Brand Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->brand_name_en }}</td>
                                                <td>{{ $item->brand_name_hin }}</td>
                                                <td>
                                                    <img src="{{ asset($item->brand_image) }}"
                                                        style="width: 75px;height:75px;" alt="">
                                                </td>
                                                <td>
                                                    <a href="{{ route('brand.edit', $item->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('brand.delete', $item->id) }}"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Are You Sure Delete This Items ?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Brand Name En</th>
                                            <th>Brand Name Hin</th>
                                            <th>Brand Image</th>
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
