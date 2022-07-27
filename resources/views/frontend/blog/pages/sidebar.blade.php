<div class="col-md-3 sidebar">

    <div class="sidebar-module-container">
        <div class="search-area outer-bottom-small">
            <form>
                <div class="control-group">
                    <input placeholder="Type to search" class="search-field">
                    <a href="#" class="search-button"></a>
                </div>
            </form>
        </div>

        <div class="home-banner outer-top-n outer-bottom-xs">
            <img src="{{ asset('frontend') }}/assets/images/banners/LHS-banner.jpg" alt="Image">
        </div>
        <!-- =============================== CATEGORY =============================== -->


        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
            <h3 class="section-title">Category</h3>
            <div class="sidebar-widget-body m-t-10">
                <div class="accordion">
                    @foreach ($categories as $category)
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseOne{{ $category->id }}" data-toggle="collapse"
                                    class="accordion-toggle collapsed">
                                    {{ $category->category_name }}
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseOne{{ $category->id }}"
                                style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        @php
                                            $subcategories = App\Models\Blog\BlogSubCategory::Where('category_id', $category->id)
                                                ->orderBy('sub_category_name', 'ASC')
                                                ->get();
                                        @endphp
                                        @foreach ($subcategories as $subcategory)
                                            <li><a href="#">{{ $subcategory->sub_category_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->
                    @endforeach

                </div><!-- /.accordion -->
            </div><!-- /.sidebar-widget-body -->
        </div><!-- /.sidebar-widget -->


        <!-- =============================== CATEGORY : END =============================== -->





        <!-- =============================== PRODUCT TAGS =============================== -->

        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
            <h3 class="section-title">tab widget</h3>

            <ul class="nav nav-tabs">
                <li class="active"><a href="#popular" data-toggle="tab">popular post</a></li>
                <li><a href="#recent" data-toggle="tab">recent post</a></li>
            </ul>

            <div class="tab-content" style="padding-left:0">
                <div class="tab-pane active m-t-20" id="popular">

                    @foreach ($popularpost as $post)
                        <div class="blog-post inner-bottom-30 ">
                            <img class="img-responsive" src="{{ asset($post->blog_img) }}" alt=""></a>
                            <h4><a href="{{ url('blog/details', $post->id) }}">{{ $post->blog_title }}</a></h4>
                            <span class="review">6 Comments</span>
                            <span class="date-time">12/06/16</span>
                            <p> {!! $post->blog_description !!}</p>

                        </div>
                    @endforeach
                </div>

                <div class="tab-pane m-t-20" id="recent">

                    @foreach ($recentpost as $post)
                        <div class="blog-post inner-bottom-30 ">
                            <img class="img-responsive" src="{{ asset($post->blog_img) }}" alt=""></a>
                            <h4><a href="{{ url('blog/details', $post->id) }}">{{ $post->blog_title }}</a></h4>
                            <span class="review">6 Comments</span>
                            <span class="date-time">12/06/16</span>
                            <p> {!! $post->blog_description !!}</p>

                        </div>
                    @endforeach



                </div>
            </div>
        </div>

        <!-- =============================== PRODUCT TAGS : END =============================== -->

        <div class="sidebar-widget product-tag wow fadeInUp">
            <h3 class="section-title">Product tags</h3>
            <div class="sidebar-widget-body outer-top-xs">
                <div class="tag-list">
                    <a class="item" title="Phone" href="category.html">Phone</a>
                    <a class="item active" title="Vest" href="category.html">Vest</a>
                    <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                    <a class="item" title="Furniture" href="category.html">Furniture</a>
                    <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                    <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                    <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                    <a class="item" title="Toys" href="category.html">Toys</a>
                    <a class="item" title="Rose" href="category.html">Rose</a>
                </div><!-- /.tag-list -->
            </div><!-- /.sidebar-widget-body -->
        </div><!-- /.sidebar-widget -->
    </div>
</div>
