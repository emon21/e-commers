@php
$categories = App\Models\Category::orderBy('category_name_en', 'ASC')->get();
@endphp


<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @foreach ($categories as $category)
                <li class="dropdown menu-item">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon {{ $category->category_icon }}"
                            aria-hidden="true"></i>{{ $category->category_name_en }}</a>

                    <ul class="dropdown-menu mega-menu">

                        <li class="yamm-content">
                            <div class="row">
                                @php
                                    $subcategories = App\Models\SubCategory::Where('category_id', $category->id)
                                        ->orderBy('subcategory_name_en', 'ASC')
                                        ->get();
                                @endphp

                                @foreach ($subcategories as $sub)
                                    <div class="col-sm-12 col-md-3">
                                        <a
                                            href="{{ url('subcategory/product/' . $sub->id . '/' . $sub->subcategory_slug_en) }}">
                                            <h2 class="title">{{ $sub->subcategory_name_en }}
                                            </h2>
                                        </a>

                                        @php
                                            
                                            $subsubcategories = App\Models\SubSubCategory::Where('subcategory_id', $sub->id)
                                                ->orderBy('sub_subcategory_name_en', 'ASC')
                                                ->get();
                                        @endphp

                                        <ul class="links list-unstyled">


                                            @foreach ($subsubcategories as $subsub)
                                                <li><a href="{{ url('subsubcategory/product/' . $subsub->id . '/' . $subsub->sub_subcategory_slug_en) }}">{{ $subsub->sub_subcategory_name_en }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                <!-- /.col -->

                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- /.yamm-content -->
                    </ul>
                    <!-- /.dropdown-menu -->
                </li>
            @endforeach
            <!-- /.menu-item -->

        </ul>
        <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
</div>
<!-- /.side-menu -->
