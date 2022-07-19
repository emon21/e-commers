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
                            <a href="{{ route('add-product') }}" class="btn btn-success float-right">Create Product</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <span
                                                        class="badge badge-success">{{ $product->category->category_name_en }}</span>
                                                    <span><i class="{{ $product->category_icon }}"></i></span>
                                                </td>
                                                <td>{{ $product->product_name_en }}</td>
                                                <td>{{ $product->product_code }}</td>

                                                <td>
                                                    <a href="{{ route('category.edit', $product->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('category.delete', $product->id) }}"
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
