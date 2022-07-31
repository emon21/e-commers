@extends('admin.admin_master')
@section('admin')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="justify-content-center d-flex">
                {{-- @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif --}}
            </div>
            <div class="row">

                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-black">
                        <h3 class="widget-user-username">Admin Name : {{ $adminUser->name }}</h3>

                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-rounded mb-5 btn-success float-right"
                            style=""> Edit Profile</a>
                        <h6 class="widget-user-desc">Admin Email : {{ $adminUser->email }}</h6>
                    </div>
                    <div class="widget-user-image">

                        <img class="rounded-circle"
                            src="{{ !empty($adminUser->profile_photo) ? url('upload/admin_images/' . $adminUser->profile_photo) : url('backend/user/user.png') }}"
                            alt="User Avatar">
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">12K</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                                <div class="description-block">
                                    <h5 class="description-header">550</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">158</h5>
                                    <span class="description-text">TWEETS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
