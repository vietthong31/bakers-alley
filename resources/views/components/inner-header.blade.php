@props(['innerTitle' => ''])

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{ $innerTitle }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Trang chủ</a> / <span>{{ $innerTitle }}</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
