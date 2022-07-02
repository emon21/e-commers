@extends('admin.admin_master')
@section('admin')
    <div class="container-full">

        <section class="content">

            <div class="row">

                <div class="col-12">
                    <form action="{{ route('admin.password.update', $adminEdit->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Admin Change Password</h4>
                            </div>
                            <div class="box-body">

                                <div class="box-body">



                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4 mr-2">
                                                <label>Current Password</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  bg-transparent text-white"><i
                                                                class="ti-lock"></i></span>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control pl-15 bg-transparent text-white plc-white @error('current_password') is-invalid @enderror"
                                                        name="current_password" autocomplete="current_password"
                                                        placeholder="Enter Current Password"
                                                        value="{{ old('current_password') }}">
                                                </div>
                                                @error('current_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                                <label>New Password</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  bg-transparent text-white"><i
                                                                class="ti-lock"></i></span>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control pl-15 bg-transparent text-white plc-white @error('new_password') is-invalid @enderror"
                                                        name="new_password" autocomplete="new_password"
                                                        placeholder="Enter Password" value="{{ old('new_password') }}">
                                                </div>
                                                @error('new_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                                <label>Confirm Password</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text  bg-transparent text-white"><i
                                                                class="ti-lock"></i></span>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control pl-15 bg-transparent text-white plc-white @error('confirm_password') is-invalid @enderror"
                                                        name="confirm_password" autocomplete="confirm_password"
                                                        placeholder="Enter Password"
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

                                    <!-- /.form group -->

                                </div>

                            </div>

                            <!-- /.box-body -->
                        </div>

                        <!-- /.box -->

                    </form>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
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
