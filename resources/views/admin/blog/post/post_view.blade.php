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
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Post Name</th>
                                            <th>Blog Description</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset($post->blog_img) }}"
                                                        style="width: 220px;height: 60px;margin: 0 auto;display: flex;"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-success">{{ $post->category->category_name }}</span>
                                                    <span><i class="{{ $post->category_icon }}"></i></span>
                                                </td>
                                                <td>{{ $post->blog_title }}</td>
                                                <td>{{ $post->blog_description }}</td>



                                                <td>
                                                    @if ($post->status == 1)
                                                        <span class="badge badge-pill badge-success p-2">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger p-2">Inactive</span>
                                                    @endif
                                                </td>






                                                <td width="20%">
                                                    <a href="{{ route('product.details', $post->id) }}"
                                                        class="btn btn-success text-light" title="Product View"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a href="{{ route('edit-product', $post->id) }}" class="btn btn-info"
                                                        title="Product Edit"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('product.delete', $post->id) }}"
                                                        class="btn btn-danger" title="Product Delete"
                                                        onclick="return confirm('Are You Sure Delete This Items ?')"><i
                                                            class="fa fa-trash"></i></a>
                                                    @if ($post->status == 1)
                                                        <a href="{{ route('product.inactive', $post->id) }}"
                                                            class="btn btn-danger text-light" title="Inactive Now">
                                                            <i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{ route('product.active', $post->id) }}"
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
                                          <th>Image</th>
                                          <th>Category</th>
                                          <th>Post Name</th>
                                          <th>Blog Description</th>
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
