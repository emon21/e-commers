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
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{ route('category.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                <div class="form-group">
                                    <label>Category Name English <span class="text-danger text-bold">*</span></label>
                                    <input type="text" name="category_name_en" class="form-control"
                                        value="{{ $category->category_name_en }}">
                                    @error('category_name_en')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Category Name Hindi <span class="text-danger text-bold">*</span></label>
                                    <input type="text" name="category_name_hin" class="form-control"
                                        value="{{ $category->category_name_hin }}">
                                    @error('category_name_hin')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Category Icon<span class="text-danger text-bold">*</span></label>
                                    <input type="text" name="category_icon" class="form-control"
                                        value="{{ $category->category_icon }}">
                                    @error('category_icon')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-center float-left">
                                    <button type="submit" class="btn btn-success">Create Category</button>
                                </div>
                            </form>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
@endsection
