@props(['product'])

<div class="col-sm-3">
    <div class="single-item">
        @if ($product->promotion_price > 0)
            <div class="ribbon-wrapper">
                <div class="ribbon sale">Sale</div>
            </div>
        @endif

        <div class="single-item-header">
            <a href="/product/{{ $product->id }}"><img
                    src="/assets/dest/images/products/{{ $product->image }}"
                    width="300" height="200"
                    alt=""></a>
        </div>
        <div class="single-item-body">
            <p class="single-item-title">{{ $product->name }}</p>
            <p class="single-item-price">
                <span
                    class="{{ $product->promotion_price > 0 ? 'flash-del' : '' }}">{{ $product->unit_price }}</span>
                <span
                    class="flash-sale">{{ $product->promotion_price > 0 ? $product->promotion_price : '' }}</span>
            </p>
        </div>
        <div class="single-item-caption">
            <a class="add-to-cart pull-left" href="{{ route('cart.add', ['id' => $product->id]) }}"><i
                    class="fa fa-shopping-cart"></i></a>
            <a class="beta-btn primary" href="/product/{{ $product->id }}">Chi tiết <i
                    class="fa fa-chevron-right"></i></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
