@extends('admin.admin_master')
@section('admin')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Product</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form novalidate>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            <!-- Start 1st Row -->
                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <h5>Brand Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="brand_id" class="form-control">
                                                            <option value="" selected="" disabled="">Select
                                                                Category
                                                            </option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">
                                                                    {{ $brand->brand_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Category Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="category_id" class="form-control">
                                                            <option value="" selected="" disabled="">Select
                                                                Category
                                                            </option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Sub Category Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="subcategory_id" class="form-control">
                                                            <option value="" selected="" disabled="">Select
                                                                Category
                                                            </option>

                                                        </select>
                                                        @error('subcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End 1st Row -->

                                        <div class="row">
                                            <!-- Start 2nd Row -->
                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <h5>Sub Sub Category Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="brand_id" class="form-control">
                                                            <option value="" selected="" disabled="">Select
                                                                Category
                                                            </option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">
                                                                    {{ $brand->brand_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Name English<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_en" class="form-control"
                                                            required
                                                            data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Name Hindi<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_hin" class="form-control"
                                                            required
                                                            data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End 2nd Row -->

                                        <div class="row">
                                            <!-- Start 3rd Row -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Code<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_code" class="form-control"
                                                            required
                                                            data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Quantity<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_qty" class="form-control"
                                                            required
                                                            data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Tags en<span class="text-danger">*</span></h5>
                                                    <input type="text" name="product_tags_en" class="form-control"
                                                        value="Lorem,Ipsum,Amet" data-role="tagsinput"
                                                        placeholder="add tags">
                                                </div>
                                            </div>
                                        </div><!-- End 3rd Row -->

                                        <div class="row">
                                            <!-- Start 4th Row -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Tags hin<span class="text-danger">*</span></h5>
                                                    <input type="text" name="product_tags_hin" class="form-control"
                                                        value="Lorem,Ipsum,Amet" data-role="tagsinput"
                                                        placeholder="add tags">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Size En<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_size_en" class="form-control"
                                                            value="Small,Medium,Large" data-role="tagsinput"
                                                            placeholder="add tags">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Size Hin<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_size_hin"
                                                            class="form-control" value="Small,Medium,Large"
                                                            data-role="tagsinput" placeholder="add tags">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End 4th Row -->

                                        <div class="row">
                                            <!-- Start 5th Row -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Color En<span class="text-danger">*</span></h5>
                                                    <input type="text" name="product_color_en" class="form-control"
                                                        value="Lorem,Ipsum,Amet" data-role="tagsinput"
                                                        placeholder="add tags">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Color Hin<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_color_hin"
                                                            class="form-control" value="Lorem,Ipsum,Amet"
                                                            data-role="tagsinput" placeholder="add tags">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Selling Price<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="selling_price" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End 5th Row -->

                                        <div class="row">
                                            <!-- Start 6th Row -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Discount Price<span class="text-danger">*</span></h5>
                                                    <input type="text" name="discount_price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Product Thambnil<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="product_thambnil"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5>Multiple Image<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="multiImg[]" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End 6th Row -->

                                        <div class="row">
                                            <!-- Start 7th Row -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Short Description English <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="short_desc_en" class="form-control" rows="10" cols="80"
                                                            placeholder="Short Description English">
                                                           </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Short Description Hindi <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="short_desc_hin" class="form-control" rows="10" cols="80"
                                                            placeholder="Short Description Hindi"></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                        </div><!-- End 7th Row -->


                                        <div class="row">
                                            <!-- Start 8th Row -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Long Description English <span class="text-danger">*</span></h5>
                                                    <div class="controls">

                                                        <textarea name="long_desc_en" id="editor1" class="form-control" rows="10" cols="80" required
                                                            placeholder="Textarea text">Long Description English</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Long Description Hindi<span class="text-danger">*</span></h5>
                                                    <div class="controls">

                                                        <textarea name="long_desc_hin" id="editor2" class="form-control" rows="10" cols="80" required
                                                            placeholder="Textarea text">Long Description Hindi</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End 8th Row -->
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_2" value="x">
                                                    <label for="checkbox_2">Hot Deals</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_3" value="y">
                                                    <label for="checkbox_3">Featured</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_4" value="x">
                                                    <label for="checkbox_4">Special Offer</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_5" value="y">
                                                    <label for="checkbox_5">Special Deals</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Add Product</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
