@extends('admin.admin_master')
@section('admin')
    <script src="{{ asset('backend') }}/js/jquery.min.js"></script>

    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Product</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('slider-store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">

                                            <div class="form-group">
                                                <h5>Slider Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="slider_name" class="form-control"
                                                        placeholder="Slider Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Slider Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="slider_desc" id="editor1" class="form-control" rows="10" cols="80"
                                                        placeholder="Slider Description"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Slider Status :</label>
                                                    <input name="status" type="radio" class="with-gap radio-col-success"
                                                        id="radio_3" value="1">
                                                    <label for="radio_3" class="d-block">Enable</label>
                                                    <input name="status" class="with-gap radio-col-danger" type="radio"
                                                        id="radio_4" value="0">
                                                    <label for="radio_4">Disable</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <h5>Slider Thambnil<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="slider_img" class="form-control"
                                                        onchange="mainThamUrl(this)">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top:30px;">
                                                <img src="{{ asset('upload/slider/default.jpg') ? url('upload/slider/default.jpg') : url('upload/slider/default.jpg') }}"
                                                    alt="" id="mainThmb" class="mt-2"
                                                    style="width: 473px;
                                                    height: 324px;">

                                                {{-- <img id="showImage" class="rounded"
                                                    src="{{ !empty($adminEdit->profile_photo) ? url('upload/admin_images/' . $adminEdit->profile_photo) : url('upload/no_image.jpg') }}"
                                                    alt="User Avatar"
                                                    style="width: 473px;
                                                  height: 310px;"> --}}
                                            </div>

                                        </div>
                                    </div>

                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-primary">Add Slider</button>
                                    </div>

                                </div>


                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>



    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(473).height(324);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
