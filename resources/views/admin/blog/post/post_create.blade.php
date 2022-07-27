@extends('admin.admin_master')
@section('admin')
    <script src="{{ asset('backend') }}/js/jquery.min.js"></script>

    <div class="container-full">

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Post</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('post-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Category Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category_id" class="form-control">
                                                        <option value="" selected="" disabled="">Select Category
                                                        </option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>SubCategory Select <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="subcategory_id" class="form-control">
                                                        <option value="" selected="">Select SubCategory
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">

                                            <div class="form-group">
                                                <h5>Post Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="post_name" class="form-control"
                                                        placeholder="Post Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Post Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="post_desc" id="editor1" class="form-control" rows="10" cols="80"
                                                        placeholder="Slider Description"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Post Status :</label>
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
                                                    <input type="file" name="post_img" class="form-control"
                                                        onchange="mainThamUrl(this)">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top:30px;">
                                                <img src="{{ asset('upload/blog/default.svg') }}" alt=""
                                                    id="mainThmb" class="mt-2"
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
                                        <button type="submit" class="btn btn-primary">Add Post</button>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/blog/subcategory') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .sub_category_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
