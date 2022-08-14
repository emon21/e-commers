@extends('frontend.main_master');
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Blog Details</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-9">
                        <div class="blog-post wow fadeInUp">
                            <img class="img-responsive" src="{{ asset($post->blog_img) }}" alt="">
                            <h1>{{ $post->blog_title }}</h1>
                            <span class="author">John Doe</span>
                            <span class="review">7 Comments</span>
                            <span class="date-time">18/06/2016 11.30AM</span>
                            <p> {!! $post->blog_description !!}</p>

                            <div class="social-media">
                                <span>share post:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-rss"></i></a>
                                <a href="" class="hidden-xs"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="blog-post-author-details wow fadeInUp">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('frontend') }}/assets/images/testimonials/member3.png"
                                        alt="Responsive image" class="img-circle img-responsive">
                                </div>
                                <div class="col-md-10">
                                    <h4>John Doe</h4>
                                    <div class="btn-group author-social-network pull-right">
                                        <span>Follow me on</span>
                                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="twitter-icon fa fa-twitter"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="icon fa fa-facebook"></i>Facebook</a></li>
                                            <li><a href="#"><i class="icon fa fa-linkedin"></i>Linkedin</a></li>
                                            <li><a href=""><i class="icon fa fa-pinterest"></i>Pinterst</a></li>
                                            <li><a href=""><i class="icon fa fa-rss"></i>RSS</a></li>
                                        </ul>
                                    </div>
                                    <span class="author-job">Web Designer</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-review wow fadeInUp">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-review-comments">16 comments</h3>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <img src="{{ asset('frontend') }}/assets/images/testimonials/member1.png"
                                        alt="Responsive image" class="img-rounded img-responsive">
                                </div>
                                <div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">
                                    <div class="blog-comments inner-bottom-xs">
                                        <h4>Jone doe</h4>
                                        <span class="review-action pull-right">
                                            03 Day ago &sol;
                                            <a href=""> Repost</a> &sol;
                                            <a href=""> Reply</a>
                                        </span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                    <div class="blog-comments-responce outer-top-xs ">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <img src="{{ asset('frontend') }}/assets/images/testimonials/member2.png"
                                                    alt="Responsive image" class="img-rounded img-responsive">
                                            </div>
                                            <div class="col-md-10 col-sm-10 outer-bottom-xs">
                                                <div class="blog-sub-comments inner-bottom-xs">
                                                    <h4>Sarah Smith</h4>
                                                    <span class="review-action pull-right">
                                                        03 Day ago &sol;
                                                        <a href=""> Repost</a> &sol;
                                                        <a href=""> Reply</a>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <img src="{{ asset('frontend') }}/assets/images/testimonials/member3.png"
                                                    alt="Responsive image" class="img-rounded img-responsive">
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <div class=" inner-bottom-xs">
                                                    <h4>Stephen</h4>
                                                    <span class="review-action pull-right">
                                                        03 Day ago &sol;
                                                        <a href=""> Repost</a> &sol;
                                                        <a href=""> Reply</a>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <img src="{{ asset('frontend') }}/assets/images/testimonials/member4.png"
                                        alt="Responsive image" class="img-rounded img-responsive">
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="blog-comments inner-bottom-xs outer-bottom-xs">
                                        <h4>Saraha Smith</h4>
                                        <span class="review-action pull-right">
                                            03 Day ago &sol;
                                            <a href=""> Repost</a> &sol;
                                            <a href=""> Reply</a>
                                        </span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <img src="{{ asset('frontend') }}/assets/images/testimonials/member1.png"
                                        alt="Responsive image" class="img-rounded img-responsive">
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="blog-comment inner-bottom-xs">
                                        <h4>Mark Doe</h4>
                                        <span class="review-action pull-right">
                                            03 Day ago &sol;
                                            <a href=""> Repost</a> &sol;
                                            <a href=""> Reply</a>
                                        </span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </div>
                                <div class="post-load-more col-md-12"><a class="btn btn-upper btn-primary"
                                        href="#">Load more</a></div>
                            </div>
                        </div>
                        <div class="blog-write-comment outer-bottom-xs outer-top-xs">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Leave A Comment</h4>
                                </div>
                                <div class="col-md-4">
                                    <form class="register-form" role="form">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputName">Your Name
                                                <span>*</span></label>
                                            <input type="email" class="form-control unicase-form-control text-input"
                                                id="exampleInputName" placeholder="">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <form class="register-form" role="form">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Email Address
                                                <span>*</span></label>
                                            <input type="email" class="form-control unicase-form-control text-input"
                                                id="exampleInputEmail1" placeholder="">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <form class="register-form" role="form">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                                            <input type="email" class="form-control unicase-form-control text-input"
                                                id="exampleInputTitle" placeholder="">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <form class="register-form" role="form">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputComments">Your Comments
                                                <span>*</span></label>
                                            <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12 outer-bottom-small m-t-20">
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit
                                        Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- =============================== Sidebar Start =============================== -->

                    @include('frontend.blog.pages.sidebar')

                    <!-- =============================== Sidebar End =============================== -->

                </div>
            </div>
        </div>
    </div>
@endsection
