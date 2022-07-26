@extends('frontend.main_master')
@section('title')
    My Order
@endsection
@section('content')
    {{-- @php
    $user = Auth::user();
    $userlist = DB::table('users')
        ->where('id', $user->id)
        ->get();
    @endphp --}}
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    @include('user.pages.side_bar')
                </div>
                <!-- end col-sm-2 -->

                <div class="col-md-5 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Shipping Details</h4>
                        </div>
                        <hr>
                        <div class="card-body" style="background: #E9EBEC;">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th> Shipping Name : </th>
                                    <th> {{ $order->name }} </th>
                                </tr>

                                <tr>
                                    <th> Shipping Phone : </th>
                                    <th> {{ $order->phone }} </th>
                                </tr>

                                <tr>
                                    <th> Shipping Email : </th>
                                    <th> {{ $order->email }} </th>
                                </tr>



                                <tr>
                                    <th> Post Code : </th>
                                    <th> {{ $order->post_code }} </th>
                                </tr>

                                <tr>
                                    <th> Order Date : </th>
                                    <th> {{ $order->order_date }} </th>
                                </tr>

                            </table>


                        </div>

                    </div>

                </div> <!-- // end col md -5 -->
                <!-- end col-sm-2 -->

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex mx-auto justify-content-between">
                                <h4>Order Details
                                    <span class="text-danger float-right">Invoice : {{ $order->invoice_no }}</span>
                                </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body" style="background: #E9EBEC;">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th> Name : </th>
                                    <th> {{ $order->user->name }} </th>
                                </tr>

                                <tr>
                                    <th>Phone : </th>
                                    <th> {{ $order->user->phone }} </th>
                                </tr>

                                <tr>
                                    <th>Email : </th>
                                    <th> {{ $order->user->email }} </th>
                                </tr>


                                <tr>
                                    <th> Invoice : </th>
                                    <th class="text-danger"> {{ $order->invoice_no }} </th>
                                </tr>

                                <tr>
                                    <th> Order Total : </th>
                                    <th>{{ $order->amount }} </th>
                                </tr>

                                <tr>
                                    <th> Order : </th>
                                    <th>
                                        <span class="badge badge-pill badge-warning"
                                            style="background: #418DB9;">{{ $order->status }} </span>
                                    </th>
                                </tr>

                            </table>


                        </div>

                    </div>

                </div> <!-- // end col md -5 -->
                <!-- end col-sm-2 -->

            </div>
            <!-- end row -->

            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Product Code</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderitem as $item)
                            <tr>
                                <td><img src="{{ asset($item->product->product_thambnil) }}" height="50px;" width="50px;">
                                </td>
                                <td>{{ $item->product->product_name_en }}</td>
                                <td>{{ $item->product->product_code }}</td>
                                <td>{{ $item->color }}</td>
                                <td>{{ $item->size }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>${{ $item->price }} ( $ {{ $item->price * $item->qty }} ) </td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end body-content -->
@endsection
