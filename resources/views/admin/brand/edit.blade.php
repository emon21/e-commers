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
                            <h3 class="box-title">Brand Edit</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{ route('brand.update', $brand->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $brand->id }}">
                                <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                                <div class="d-flex mx-auto">
                                    <div class="form-group col-sm-6">
                                        <label>Brand Name English <span class="text-danger text-bold">*</span></label>
                                        <input type="text" name="brand_name_en" class="form-control"
                                            placeholder="Enter Brand Name English" value="{{ $brand->brand_name_en }}">
                                        @error('brand_name_en')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Brand Name Hindi <span class="text-danger text-bold">*</span></label>
                                        <input type="text" name="brand_name_hin" class="form-control"
                                            placeholder="Enter Brand Name Hindi" value="{{ $brand->brand_name_hin }}">
                                        @error('brand_name_hin')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Brand Image <span class="text-danger text-bold">*</span></label>
                                        <input type="file" name="brand_image" class="form-control">
                                        @error('brand_image')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="colsm-6">
                                        <img src="{{ asset($brand->brand_image) }}" alt=""
                                            class="img-fluid rounded ml-4"
                                            style="width: 120px;
                                             height: 80px;
                                         ">
                                    </div>
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
