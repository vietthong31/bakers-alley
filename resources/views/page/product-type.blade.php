<x-layout pageTitle="Sản phẩm">
    <x-inner-header innerTitle='Sản phẩm' />

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach ($types as $type)
                                <li><a href="/product-type/{{ $type->id }}">{{ $type->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>{{ $typeName }}</h4>
                            <div class="beta-products-details">
                                {{-- <p class="pull-left">{{ count($newProducts) }} found</p> --}}
                                <div class="clearfix"></div>
                            </div>

                            @foreach ($products as $product)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html"><img
                                                    src="/assets/dest/images/products/{{ $product->image }}"
                                                    height="180px"
                                                    alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>{{ $product->unit_price }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="product.html">Chi tiết<i
                                                    class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> <!-- .beta-products-list -->
                        <div class="pager">
                            {{ $products->links() }}
                        </div>

                        <div class="space50">&nbsp;</div>
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
</x-layout>
