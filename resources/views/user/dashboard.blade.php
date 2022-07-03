@extends('frontend.main_master')

@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    @include('user.pages.side_bar')

                </div>
                <!-- end col-sm-2 -->

                <div class="col-sm-10">
                    <br>
                    <div class="sign-in-page mt-4">
                        <h3 class="text-center"><span
                                class="text-danger">Hi..</span><strong>{{ Auth::user()->name }}</strong>
                            Wellcome TO
                            Online
                            Shop</h3>
                    </div>

                </div>
                <!-- end col-sm-10 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end body-content -->
@endsection
