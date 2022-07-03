@extends('frontend.main_master')

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

                <div class="col-sm-10">
                    <br>
                    <div class="sign-in-page mt-4">
                        <h4 class="">Change Password</h4>
                        <hr>

                        <form action="{{ route('user.password.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="box">
                                <div class="box-header">

                                </div>
                                <div class="box-body">

                                    <div class="box-body">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-group col-sm-8">
                                                    <label>Current Password</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text  bg-transparent text-white"><i
                                                                    class="fa fa-lock"></i></span>
                                                        </div>
                                                        <input type="text"
                                                            class="form-control pl-15 bg-transparent text-white plc-white @error('current_password') is-invalid @enderror"
                                                            name="current_password" autocomplete="current_password"
                                                            placeholder="Enter Current Password">
                                                    </div>
                                                    @error('current_password')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-sm-8">
                                                    <label for="new_password">New Password</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text  bg-transparent text-white"><i
                                                                    class="fa fa-lock"></i></span>
                                                        </div>
                                                        <input type="text"
                                                            class="form-control @error('current_password') is-invalid @enderror"
                                                            name="new_password" autocomplete="new_password"
                                                            placeholder="Enter New Password"
                                                            value="{{ old('new_password') }}" id="new_password">
                                                    </div>
                                                    @error('new_password')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-sm-8">
                                                    <label for="confirm_password">Confirm Password</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text  bg-transparent text-white"><i
                                                                    class="fa fa-lock"></i></span>
                                                        </div>
                                                        <input type="text"
                                                            class="form-control pl-15 bg-transparent text-white plc-white @error('confirm_password') is-invalid @enderror"
                                                            name="confirm_password" autocomplete="confirm_password"
                                                            placeholder="Enter Confirm Password"
                                                            value="{{ old('confirm_password') }}">
                                                    </div>
                                                    @error('confirm_password')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center float-left">
                                            <button type="submit" class="btn btn-rounded btn-success">Update
                                                Password</button>

                                        </div>


                                    </div>

                                </div>

                                <!-- /.box-body -->
                            </div>

                            <!-- /.box -->

                        </form>
                        <!-- /.form group -->



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
