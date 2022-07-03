@extends('frontend.main_master')

@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <br />

                    <img class="rounded-circle card-img-top" style="border-radius: 50%;"
                        src="{{ !empty($adminUser->profile_photo) ? url('upload/admin_images/' . $adminUser->profile_photo) : url('upload/no_image.jpg') }}"
                        alt="User Avatar" height="100%" width="100%">
                    <br />
                    <br />

                    <ul class="list-group list-group-flush">
                        <a href="#" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="#" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="#" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="#" class="btn btn-danger btn-sm btn-block">Logo ut</a>
                    </ul>

                </div>
                <!-- end col-sm-2 -->

                <div class="col-sm-2">

                </div>
                <!-- end col-sm-2 -->

                <div class="col-sm-8">
                    <div class="card">
                        <h3 class="text-center"><span
                                class="text-danger">Hi..</span><strong>{{ Auth::user()->name }}</strong>Welcome TO Online
                            Shop</h3>
                    </div>

                </div>
                <!-- end col-sm-2 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end body-content -->
@endsection
