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
                        <h4 class="">Profile Update</h4>
                        <hr>
                        <form class="register-form outer-top-xs" role="form" method="POST"
                            action="{{ route('user.profile.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label class="info-title" for="email">Name<span>*</span></label>
                                        <input type="text"
                                            class="form-control unicase-form-control text-input @error('name') is-invalid @enderror"
                                            id="email" name="name" value="{{ $user->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-title" for="email">Email Address <span>*</span></label>
                                        <input type="email"
                                            class="form-control unicase-form-control text-input @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $user->email }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-title" for="phone">Phone No <span>*</span></label>
                                        <input type="text"
                                            class="form-control unicase-form-control text-input @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ $user->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Profile Photo</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-file" aria-hidden="true"></i>

                                            </div>
                                            <input type="file" class="form-control" name="profile_photo" id="image">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <div class="form-group">
                                                <label class="text-center"
                                                    style="padding-left: 50px;font-size: 17px;
                                                font-weight: bold;
                                                border-bottom: 2px solid #e5e1e1;
                                                width: 100%;
                                                padding: 10px;
                                                text-align: center;">Profile
                                                    Photo</label>

                                                <img id="showImage" class="rounded"
                                                    src="{{ !empty($currentUser->profile_photo) ? url('upload/user_images/', $currentUser->profile_photo) : url('upload/user_images/default.png') }}"
                                                    alt="User Avatar"
                                                    style="width: 280px;
                                                    height: 282px;
                                                    margin-top: 4px;">

                                                {{-- <img class="rounded-circle card-img-top" style="border-radius: 50%;"
                                                    src="{{ !empty($user->profile_photo) ? 'upload/user_images/' . $user->profile_photo : url('upload/user_images/default.png') }}"
                                                    alt="User Avatar" width="100%"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-upper btn btn-success checkout-page-button"
                                style="margin-top:0px;">Profile
                                Update</button>
                        </form>




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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // alert('#showImage');
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
