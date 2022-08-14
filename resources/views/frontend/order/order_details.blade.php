@extends('frontend.main_master')
@section('title')
    My Cart - Product
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>MyCart</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cart-description item">Sl No </th>
                                        <th class="cart-description item">Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-edit item">Color</th>
                                        <th class="cart-edit item">Size</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Subtotal</th>
                                        <th class="cart-romove item">Status</th>
                                        <th class="cart-romove item">Action</th>
                                    </tr>
                                </thead><!-- /thead -->

                                <tbody>
                                    @foreach ($order as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>

                                                <img src="{{ asset($item->product->product_thambnil) }}" alt=""
                                                    style="width:50px;height: ;50px;">
                                            </td>
                                            <td>
                                                {{ $item->product->product_name_en }}
                                            </td>
                                            <td>
                                                {{ $item->color }}
                                            </td>
                                            <td>
                                                {{ $item->size }}
                                            </td>
                                            <td>
                                                {{ $item->qty }}
                                            </td>
                                            <td>
                                                {{ $item->price }}
                                            </td>
                                            <td>
                                                {{ $item->order->status }}
                                            </td>
                                            <td width="18%" class="text-center">
                                                <a href="{{ $item->id }}" class="btn btn-success"> Edit</a>
                                                <a href="{{ $item->id }}" class="btn btn-danger"> Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach



                                </tbody><!-- /tbody -->

                            </table><!-- /table -->
                        </div>
                    </div><!-- /.shopping-cart-table -->

                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
