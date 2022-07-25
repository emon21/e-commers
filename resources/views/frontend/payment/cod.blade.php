@extends('frontend.main_master')
@section('title')
    Checkout - Product
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Checkout</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="checkout-box">
                <div class="row">
                    <form action="{{ route('cash.order') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <!-- checkout-progress-sidebar -->
                            <div class="checkout-progress-sidebar ">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="unicase-checkout-title">Your Shopping Amount</h4>
                                        </div>
                                        <div class="">
                                            <ul class="nav nav-checkout-progress list-unstyled">

                                                <li>


                                                    <strong>Sub Total :</strong>
                                                    ${{ $cartTotal }}
                                                    <hr>
                                                    <strong>Grand Total :</strong>
                                                    ${{ $cartTotal }}
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- checkout-progress-sidebar -->
                        </div>

                        <div class="col-md-6">
                            <!-- checkout-progress-sidebar -->
                            <div class="checkout-progress-sidebar ">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                        </div>
                                        <div class="form-row">
                                            <label for="card-element">

                                                <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                                                <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                                                <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                                                <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
                                                <input type="hidden" name="address" value="{{ $data['address'] }}">
                                                <input type="hidden" name="notes" value="{{ $data['notes'] }}">

                                            </label>
                                        </div>
                                        <button class="btn btn-primary">Submit Payment</button>
                                    </div>
                                </div>
                            </div>
                            <!-- checkout-progress-sidebar -->
                        </div>

                    </form>

                </div><!-- /.row -->
            </div><!-- /.checkout-box -->

        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
