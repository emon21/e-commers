@extends('frontend.main_master')
@section('title')
    My Order
@endsection
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

                <div class="col-md-10">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr style="background: #e2e2e2;">
                                    <td class="col-md-1">
                                        <label for=""> Date</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Total</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Payment</label>
                                    </td>


                                    <td class="col-md-2">
                                        <label for=""> Invoice</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> Order</label>
                                    </td>

                                    <td class="col-md-1">
                                        <label for=""> Action </label>
                                    </td>

                                </tr>


                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="col-md-1">
                                            <label for=""> {{ $order->order_date }}</label>
                                        </td>

                                        <td class="col-md-3">
                                            <label for=""> ${{ $order->amount }}</label>
                                        </td>


                                        <td class="col-md-3">
                                            <label for=""> {{ $order->payment_method }}</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for=""> {{ $order->invoice_no }}</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for="">
                                                <span class="badge badge-pill badge-warning"
                                                    style="background: #418DB9;">{{ $order->status }} </span>

                                            </label>
                                        </td>

                                        <td width="25%">
                                            <a href="{{ url('user/order-details', $order->id) }}"
                                                class="btn btn-sm btn-primary"><i class="fa fa-eye"></i>
                                                View</a>

                                            <a href="{{ url('user/invoice_download', $order->id) }}"
                                                class="btn btn-sm btn-danger"><i class="fa fa-download"
                                                    style="color: white;margin-top:5px;"></i> Invoice </a>

                                        </td>

                                    </tr>
                                @endforeach





                            </tbody>

                        </table>

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
