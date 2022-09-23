<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="sajid jalal">

    <title>{{ $page_title ?? 'Seafood Company' }}</title>

    <!-- Favicon & Icons Start -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64 96x96"
        href="{{ asset('new_look/images/favicon/favicon.ico') }}" type="image/x-icon">
    <!-- Favicon & Icons End-->

    <!-- Custom Browser Color Start-->
    <meta name="theme-color" content="#1658a1">
    <meta name="msapplication-navbutton-color" content="#1658a1">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1658a1">
    <!-- Custom Browser Color End-->
    <!-- css -->
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/normalize.css') }} " />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/backToTop.css') }}" />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/bw.css') }}" />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/jetmenu.css') }}" />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/slider.css') }}" />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/carousel.css') }}" />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/hover-style.css') }}" />
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/easy-responsive-tabs.css') }}" />

    <!-- fonts -->
    <link rel="stylesheet" href=" {{ asset('new_look/css/theme/fontawesome.css') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />


    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='{{ asset('new_look/css/theme/block-library/style.min.css') }}' type='text/css' media='all' />

    {{-- <link rel="https://api.w.org/" href="https://bluewatersllcdubai.com/wp-json/" /> --}}

</head>

<body>
    <!--preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!--/preloader -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="{{ route('home-new') }}">
                    <img src="{{ asset('new_look/images/logo205_90.jpg') }}" width="205" height="90"
                        alt="{{ COMPANY_NAME }}">
                </a>
            </div>
            <div class="head-right">
                <div class="top-head">
                    <span class="call"><i class="fa-solid fa-phone"></i>
                        <a href="tel:{{ CONTACT_NO }}">
                            {{ CONTACT_NO }}
                        </a>
                    </span>
                    <span class="call mail">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:{{ CONTACT_EMAIL }}">
                            {{ CONTACT_EMAIL }}
                        </a>
                    </span>
                    <div class="social">
                        <a href="{{ ADMIN_WHATSAPP_LINK_WITH_MSG }}" class="whts" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="{{ SOCIAL_LINK_FACEBOOK }}" class="fb" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="{{ SOCIAL_LINK_LINKEDIN }}" class="likdn" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>

                        <a href="{{ SOCIAL_LINK_TWITTER }}" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                        <a href="{{ SOCIAL_LINK_YOUTUBE }}" class="ytb" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="menu">
                    <ul id="jetmenu" class="jetmenu">





                        <li class=""><a href="https://bluewatersllcdubai.com/">Home</a></li>
                        <li class=" "><a href="https://bluewatersllcdubai.com/about-us">About Us</a></li>
                        <li class=" "><a href="https://bluewatersllcdubai.com/services">Services</a></li>
                        <li class=" active  "><a href="https://bluewatersllcdubai.com/products">Products</a></li>
                        <li class=" "><a href="https://bluewatersllcdubai.com/buy">Buy</a></li>
                        <li class=" "><a href="https://bluewatersllcdubai.com/sell">Sell</a></li>
                        <li><a class="hvr-clr" href="https://bluewatersllcdubai.com/contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- main -->


    <!--====================  breadcrumb area ====================-->

    <main>


        @yield('content')



    </main>
    <!-- /main -->
    <!-- footer -->
    <footer>
        <div class="container">
            <h5> {{ CONTACT_ADDRESS }} </h5>
            <h4>Mob:
                <a href="tel:{{ CONTACT_NO }}">
                    {{ CONTACT_NO }}
                </a>
                | <a href="tel:{{ CONTACT_NO_2 }}"> {{ CONTACT_NO_2 }}</a>
                {{-- | Fax: xxxx x xx xxxx<br> --}}
                Email: <a href="mailto:{{ CONTACT_EMAIL }}">{{ CONTACT_EMAIL }}</a>
            </h4>
        </div>
        <div class="copy">
            Copyright © {{ date('Y') }} {{ COMPANY_NAME }} | All Rights Reserved
            {{-- | Powered by <a href="sajidjalal@gamil.com" target="_blank"> sajidjalal </a> --}}
        </div>
    </footer>
    <!-- /footer -->
    <!-- back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top -->

    <!-- slider -->
    <script src="{{ asset('new_look/js/theme/scripts.js') }}"></script>
    <script>
        setTimeout(init(), 3000);
    </script>
    <!-- Preloader -->
    <script src="{{ asset('new_look/js/theme/jquery.min.js') }}"></script>
    <script>
        //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({
                'overflow': 'visible'
            });
        })
        //]]>
    </script>
    <!-- sticky js -->
    <script src="{{ asset('new_look/js/theme/classie.js') }}"></script>
    <script>
        function init() {
            window.addEventListener('scroll', function(e) {
                var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 40,
                    header = document.querySelector("header");
                if (distanceY > shrinkOn) {
                    classie.add(header, "smaller");
                } else {
                    if (classie.has(header, "smaller")) {
                        classie.remove(header, "smaller");
                    }
                }
            });
        }
        window.onload = init();
    </script>
    <!--parallax -->
    <script src="{{ asset('new_look/js/theme/parallax/jquery.min.js') }}"></script>
    <script src="{{ asset('new_look/js/theme/parallax/jarallax.js') }}"></script>
    <script>
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!--scroller -->
    <!--<script src="js/carousel/jquery-1.9.1.min.js"></script>  -->
    <script src="{{ asset('new_look/js/theme/carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('new_look/js/theme/carousel/owl.js') }}"></script>

    <!--counter -->
    <!--<script src="js/counter/jquery.min.js"></script> -->
    <script src="{{ asset('new_look/js/theme/counter/waypoints.min.js') }}"></script>
    <script src="{{ asset('new_look/js/theme/counter/jquery.counterup.min.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counting').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
    <!-- menu -->
    <script src="{{ asset('new_look/js/theme/jetmenu/jetmenu.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            $().jetmenu();
        });
    </script>
    <!-- back to top -->

    <script src="{{ asset('new_look/js/theme/tab/easyResponsiveTabs.js') }}"></script>
    <script>
        function gototab(reload) {

            window.location.reload(true);
        }
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);

                    $name.text($tab.text());

                    $info.show();
                }
            });

            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="{{ asset('new_look/js/theme/backToTop.js') }}"></script>

    <script type='text/javascript' src='{{ asset('new_look/js/theme/vendor/regenerator-runtime.min.js') }}'
        id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='{{ asset('new_look/js/theme/vendor/wp-polyfill.min.js') }}' id='wp-polyfill-js'>
    </script>
</body>

</html>
