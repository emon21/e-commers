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
                                            <th>Product Image</th>
                                            <th>Category</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Product Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Product Tags</th>
                                            <th>Product status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset($product->product_thambnil) }}"
                                                        style="width: 250px;height: 135px;margin: 0 auto;display: flex;"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-success">{{ $product->category->category_name_en }}</span>
                                                    <span><i class="{{ $product->category_icon }}"></i></span>
                                                </td>
                                                <td>{{ $product->product_name_en }}</td>
                                                <td>{{ $product->product_code }}</td>
                                                <td>{{ $product->selling_price }} $</td>
                                                <td>{{ $product->product_qty }} Pic</td>

                                                <td>
                                                    @if ($product->discount_price == null)
                                                        <span class="badge badge-info mb-2">No Discount</span>
                                                    @else
                                                        @php
                                                            $amount = $product->selling_price - $product->discount_price;
                                                            $discount = ($amount / $product->selling_price) * 100;
                                                        @endphp
                                                        <span class="badge badge-info mb-2">{{ round($discount) }}
                                                            %</span>
                                                    @endif


                                                </td>
                                                <td> @php
                                                    $values = explode(',', $product->product_tags_en);
                                                @endphp
                                                    @if (in_array("$product->product_tags_en", $values))
                                                        {{ $product->product_tags_en }}
                                                    @endif

                                                    @foreach ($values as $skill)
                                                        <span class="badge badge-info mb-2">{{ $skill }}</span>
                                                    @endforeach
                                                    {{-- {{ explode('', $product->product_tags_en) }} --}}

                                                    {{-- {{ $collection = Str::of($product->product_tags_en)->explode(' ') }} --}}
                                                </td>
                                                <td>
                                                    @if ($product->status == 1)
                                                        <span class="badge badge-pill badge-success p-2">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger p-2">Inactive</span>
                                                    @endif
                                                </td>






                                                <td width="20%">
                                                    <a href="{{ route('product.details', $product->id) }}"
                                                        class="btn btn-success text-light" title="Product View"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a href="{{ route('edit-product', $product->id) }}"
                                                        class="btn btn-info" title="Product Edit"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="{{ route('product.delete', $product->id) }}"
                                                        class="btn btn-danger" title="Product Delete"
                                                        onclick="return confirm('Are You Sure Delete This Items ?')"><i
                                                            class="fa fa-trash"></i></a>
                                                    @if ($product->status == 1)
                                                        <a href="{{ route('product.inactive', $product->id) }}"
                                                            class="btn btn-danger text-light" title="Inactive Now">
                                                            <i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{ route('product.active', $product->id) }}"
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
                                            <th>Product Image</th>
                                            <th>Category</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Product Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Product Tags</th>
                                            <th>Product status</th>
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
