@extends('admin.admin_master')
@section('admin')
    <div class="container-full">

        <section class="content">

            <div class="row">

                <div class="col-12">
                    <form action="{{ route('admin.profile.update', $adminEdit->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Admin Profie Edit</h4>
                            </div>
                            <div class="box-body">

                                <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Admin Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" class="form-control" name="admin_name"
                                                        value="{{ $adminEdit->name }}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <div class="col-6">
                                                <!-- Date mm/dd/yyyy -->
                                                <label>Admin Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" class="form-control" name="admin_email"
                                                        value="{{ $adminEdit->email }}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-6">

                                            <label>Profile Photo</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-file" aria-hidden="true"></i>

                                                </div>
                                                <input type="file" class="form-control" name="profile_photo"
                                                    id="image">

                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.input group -->

                                        <div class="col-sm-6 justify-content-center">
                                            {{-- <img src="{{ asset($adminEdit->profile_photo) }}" alt=""
                                                style="100px;height:100px;"> --}}
                                            <img id="showImage" class="rounded"
                                                src="{{ !empty($adminEdit->profile_photo) ? url('upload/admin_images/' . $adminEdit->profile_photo) : url('upload/no_image.jpg') }}"
                                                alt="User Avatar" style="width: 85px;height: 77px;">

                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center float-left">
                                        <button type="submit" class="btn btn-rounded btn-success">Update
                                            Profile</button>

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
