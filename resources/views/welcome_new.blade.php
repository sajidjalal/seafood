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
        <!-- banner -->
        <div class="banner"
            style="background-image: url(https://bluewatersllcdubai.com/wp-content/uploads/2022/03/products.jpg);">
            <div class="banner-caption">
                <h2>Products</h2>
                <!-- <h4><a href="https://bluewatersllcdubai.com/">Home</a> | <span>Products</span></h4>    -->
            </div>
        </div>
        <!-- /banner -->






        <!-- intro -->
        <section class="pad">
            <div class="container">

                <!-- tab-container -->
                <div class="tab-container">
                    <div id="verticalTab">
                        <ul class="resp-tabs-list">


                            <li>Crustaceans</li>

                            <li>Cephalopods</li>

                            <li>Tropical Fishes</li>

                            <li>Cold Water Fishes</li>

                            <li>Specialty Products</li>
                        </ul>
                        <!-- resp-tabs-container -->
                        <div class="resp-tabs-container">


                            <div>
                                <div class="row">
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/1.Vannamei-Head-On-Shell-On-HOSO.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Vannamei Head On Shell On (HOSO)</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Block frozen and Semi IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Litopeaneaus vannamei</h4>
                                                        <h4><b>Size:</b> 10/20, 20/30, 30/40, 40/50, 50/60, 60/70,
                                                            70/80, 80/110, 110/130</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg, 6 x 2 kg (in poly bag or duplex
                                                            box)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/2.Vannamei-Peeled-Deveined-Tail-On-PDTO.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Vannamei Peeled &#038; Deveined Tail On (PDTO)</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Litopeaneaus vannamei</h4>
                                                        <h4><b>Size:</b> 8/12, 11/15, 16/20, 21/25, 26/30, 31/40, 41/50,
                                                            51/60, 61/70, 71/90</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg bag, 5 x 2 kg bag (with or without
                                                            rider)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/3.Vannamei-Peeled-Deveined-Tail-Off-PD.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Vannamei Peeled &#038; Deveined Tail Off (PD)</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Litopeaneaus vannamei</h4>
                                                        <h4><b>Size:</b> 8/12, 11/15, 16/20, 21/25, 26/30, 31/40, 41/50,
                                                            51/60, 61/70, 71/90</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg bag, 5 x 2 kg bag (with or without
                                                            rider)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/4.Vannamei-Peeled-Deveined-Tail-On-Cooked-PDTO-Cooked.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Vannamei Peeled &#038; Deveined Tail On Cooked (PDTO Cooked)
                                                    </h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Litopeaneaus vannamei</h4>
                                                        <h4><b>Size:</b> 8/12, 11/15, 16/20, 21/25, 26/30, 31/40, 41/50,
                                                            51/60, 61/70, 71/90</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg bag, 5 x 2 kg bag (with or without
                                                            rider)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/5.Head-On-Shell-On-Black-Tiger-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Head On Shell On Black Tiger</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Block frozen and Semi IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Peneaus monodon</h4>
                                                        <h4><b>Size:</b> U/5, U/7, U/10, U/15, 10/20, 20/30, 30/40,
                                                            40/50</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg, 6 x 2 kg (in poly bag or duplex
                                                            box)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/6.Peeled-Deveined-Tail-On-Black-Tiger.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Peeled &#038; Deveined Tail On Black Tiger</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Peneaus monodon</h4>
                                                        <h4><b>Size:</b> 8/12, 11/15, 16/20, 21/25, 26/30, 31/40, 41/50,
                                                            51/60, 61/70, 71/90</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg bag, 5 x 2 kg bag (with or without
                                                            rider)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/7.Head-On-Sea-Tiger.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Head On Sea Tiger</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Block frozen and IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Peneaus monodon</h4>
                                                        <h4><b>Size:</b> U/5, U/7, U/10, U/15, 10/20, 20/30, 30/40,
                                                            40/50</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg, 6 x 2 kg (in poly bag or duplex
                                                            box)</h4>
                                                        <h4><b>Origin:</b> India / Vietnam</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/Rock-Lobster.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Rock Lobster</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Panulirus spp.</h4>
                                                        <h4><b>Size:</b> 200/300, 300/400. 400/500, 500/600. 600/700,
                                                            700/800, 800/900, 900/up</h4>
                                                        <h4><b>Packing:</b> 1 x 10kg</h4>
                                                        <h4><b>Origin:</b> India/ Oman</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/9.Rock-Lobster-Tail.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Rock Lobster Tail</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Panulirus spp.</h4>
                                                        <h4><b>Size:</b> U/1, 1/2, 2/4, 4/6, 6/8, 8/12</h4>
                                                        <h4><b>Packing:</b> 1 x 10kg</h4>
                                                        <h4><b>Origin:</b> India/ Oman</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/10.Sand-Lobster.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Sand Lobster</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Thenus spp.</h4>
                                                        <h4><b>Size:</b> 200/300, 300/400. 400/500, 500/600. 600/700,
                                                            700/800, 800/900, 900/up</h4>
                                                        <h4><b>Packing:</b> 1 x 10kg</h4>
                                                        <h4><b>Origin:</b> India/ Oman</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->





                                    </div>
                                </div>
                                <!-- /tab 01 -->
                            </div>
                            <div>
                                <div class="row">
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/11.Squid-Whole.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Squid Whole</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Block frozen</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Loligo spp</h4>
                                                        <h4><b>Size:</b> U/3, 3/6, 6/10, 10/20, 20/40, 40/60</h4>
                                                        <h4><b>Packing:</b> 6 x 2 kg Block</h4>
                                                        <h4><b>Origin:</b> India / China</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/12.Squid-Whole-Cleaned.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Squid Whole Cleaned</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Block frozen & IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Loligo spp</h4>
                                                        <h4><b>Size:</b> U/3, U/10, 10/20, 20/40, 40/60</h4>
                                                        <h4><b>Packing:</b> 6 x 2 kg Block</h4>
                                                        <h4><b>Origin:</b> India / China</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/13.Squid-Tubes-change-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Squid Tubes</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Loligo spp. & Todarodes pacificus
                                                        </h4>
                                                        <h4><b>Size:</b> U/3, U/10, 10/20, 20/40, 40/60</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> China/ India</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/14.Squid-Rings.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Squid Rings</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Loligo spp. & Todarodes pacificus
                                                        </h4>
                                                        <h4><b>Size:</b> 3-7 cm dia. Or as per customer requirement</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> China/ India</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/15.Cuttlefish-Whole-Cleaned.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Cuttlefish Whole Cleaned</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Block frozen</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Sepia spp</h4>
                                                        <h4><b>Size:</b> U/1, 1/2, 2/3, 3/6, 6/10, 10/20</h4>
                                                        <h4><b>Packing:</b> 6 x 2 kg Block</h4>
                                                        <h4><b>Origin:</b> India / China</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/baby.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Baby Octopus Cleaned</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Octopus spp</h4>
                                                        <h4><b>Size:</b> 5/15, 16/25, 26/40</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> India / China</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->





                                    </div>
                                </div>
                                <!-- /tab 01 -->
                            </div>
                            <div>
                                <div class="row">
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/17.Milk-Fish.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Milk Fish</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Chanos spp</h4>
                                                        <h4><b>Size:</b> 100/200, 200/300, 300/500, 500/700</h4>
                                                        <h4><b>Packing:</b> 1 x 10kg, 1 x 20kg</h4>
                                                        <h4><b>Origin:</b> Indonesia /China / Taiwan / India</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/18.Tilapia-Whole-IQF-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Tilapia Whole IQF</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Oreochromis spp</h4>
                                                        <h4><b>Size:</b> 200/300 Gr, 300/500 Gr, 500/800 Gr, Above 800
                                                            Gr</h4>
                                                        <h4><b>Packing:</b> 1 x 10kg, 1 x 20kg</h4>
                                                        <h4><b>Origin:</b> Indonesia /China/ Taiwan / India</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/19.Tilapia-Fillets.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Tilapia Fillets</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Oreochromis spp</h4>
                                                        <h4><b>Size:</b> 50/100, 100/200, 300/500</h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> Indonesia / China/ Taiwan / India</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/20.Seer-Fish.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Seer Fish</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Scomberomerus spp</h4>
                                                        <h4><b>Size:</b> 500/700, 700/1000, 1/2, 2/3, 3/5, 6/10, 10/20
                                                        </h4>
                                                        <h4><b>Packing:</b> 1 x 10kg, 1 x 20kg</h4>
                                                        <h4><b>Origin:</b> Indonesia/ India / China/ Taiwan</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/21.Basa-Fillets-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Basa Fillets</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Pangasius spp</h4>
                                                        <h4><b>Size:</b> 100/150,150/200,200/250,250/300,300/350 etc.
                                                        </h4>
                                                        <h4><b>Packing:</b> 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> Vietnam/ Indonesia/ Taiwan / India</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/22.White-Pomfret.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>White Pomfret</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Pampus argentus</h4>
                                                        <h4><b>Size:</b> 100/200, 200/300, 300/500, 500/700</h4>
                                                        <h4><b>Packing:</b> 1 x 10 kg, 1x 20 kg</h4>
                                                        <h4><b>Origin:</b> Indonesia / China / Taiwan /India/ Myanmar
                                                        </h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/23.Black-Pomfret.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Black Pomfret</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Whole IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Parastromatus niger</h4>
                                                        <h4><b>Size:</b> 100/200, 200/300, 300/500, 500/700</h4>
                                                        <h4><b>Packing:</b> 1 x 10 kg, 1x 20 kg</h4>
                                                        <h4><b>Origin:</b> Indonesia / China / Taiwan /India/ Myanmar
                                                        </h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->





                                    </div>
                                </div>
                                <!-- /tab 01 -->
                            </div>
                            <div>
                                <div class="row">
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/24.Atlantic-Salmon-Whole-Gutted-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Atlantic Salmon Whole Gutted</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Salmo salar</h4>
                                                        <h4><b>Size:</b> 1/2, 3/4, 4/6 kg</h4>
                                                        <h4><b>Packing:</b> 1 x 10kg, 1 x 20kg</h4>
                                                        <h4><b>Origin:</b> Norway</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/25.Atlantic-Salmon-Fillets-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Atlantic Salmon Fillets</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Salmo salar</h4>
                                                        <h4><b>Size:</b> 1/2, 3/4, 4/6</h4>
                                                        <h4><b>Packing:</b> 10 kg cartons, 20 kg cartons</h4>
                                                        <h4><b>Origin:</b> Norway</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/26.Atlantic-Mackerel.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Atlantic Mackerel</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Scomber scomberus</h4>
                                                        <h4><b>Size:</b> 100/200, 200/300, 400/600, 500/700, 800/1000
                                                        </h4>
                                                        <h4><b>Packing:</b> 1 x 10 kg, 1x 20 kg</h4>
                                                        <h4><b>Origin:</b> Norway</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/27.Atlantic-Mackerel-Fillets.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Atlantic Mackerel Fillets</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Scomber scomberus</h4>
                                                        <h4><b>Size:</b> 100/150,150/200,200/250,250/300,300/350 etc.
                                                        </h4>
                                                        <h4><b>Packing:</b> 10 x 1kg</h4>
                                                        <h4><b>Origin:</b> Norway</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/28.Black-Cod-Headless-Gutted-2.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Black Cod Headless Gutted</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Anoplopoma fimbria</h4>
                                                        <h4><b>Size:</b> 1/2, 3/4, 4/6 etc.</h4>
                                                        <h4><b>Packing:</b> </h4>
                                                        <h4><b>Origin:</b> Norway</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->





                                    </div>
                                </div>
                                <!-- /tab 01 -->
                            </div>
                            <div>
                                <div class="row">
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/29.-Tuna-Loins.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Tuna Loins</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Thunnus albacares</h4>
                                                        <h4><b>Size:</b> 1/2, 2/3, 3/5, 5/7, 7/10 Kg</h4>
                                                        <h4><b>Packing:</b> 1 x 10 kg, 10 x 1kg</h4>
                                                        <h4><b>Origin:</b> India / Vietnam / Indonesia /Taiwan/ Maldives
                                                        </h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/30.-Tuna-Saku.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Tuna Saku</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Thunnus albacares</h4>
                                                        <h4><b>Size:</b> M (5 - 8 cm), L (8 - 15 cm), H (1 - 2 cm)</h4>
                                                        <h4><b>Packing:</b> 1 x 10 kg, 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> India / Vietnam / Indonesia / Taiwan/
                                                            Maldives</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/31.Soft-Shell-Crab.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Soft Shell Crab</h3>
                                                    <h3></h3>
                                                    <h5>Forms: IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Scylla serrata</h4>
                                                        <h4><b>Size:</b> 60/80, 80/100, 100/120, 120/150 g</h4>
                                                        <h4><b>Packing:</b> 1 x 10 kg, 10 x 1 kg</h4>
                                                        <h4><b>Origin:</b> India / Myanmar / Indonesia / Thailand</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/32.Crab-Meat.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Crab Meat</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Pasteurised and chilled</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Portunus pelagicus</h4>
                                                        <h4><b>Size:</b> Colossal, Jumbo, Super, Claw etc.</h4>
                                                        <h4><b>Packing:</b> 454 g(1 lbs) cans, 500g vaccuum pouches</h4>
                                                        <h4><b>Origin:</b> Indonesia /India / Myanmar / Thailand</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/33.King-Crab-Legs.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>King Crab Legs</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Cooked & Raw IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Paralithoides spp</h4>
                                                        <h4><b>Size:</b> 6/9, 9/12, 12/14, 14/17</h4>
                                                        <h4><b>Packing:</b> 10 lbs, 20 lbs cartons</h4>
                                                        <h4><b>Origin:</b> USA /Canada/ Russia</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/34.Canadian-Lobster.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Canadian Lobster</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Cooked & Raw IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Homarus americanus</h4>
                                                        <h4><b>Size:</b> 300/350, 350/400, 400/450, 450/500, 500/600,
                                                            600/up</h4>
                                                        <h4><b>Packing:</b> 10 lbs cartons</h4>
                                                        <h4><b>Origin:</b> USA /Canada</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/35.Canadian-Lobster-Tails.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Canadian Lobster Tails</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Cooked & Raw IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Homarus americanus</h4>
                                                        <h4><b>Size:</b> All available sizes</h4>
                                                        <h4><b>Packing:</b> 10 lbs cartons</h4>
                                                        <h4><b>Origin:</b> USA /Canada</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->







                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/36.Half-Shell-Mussels.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Half Shell Mussels</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Raw IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Perna spp</h4>
                                                        <h4><b>Size:</b> All available sizes</h4>
                                                        <h4><b>Packing:</b> 10 lbs cartons</h4>
                                                        <h4><b>Origin:</b> New Zealand</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->




                                    </div>
                                    <div class="row">



                                        <!-- tab 01 -->

                                        <div class="pro-inn-wrp">
                                            <div class="pro-img"><img
                                                    src="https://bluewatersllcdubai.com/wp-content/uploads/2022/06/37.Scallops.jpg"
                                                    alt=""></div>
                                            <div class="pro-cent-wrp">
                                                <div class="pro-cnt">
                                                    <h3>Scallops</h3>
                                                    <h3></h3>
                                                    <h5>Forms: Raw IQF</h5>
                                                    <div class="hide-cont">
                                                        <h4><b>Scientific name:</b> Placopecten magellanicus</h4>
                                                        <h4><b>Size:</b> All available sizes</h4>
                                                        <h4><b>Packing:</b> 5 lbs pouches</h4>
                                                        <h4><b>Origin:</b> USA/ Canada</h4>
                                                    </div>
                                                </div>
                                                <i class="fa-solid fa-arrow-down-long"></i>
                                            </div>
                                        </div>

                                        <!-- /tab 01 -->





                                    </div>
                                </div>
                                <!-- /tab 01 -->
                            </div>


                            <!-- /resp-tabs-container -->
                        </div>
                    </div>
                    <!-- tab-container -->
                </div>

        </section>
        <!-- /intro -->
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
