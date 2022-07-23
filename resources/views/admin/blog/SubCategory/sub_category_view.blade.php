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
                            <a href="{{ route('blog.subcategory.add') }}" class="btn btn-success float-right">Create
                                SubCategory</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category</th>
                                            <th>SubCategory Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>

                                                <td>
                                                    <span class="badge badge-warning">
                                                        {{ $subcategory->category->category_name }}
                                                    </span>
                                                </td>

                                                <td>{{ $subcategory->sub_category_name }}</td>

                                                <td width="20%">
                                                    <a href="{{ route('edit-product', $subcategory->id) }}"
                                                        class="btn btn-info" title="Product Edit"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="{{ route('product.delete', $subcategory->id) }}"
                                                        class="btn btn-danger" title="Product Delete"
                                                        onclick="return confirm('Are You Sure Delete This Items ?')"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category</th>
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
