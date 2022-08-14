@php
$tags = App\Models\Product::groupBy('product_tags_en')
    ->select('product_tags_en')
    ->get();
@endphp


<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product tags</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="tag-list">
            @foreach ($tags as $tag)
                <a class="item" title="{{ $tag->product_tags_en }}"
                    href="{{ url('product/tag', $tag->product_tags_en) }}">{{ str_replace(',', '', $tag->product_tags_en) }}</a>
            @endforeach
        </div>
        <!-- /.tag-list -->
    </div>
    <!-- /.sidebar-widget-body -->
</div>
