@extends('admin.admin_master')
@section('admin')
    <script src="{{ asset('backend') }}/js/jquery.min.js"></script>

    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Product Details</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-bordered">
                                <tbody>

                                    <tr>
                                        <td style="width: 250px;">Feature Image</td>
                                        <td>
                                            <div style="width:150px;height:150px;overflow:hidden" class="mt-2">
                                                <img src="@if ($products->product_thambnil) {{ asset($products->product_thambnil) }} @else
                                     {{ asset('backend/user/user.png') }} @endif"
                                                    class="img-rounded" alt="">
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>Product Multiple Image</td>
                                        <td>

                                            <div class="row">

                                                @foreach ($multiImages as $img)
                                                    <div
                                                        style="width: 150px;
                                                        height: 181px;
                                                        margin-left: 20px;
                                                        margin-right: 0px;
                                                        border-radius: 5px;
                                                        margin-top: 10px;
                                                        margin-bottom: 10px;
                                                        box-shadow: 0px 0px 5px 0px #f1eeee;">

                                                        <img src="@if ($img->photo_name) {{ asset($img->photo_name) }} @else
                                                        {{ asset('backend/user/user.png') }} @endif"
                                                            class="img-rounded" alt=""
                                                            style="width: 140px;
                                                            height: 171px;
                                                            margin: 5px;
                                                            border-radius: 5px;">

                                                    </div>
                                                @endforeach

                                            </div>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td style="width: 250px;">Product Name</td>
                                        <td>{{ $products->product_name_en }}</td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Product Code</td>
                                        <td>{{ $products->product_code }}</td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Product Quantity</td>
                                        <td>{{ $products->product_qty }}</td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Selling Price</td>
                                        <td>{{ $products->selling_price }}</td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Product Discount Price</td>
                                        <td>
                                            @if ($products->discount_price == null)
                                                <span class="badge badge-info mb-2">No Discount</span>
                                            @else
                                                @php
                                                    $amount = $products->selling_price - $products->discount_price;
                                                    $discount = ($amount / $products->selling_price) * 100;
                                                @endphp
                                                <span class="badge badge-info mb-2">{{ round($discount) }}
                                                    %</span>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Brand Name</td>
                                        <td>
                                            <span class="badge badge-info mb-2">
                                                {{ $products->brand->brand_name_en }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 250px;">Category</td>
                                        <td>
                                            <span class="badge badge-info mb-2">
                                                {{ $products->category->category_name_en }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 250px;">Sub Category</td>
                                        <td>
                                            <span class="badge badge-danger mb-2">
                                                {{ $products->subcategory->subcategory_name_en }}
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Sub Sub Category</td>
                                        <td>
                                            <span class="badge badge-success mb-2">
                                                {{ $products->subsubcategory->sub_subcategory_name_en }}
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Product Tags</td>
                                        <td>
                                            @php
                                                $values = explode(',', $products->product_tags_en);
                                            @endphp
                                            @if (in_array("$products->product_tags_en", $values))
                                                {{ $products->product_tags_en }}
                                            @endif

                                            @foreach ($values as $skill)
                                                <span class="badge badge-info mb-2">{{ $skill }}</span>
                                            @endforeach
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Product Size</td>
                                        <td>
                                            @php
                                                $values = explode(',', $products->product_size_en);
                                            @endphp
                                            {{--  @if (in_array("$products->product_size_en", $values))
                                                {{ $products->product_size_en }}
                                            @endif  --}}

                                            @foreach ($values as $skill)
                                                <span class="badge badge-dark mb-2">{{ $skill }}</span>
                                            @endforeach
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Product Color</td>
                                        <td>
                                            @php
                                                $values = explode(',', $products->product_color_en);
                                            @endphp
                                            @if (in_array("$products->product_color_en", $values))
                                                {{ $products->product_color_en }}
                                            @endif

                                            @foreach ($values as $skill)
                                                <span class="badge badge-warning mb-2 text-dark">{{ $skill }}</span>
                                            @endforeach
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Short Description</td>
                                        <td>{!! $products->short_desc_en !!}</td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Long Description</td>
                                        <td>{!! $products->long_desc_en !!}</td>
                                    </tr>

                                    <tr>
                                        <td style="width: 250px;">Status</td>
                                        <td>
                                            @if ($products->status == 1)
                                                <span class="badge badge-pill badge-success p-2">Active</span>
                                            @else
                                                <span class="badge badge-pill badge-danger p-2">Inactive</span>
                                            @endif
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

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
