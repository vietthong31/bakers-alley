@props(['home' => false, 'pageTitle' => 'Bakery Shop'])

<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="/assets/dest/css/style.css">
    <link rel="stylesheet" href="/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="/assets/dest/css/huong-style.css">
</head>

<body>

    <x-header />

    @slot('message')
        {{ $slot }}
    @endslot

    @if ($home)
        <div class="rev-slider">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <div class="bannercontainer">
                        <div class="banner">
                            <ul>
                                <!-- THE FIRST SLIDE -->
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                        data-zoomstart="undefined" data-zoomend="undefined"
                                        data-rotationstart="undefined" data-rotationend="undefined"
                                        data-ease="undefined"
                                        data-bgpositionend="undefined" data-bgposition="undefined"
                                        data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                        data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                            data-bgposition="center center" data-bgrepeat="no-repeat"
                                            data-lazydone="undefined" src="assets/dest/images/slide/banner1.jpg"
                                            data-src="assets/dest/images/slide/banner1.jpg"
                                            style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide/banner1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>

                                </li>
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                        data-zoomstart="undefined" data-zoomend="undefined"
                                        data-rotationstart="undefined" data-rotationend="undefined"
                                        data-ease="undefined"
                                        data-bgpositionend="undefined" data-bgposition="undefined"
                                        data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                        data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                            data-bgposition="center center" data-bgrepeat="no-repeat"
                                            data-lazydone="undefined" src="assets/dest/images/slide/banner2.jpg"
                                            data-src="assets/dest/images/slide/banner2.jpg"
                                            style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide/banner2.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>

                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                        data-zoomstart="undefined" data-zoomend="undefined"
                                        data-rotationstart="undefined" data-rotationend="undefined"
                                        data-ease="undefined"
                                        data-bgpositionend="undefined" data-bgposition="undefined"
                                        data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                        data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                            data-bgposition="center center" data-bgrepeat="no-repeat"
                                            data-lazydone="undefined" src="assets/dest/images/slide/banner3.jpg"
                                            data-src="assets/dest/images/slide/banner3.jpg"
                                            style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide/banner3.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>

                                </li>

                                <li data-transition="boxfade" data-slotamount="20"
                                    class="active-revslide current-sr-slide-visible"
                                    style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                        data-zoomstart="undefined" data-zoomend="undefined"
                                        data-rotationstart="undefined" data-rotationend="undefined"
                                        data-ease="undefined"
                                        data-bgpositionend="undefined" data-bgposition="undefined"
                                        data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                        data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                            data-bgposition="center center" data-bgrepeat="no-repeat"
                                            data-lazydone="undefined" src="assets/dest/images/slide/banner4.jpg"
                                            data-src="assets/dest/images/slide/banner4.jpg"
                                            style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/slide/banner4.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!--slider-->
        </div>
    @endif

    {{ $slot }}

    {{-- @unless($home)
        {{ $innerHeader }}
    @endunless

    <div class="container">
        {{ $slot }}
    </div> <!-- .container --> --}}

    <div id="footer" class="color-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Instagram</h4>
                        <div id="beta-instagram-feed">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="widget">
                        <h4 class="widget-title">Thông tin</h4>
                        <div>
                            <ul>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web
                                        Design</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web
                                        development</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>
                                        Marketing</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a>
                                </li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>
                                        Resources</a></li>
                                <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>
                                        Illustrations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-10">
                        <div class="widget">
                            <h4 class="widget-title">Liên hệ</h4>
                            <div>
                                <div class="contact-info">
                                    <i class="fa fa-map-marker"></i>
                                    <p>90-92 Lê Thị Riêng, Bến Thành, Quận 1, SĐT: 0163 296 7751</p>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, sed accusantium
                                        repellendus quod, incidunt nobis cum in eveniet itaque voluptas obcaecati enim
                                        atque, quaerat a voluptatem. Ducimus fuga commodi sequi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Đăng ký nhận tin</h4>
                        <form action="#" method="post">
                            <input type="email" name="your_email">
                            <button class="pull-right" type="submit">Đăng ký <i
                                    class="fa fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #footer -->
    <div class="copyright">
        <div class="container">
            <p class="pull-left">Privacy policy. (&copy;) 2022</p>
            <p class="pull-right pay-options">
                <a href="#"><img src="/assets/dest/images/pay/master.jpg" alt="" /></a>
                <a href="#"><img src="/assets/dest/images/pay/pay.jpg" alt="" /></a>
                <a href="#"><img src="/assets/dest/images/pay/visa.jpg" alt="" /></a>
                <a href="#"><img src="/assets/dest/images/pay/paypal.jpg" alt="" /></a>
            </p>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .copyright -->


    <!-- include js files -->
    <script src="/assets/dest/js/jquery.js"></script>
    <script src="/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

    <script src="/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="/assets/dest/vendors/animo/Animo.js"></script>
    <script src="/assets/dest/vendors/dug/dug.js"></script>
    <script src="/assets/dest/js/scripts.min.js"></script>
    <script src="/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets/dest/js/waypoints.min.js"></script>
    <script src="/assets/dest/js/wow.min.js"></script>
    <!--customjs-->
    <script src="/assets/dest/js/custom2.js"></script>
    <script>
        $(document).ready(function($) {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 150) {
                    $(".header-bottom").addClass('fixNav')
                } else {
                    $(".header-bottom").removeClass('fixNav')
                }
            })
        })
    </script>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "109923881906167");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>
