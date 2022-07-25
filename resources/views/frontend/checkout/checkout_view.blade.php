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
            <div class="checkout-box ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group checkout-steps" id="accordion">

                            <!-- Start checkout-step-01  -->
                            <div class="panel panel-default checkout-step-01">

                                <!-- panel-heading -->

                                <!-- panel-heading -->

                                <div id="collapseOne" class="panel-collapse collapse in">

                                    <!-- panel-body  -->
                                    <div class="panel-body">
                                        <div class="row">

                                            <!-- guest-login -->
                                            <div class="col-md-6 col-sm-6 already-registered-login">
                                                <h4 class="checkout-subtitle"><b>Shipping Address</b></h4>

                                                <form class="register-form" role="form"
                                                    action="{{ route('checkout.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="info-title" for="full_name">Shipping Name
                                                            <span>*</span></label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input"
                                                            id="full_name" name="shipping_name" placeholder="Name"
                                                            value="{{ Auth::user()->name }}">
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="info-title" for="full_email">Shipping Email
                                                            <span>*</span></label>
                                                        <input type="email"
                                                            class="form-control unicase-form-control text-input"
                                                            id="full_email" name="shipping_email" placeholder="Email"
                                                            value="{{ Auth::user()->email }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="info-title" for="shipping_phone">Shipping Phone
                                                            <span>*</span></label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input"
                                                            id="shipping_phone" name="shipping_phone" placeholder="Phone No"
                                                            value="{{ Auth::user()->phone }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="info-title" for="post_code">Post Code
                                                            <span>*</span></label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input"
                                                            id="post_code" name="post_code" placeholder="Post Code">
                                                    </div>

                                            </div>
                                            <!-- guest-login -->

                                            <!-- already-registered-login -->
                                            <div class="col-md-6 col-sm-6 already-registered-login">

                                                <div class="form-group">
                                                    <label for="comment">address:</label>
                                                    <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="comment">Notes:</label>
                                                    <textarea class="form-control" rows="5" id="comment" name="notes"></textarea>
                                                </div>



                                            </div>
                                            <!-- already-registered-login -->

                                        </div>
                                    </div>
                                    <!-- panel-body  -->

                                </div><!-- row -->
                            </div>
                            <!-- End checkout-step-01  -->



                        </div><!-- /.checkout-steps -->
                    </div>

                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                    </div>
                                    <div class="">
                                        <ul class="nav nav-checkout-progress list-unstyled">

                                            @foreach ($carts as $item)
                                                <li>
                                                    <strong>Image :</strong>
                                                    <img src="{{ $item->options->image }}" alt=""
                                                        style="width:50px;height: ;50px;">
                                                </li>

                                                <li>
                                                    <strong>Qty :</strong>
                                                    ({{ $item->qty }})
                                                    <strong>Color :</strong>
                                                    {{ $item->options->color }}

                                                    <strong>Size :</strong>
                                                    {{ $item->options->size }}
                                                </li>
                                            @endforeach
                                            <hr>
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

                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="stripe">Stripe</label>
                                            <input type="radio" name="payment_method" value="stripe" id="stripe">
                                            <img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt="">

                                        </div>

                                        <div class="col-md-4">

                                            <label for="card">Card</label>
                                            <input type="radio" name="payment_method" value="card" id="card">
                                            <img src="{{ asset('frontend/assets/images/payments/3.png') }}"
                                                alt="">

                                        </div>

                                        <div class="col-md-4">

                                            <label for="cash">Cash</label>
                                            <input type="radio" name="payment_method" value="cash" id="cash">
                                            <img src="{{ asset('frontend/assets/images/payments/2.png') }}"
                                                alt="">


                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Payment
                                        Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div>

                    </form>

                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif"
                                    alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
