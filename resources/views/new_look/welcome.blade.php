@extends('new_look.app') @section('content')
    <div class="slider-wrap">
        <section id="q_slide" autoplay="" animate="" mousefollow="" parallax="" opacity=".3" class="q_slide"
            wait="false">
            <div class="q_slide-inner">
                <div class="slides">
                    <div class="slide is-loaded q_current" id="page-top-banner">
                        <div class="slide-content">
                            <div class="container">
                                <div class="caption" style="display: none">
                                    <h1 class="q_splitText" editor-binding="slider.title" index-order="i"><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">F</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">i</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">n</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">e</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">s</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">&nbsp;</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Q</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">u</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">a</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">l</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">i</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">y</span></h1>
                                    <div class="sep" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                    <h1 class="q_splitText" editor-binding="slider.title" index-order="i"
                                        style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">S</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">e</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">a</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">f</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">d</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">&nbsp;</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">P</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">r</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">d</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">u</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">c</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">s</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">.</span></h1>
                                    <div class="sep" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                    <!-- <a href="products.html" class="btn" editor-binding="slider.title" index-order="i">view details</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-wrapper">
                                <img src="{{ asset('new_look/images/banner_slider.jpg') }}" alt="" class="image">
                                {{-- <img src="{{ asset('new_look/images/product/Seafood-Wallpaper-Free.jpg') }}" alt=""
                                    class="image"> --}}
                            </div>
                        </div>
                        <div class="grad-btm"></div>
                    </div>
                    <div class="slide is-loaded" id="page-top-banner">
                        <div class="slide-content">
                            <div class="container">
                                <div class="caption">
                                    <h1 class="q_splitText" editor-binding="slider.title" index-order="i"><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">F</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">i</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">n</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">e</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">s</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">&nbsp;</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Q</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">u</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">a</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">l</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">i</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">y</span></h1>
                                    <div class="sep" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                    <h1 class="q_splitText" editor-binding="slider.title" index-order="i"
                                        style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">S</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">e</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">a</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">f</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">d</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">&nbsp;</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">P</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">r</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">d</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">u</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">c</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">s</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">.</span></h1>
                                    <div class="sep" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                    <!-- <a href="products.html" class="btn" editor-binding="slider.title" index-order="i">view details</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-wrapper">
                                <img src="{{ asset('new_look/images/product/slider1.jpg') }}" alt=""
                                    class="image">
                            </div>
                        </div>
                        <div class="grad-btm"></div>
                    </div>
                    <div class="slide is-loaded" id="page-top-banner">
                        <div class="slide-content">
                            <div class="container">
                                <div class="caption">
                                    <h1 class="q_splitText" editor-binding="slider.title" index-order="i"><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">F</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">i</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">n</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">e</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">s</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">&nbsp;</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">Q</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">u</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">a</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">l</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">i</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">y</span></h1>
                                    <div class="sep" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                    <h1 class="q_splitText" editor-binding="slider.title" index-order="i"
                                        style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">S</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">e</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">a</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">f</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">d</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">&nbsp;</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">P</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">r</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">o</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">d</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">u</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">c</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">t</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">s</span><span
                                            style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">.</span></h1>
                                    <div class="sep" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                    <!-- <a href="products.html" class="btn" editor-binding="slider.title" index-order="i">view details</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-wrapper">
                                <img src="{{ asset('new_look/images/product/slider2.jpg') }}" alt=""
                                    class="image">
                            </div>
                        </div>
                        <div class="grad-btm"></div>
                    </div>
                </div>
                <div class="pagination">
                    <div class="item q_current"> <span class="icon">1</span> </div>
                    <div class="item"> <span class="icon">2</span> </div>
                    <div class="item"> <span class="icon">3</span> </div>
                </div>
                <div class="arrows"> <a class="arrow prev q_magnet" friction=".3"> <span class="svg svg-arrow-left">
                            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26"
                                xml:space="preserve">
                                <path
                                    d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z">
                                </path>
                            </svg> <span class="alt sr-only"></span> </span> </a> <a class="arrow next q_magnet"
                        friction=".3"> <span class="svg svg-arrow-right"> <svg version="1.1" id="svg5-Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" width="10px" height="26px" viewBox="0 0 14 26"
                                enable-background="new 0 0 14 26" xml:space="preserve">
                                <path
                                    d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z">
                                </path>
                            </svg> <span class="alt sr-only"></span> </span> </a> </div>
            </div>
        </section>
    </div> <!-- intro -->
    <section class="intro">
        <div class="container">
            {{-- <div class="intro-left"> <img src="{{ asset('new_look/images/product/intro.png') }}" alt="" /> </div> --}}
            <div class="intro-left"> <img src="{{ asset('new_look/images/fresh-seafood-on-ice.jpg') }}" alt="" />
            </div>
            <div class="intro-right">
                <h5 class="hed-cap"> {{ COMPANY_NAME }} </h5>
                <h2 class="heading-big">{{ COMPANY_NAME }}</h2>
                <p class="font-17">
                    {{ COMPANY_FULL_NAME }} Company Known For Seafood By Customers Around The World. We Have Been In The
                    Seafood Industry Since 2022. We Are In The Business Of Seafood Sourcing, That Is Sourcing Various Fresh
                    And Frozen Seafoods To Our Clients In Europe, USA, Middle East, Vietnam, China, Thailand, Etc
                </p>
                <span class="link">
                    <a href="{{ route('about-us') }}">More Info</a>
                </span>
            </div>
        </div>
    </section> <!-- /intro -->
    <!-- why choose -->
    <section class="why-choose">
        <div class="container">
            <div class="why-sell-wrp" style="display: none">
                <div class="sell-box">
                    <h2> DO YOU WANT TO SELL YOUR PRODUCTS IN GCC MARKET</h2> <span class="link"><a href="sell">Click
                            Here</a></span>
                </div> <a href="#" class="cert-box" target="_blank">
                    <p> <img src="{{ asset('new_look/images/product/icon1.png') }}" alt=""> </p>
                    <h4>VIEW HACCP CERTIFICATE</h4>
                </a> <a href="#" class="cert-box loc-box" target="_blank">
                    <p> <img src="{{ asset('new_look/images/product/icon2.png') }}" alt=""> </p>
                    <h4>COMPANY PROFILE</h4>
                </a>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <br>
                    <h2 class="heading text-center">Why Choose Us</h2>
                    <p>
                        {{ COMPANY_FULL_NAME }} has continuous feedback from sourcing locations with regard to
                        availability,
                        season, market
                        prices, supply and demand which will enable us to help the customer to make right and profitable
                        buying
                        decisions for their firms.
                    </p>
                    <div class="two-col">
                        <ul class="list">
                            <li>Quality Monitoring at all Stages of Production</li>
                            <li>Market Feedback for Buying Decisions.
                            <li>
                            <li>Partial shipment assistance.</li>
                            <li>Mixed Products in a single container.</li>
                        </ul>
                    </div>
                    <div class="two-col last">
                        <ul class="list">
                            <li>Flexible payment terms.</li>
                            <li>Assured and timely delivery.</li>
                            <li>Sourcing from Right Locations.</li>
                        </ul>
                    </div>
                    <p class="text-center">
                        <span class="link">
                            <a href="{{ route('about-us') }}">More Info</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /why choose -->

    <!-- products -->
    <section class="product text-center">
        <div class="container">
            <h2 class="heading head-top-bg">Our Products</h2>
            <div class="owl-demo4 owl-top-pad">
                @foreach ($product_list as $key => $value)
                    <div class="item">
                        <div class="pro-img custome-product-img">
                            <img src="{{ asset($value->path) }}" alt="{{ $value->name }}">
                        </div>
                        <div class="pro-cent-wrp">
                            <div class="pro-cnt">
                                <h3> {{ $value->name }} </h3>
                                <h5>Forms: {{ $value->forms }}</h5>
                            </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /products -->

    <!-- quality -->
    <section class="qality-wrp">
        <div class="container">
            <div class="row-flex">
                <div class="three-box">
                    <div class="icon-qlt"> <img src="{{ asset('new_look/images/product/icon3.png') }}" alt="">
                    </div>
                    <h3>SOURCING</h3>
                    <p>
                    <p>We source seafood products from factories complying with international standards like BRC, USFDA,
                        ISO, and SQF.</p>
                    </p> <span class="link"> <a href="{{ route('services') }}">More Info</a> </span>
                </div>
                <div class="three-box">
                    <div class="icon-qlt"> <img src="{{ asset('new_look/images/product/icon4.png') }}" alt="">
                    </div>
                    <h3>QUALITY CONTROL</h3>
                    <p>
                    <p>Every product sourced by {{ COMPANY_FULL_NAME }} passes through continuous quality control
                        monitoring.</p>
                    </p> <span class="link"> <a href="{{ route('quality-control') }}">More Info</a> </span>
                </div>
                <div class="three-box">
                    <div class="icon-qlt"> <img src="{{ asset('new_look/images/product/icon5.png') }}" alt="">
                    </div>
                    <h3>SUPPLY CHAIN MANAGEMENT</h3>
                    <p>
                    <p>Based on the request, {{ COMPANY_FULL_NAME }} supports customers with customs clearance,
                        warehousing, and local
                        distributions.</p>
                    </p> <span class="link"> <a href="{{ route('distribution') }}">More Info</a> </span>
                </div>
            </div>
        </div>
    </section>
@endsection
