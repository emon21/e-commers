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
                            <h3 class="box-title">SubCategory Edit</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{ route('subcategory.update', $subcategory->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $subcategory->id }}">
                                <div class="d-flex mx-auto">
                                    <div class="form-group col-6">
                                        <label>SubCategory Name English <span class="text-danger text-bold">*</span></label>
                                        <input type="text" name="subcategory_name_en" class="form-control"
                                            value="{{ $subcategory->subcategory_name_en }}">
                                        @error('subcategory_name_en')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label>SubCategory Name Hindi <span class="text-danger text-bold">*</span></label>
                                        <input type="text" name="subcategory_name_hin" class="form-control"
                                            value="{{ $subcategory->subcategory_name_hin }}">
                                        @error('subcategory_name_hin')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Category Select<span class="text-danger text-bold">*</span></label>
                                    <select class="form-control" name="category_id">
                                        <option selected="selected" disabled=""> >>Select SubCategory << </option>
                                                @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>
                                            {{ $category->category_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-6">
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
