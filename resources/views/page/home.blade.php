<x-layout home=true>

    @if (session()->has('message'))
        <x-noti :message="session('message')" />
    @endif

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Sản phẩm mới</h4>
                            <div class="beta-products-details">
                                <p class="pull-left"><strong>Tìm thấy {{ $newProducts->total() }} sản phẩm</strong></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach ($newProducts as $product)
                                    <x-product-card :product=$product />
                                @endforeach
                            </div>
                            <div class="pager">
                                {{ $newProducts->links() }}
                            </div>
                        </div> <!-- .beta-products-list -->
                        <div class="space50">&nbsp;</div>
                        <div class="beta-products-list">
                            <h4>Sản phẩm khuyến mãi</h4>
                            <div class="beta-products-details">
                                <p class="pull-left"><strong>Tìm thấy {{ $saleProducts->total() }} sản phẩm</strong></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach ($saleProducts as $saleProduct)
                                    <x-product-card :product=$saleProduct />
                                @endforeach
                            </div>
                            <div class="pager">
                                {{ $saleProducts->links() }}
                            </div>
                            <div class="space40">&nbsp;</div>

                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div>
</x-layout>
