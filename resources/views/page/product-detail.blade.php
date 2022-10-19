<x-layout :pageTitle="$product->name">
    <x-inner-header innerTitle="Sản phẩm" />
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/assets/dest/images/products/{{ $product->image }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{ $product->name }}</p>
                                <p class="single-item-price">
                                    <span>₫{{ $product->unit_price }}</span>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>
                            <div class="single-item-desc">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="space20">&nbsp;</div>
                            <p>Lựa chọn:</p>
                            <div class="single-item-options">
                                <select class="wc-select" name="color">
                                    <option>Số lượng</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <a class="add-to-cart" href="{{ route('cart.add', ['id' => $product->id]) }}"><i
                                        class="fa fa-shopping-cart"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Mô tả</a></li>
                            <li><a href="#tab-reviews">Reviews (0)</a></li>
                        </ul>
                        <div class="panel" id="tab-description">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="panel" id="tab-reviews">
                            <p>No Reviews</p>
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>Sản phẩm liên quan</h4>
                        <div class="row">
                            @foreach ($relatedProducts as $product)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html"><img
                                                    src="/assets/dest/images/products/{{ $product->image }}"
                                                    alt="" width="270" height="320"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>{{ $product->unit_price }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left"
                                                href="{{ route('cart.add', ['id' => $product->id]) }}"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="product.html">Chi tiết <i
                                                    class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
                <div class="col-sm-3 aside">
                    <div class="widget">
                        <h3 class="widget-title">Bán chạy</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach ($bestSellers as $product)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href="product.html"><img
                                                src="/assets/dest/images/products/{{ $product->image }}" alt=""
                                                width="55" height="58"></a>
                                        <div class="media-body">
                                            {{ $product->name }}
                                            <span class="beta-sales-price">{{ $product->price }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                    <div class="widget">
                        <h3 class="widget-title">Sản phẩm mới</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach ($newProducts as $product)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href="product.html"><img
                                                src="/assets/dest/images/products/{{ $product->image }}" alt=""
                                                width="55" height="58"></a>
                                        <div class="media-body">
                                            {{ $product->name }}
                                            <span class="beta-sales-price">{{ $product->unit_price }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                </div>
            </div>
        </div>
    </div> <!-- #content -->
</x-layout>
