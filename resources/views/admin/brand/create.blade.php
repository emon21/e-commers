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
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Brand Name English <span class="text-danger text-bold">*</span></label>
                                    <input type="text" name="brand_name_en" class="form-control"
                                        placeholder="Enter Brand Name English">
                                    @error('brand_name_en')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Brand Name Hindi <span class="text-danger text-bold">*</span></label>
                                    <input type="text" name="brand_name_hin" class="form-control"
                                        placeholder="Enter Brand Name Hindi">
                                    @error('brand_name_hin')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Brand Image <span class="text-danger text-bold">*</span></label>
                                    <input type="file" name="brand_image" class="form-control">
                                    @error('brand_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-center float-left">
                                    <button type="submit" class="btn btn-success">Create Brands</button>
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
