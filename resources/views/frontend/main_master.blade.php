<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/blue.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/rateit.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap-select.min.css">


    <!-- Toaser  Css -->
    <link rel="stylesheet" href="{{ asset('toastr') }}/toastr.min.css">


    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Sweet Alert css-->
    <link rel="stylesheet" href="{{ asset('swal') }}/sweetalert2.min.css">

    <!-- Custom Css File -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.css">

</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('frontend.pages.header')

    <!-- ============================================== HEADER : END ============================================== -->
    @yield('content')

    <!-- /#top-banner-and-menu -->

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.pages.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/echo.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-slider.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/js/lightbox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/scripts.js"></script>
    <!-- Sweet Alert js -->
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="{{ asset('swal') }}/sweetalert2.all.min.js"></script>

    <!-- Toast Notification Alert -->
    <script src="{{ asset('toastr') }}/toastr.min.js"></script>
    {{-- {!! Toastr::message() !!} --}}
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    brake;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    brake;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    brake;

                case 'error':
                    toastr.danger("{{ Session::get('message') }}");
                    brake;

            }
        @endif
    </script>

    <!-- Add to Cart Product Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex justify-content-between mx-auto">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><span id="pname"></span> </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span></button> --}}
                    </div>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">

                                <img src=" " class="card-img-top" alt="..."
                                    style="height: 200px; width: 180px;" id="pimage">

                            </div>

                        </div><!-- // end col md -->


                        <div class="col-md-4">

                            <ul class="list-group">
                                <li class="list-group-item">Product Price: <strong class="text-danger">$<span
                                            id="pprice"></span></strong>
                                    <del id="oldprice">$</del>

                                    {{-- <li class="list-group-item">Product Price: <strong id="price"></strong> </li> --}}
                                <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
                                <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
                                <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
                                {{-- <li class="list-group-item">Stock</li> --}}
                                <li class="list-group-item">Stock: <span class="badge badge-pill badge-success"
                                        id="aviable" style="background: green; color: white;"></span>
                                    <span class="badge badge-pill badge-danger" id="stockout"
                                        style="background: red; color: white;"></span>

                                </li>
                            </ul>

                        </div><!-- // end col md -->


                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="color">Choose Color</label>
                                <select class="form-control" id="color" name="color">


                                </select>
                            </div> <!-- // end form group -->

                            <div class="form-group" id="sizeArea">
                                <label for="size">Choose Size</label>
                                <select class="form-control" id="size" name="size">
                                    <option>1</option>

                                </select>
                            </div> <!-- // end form group -->

                            <div class="form-group">
                                <label for="qty">Quantity</label>
                                <input type="number" class="form-control" id="qty" value="1"
                                    min="1">
                            </div> <!-- // end form group -->

                            <input type="hidden" id="product_id">
                            <button type="submit" class="btn btn-primary mb-2" onclick="addToCart()">Add to
                                Cart</button>

                        </div> <!-- // end row -->




                    </div> <!-- // end modal Body -->

                </div>
            </div>

        </div>
        <!-- End Add to Cart Product Modal -->

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            // Start Product View with Modal

            function productView(id) {
                // alert(id)
                $.ajax({
                    type: 'GET',
                    url: '/product/view/modal/' + id,
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data)

                        $('#pname').text(data.product.product_name_en);
                        $('#price').text(data.product.selling_price);
                        $('#pcode').text(data.product.product_code);
                        $('#pcategory').text(data.product.category.category_name_en);
                        $('#pbrand').text(data.product.brand.brand_name_en);
                        $('#pimage').attr('src', '/' + data.product.product_thambnil);

                        $('#product_id').val(id);
                        $('#qty').val(1);

                        // Product Price 
                        if (data.product.discount_price == null) {

                            $('#pprice').text('');
                            $('#oldprice').text('');
                            $('#pprice').text(data.product.selling_price);
                        } else {
                            $('#pprice').text(data.product.discount_price);
                            $('#oldprice').text(data.product.selling_price);
                        } // end prodcut price 

                        // Start Stock opiton
                        if (data.product.product_qty > 0) {
                            $('#aviable').text('');
                            $('#stockout').text('');
                            $('#aviable').text('aviable');
                        } else {
                            $('#aviable').text('');
                            $('#stockout').text('');
                            $('#stockout').text('stockout');
                        } // end Stock Option 


                        //color

                        $('select[name="color"]').empty();
                        $.each(data.color, function(key, value) {
                            $('select[name="color"]').append('<option value=" ' + value + ' ">' + value +
                                ' </option>')
                        }) // end color

                        //size

                        $('select[name="size"]').empty();
                        $.each(data.size, function(key, value) {
                            $('select[name="size"]').append('<option value=" ' + value + ' ">' + value +
                                ' </option>')
                            if (data.size == "") {
                                $('#sizeArea').hide();
                            } else {
                                $('#sizeArea').show();
                            }
                        }) // end size
                    }
                })

            }
            // End Product View with Modal 


            // Start Add To Cart Product 

            function addToCart() {
                var id = $('#product_id').val();
                var product_name = $('#pname').text();
                var color = $('#color option:selected').text();
                var size = $('#size option:selected').text();
                var quantity = $('#qty').val();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data: {
                        color: color,
                        size: size,
                        quantity: quantity,
                        product_name: product_name
                    },
                    url: "/cart/data/store/" + id,
                    success: function(data) {
                        miniCart()
                        $('#closeModel').click();
                        // console.log(data)

                        //Start Message

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                title: data.error
                            })

                        }

                        //End Message

                    }
                })
            }


            // End Add To Cart Product
        </script>

        <script type="text/javascript">
            function miniCart() {
                $.ajax({
                    type: 'GET',
                    url: '/product/mini/cart',
                    dataType: 'json',
                    success: function(response) {
                        //  console.log(response)

                        $('span[id="CartSubTotal"]').text(response.cartTotal);
                        $('#cartQty').text(response.cartQty);

                        var miniCart = ""
                        $.each(response.carts, function(key, value) {
                            miniCart += `<div class="cart-item product-summary">
                        <div class="row">
                          <div class="col-xs-4">
                             <div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
                          </div>
                          <div class="col-xs-7">
                            <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                            <div class="price">${value.price} * ${value.qty}</div>
                          </div>
                          <div class="col-xs-1 action">
                             <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button>
                           </div>
                        </div>
                      </div>
                      <!-- /.cart-item -->
                      <div class="clearfix"></div>
                      <hr>`
                        });

                        $('#miniCart').html(miniCart);
                    }
                });
            }
            miniCart();

            // Mini Cart Remove start

            function miniCartRemove(rowId) {
                $.ajax({
                    type: 'GET',
                    url: '/minicart/product-remove/' + rowId,
                    dataType: 'json',
                    success: function(data) {
                        miniCart();
                        // Start Message 
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })
                        } else {
                            Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                        }
                        // End Message 
                    }
                });
            }

            // Mini Cart Remove End
        </script>


        <!--  //Add wishlist page start// -->

        <script type="text/javascript">
            function addToWishList(product_id) {
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "/add-to-wishlist/" + product_id,
                    success: function(data) {

                        //Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success
                            })
                        } else {

                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error
                            })

                        }

                        //End Message
                    }
                })
            }
        </script>

        <!--  //Add wishlist page end// -->


        <!--  //load wishlist product start -->

        <script type="text/javascript">
            function Wishlist() {
                $.ajax({
                    type: 'GET',
                    url: '/user/get-wishlist-product',
                    dataType: 'json',
                    success: function(response) {

                        var rows = ""

                        $.each(response, function(key, value) {
                            rows += `<tr>
                              <td class="col-md-2">
                                  <img src="/${value.product.product_thambnil}" alt="imga">
                              </td>
                              <td class="col-md-7">
                                  <div class="product-name"><a href="#">${value.product.product_name_en}</a></div>

                                  <div class="price">

                                    ${value.product.discount_price == null
                                       ? `${value.product.selling_price}`
                                       :
                                       `${value.product.discount_price} <span>${value.product.selling_price}</span>`
                                   }
                                  </div>
                              </td>
                              <td class="col-md-2">
                                 <button class="btn btn-primary icon" type="button"
                                 title="Add Cart" data-toggle="modal"
                                 data-target="#exampleModal" id="${value.product_id}"
                                 onclick="productView(this.id)">
                                 Add To Cart
                             </button>
                              </td>
                              <td class="col-md-1 close-btn">
                                  <button id="${value.id}"onclick="wishlistRemove(this.id)"><i class="fa fa-times"></i></button>
                              </td>
                          </tr>`
                        });

                        $('#Wishlist').html(rows);
                    }
                });
            }
            Wishlist();


            // wishlist Remove start// 


            function wishlistRemove(id) {
                $.ajax({
                    type: 'GET',
                    url: '/user/wishlist-remove/' + id,
                    dataType: 'json',
                    success: function(data) {
                        Wishlist();

                        // Start Message 
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',

                            showConfirmButton: false,
                            timer: 3000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: data.success
                            })
                        } else {
                            Toast.fire({
                                type: 'error',
                                icon: 'error',
                                title: data.error
                            })
                        }
                        // End Message 

                    }
                });
            }


            // wishlist Remove End
        </script>

        <!-- //load wishlist product end -->


</body>

</html>
