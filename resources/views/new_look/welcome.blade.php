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
            {{-- <div class="why-chs-left">
                <ul class="data-progress">
                    <li>
                        <h2><span class="counting">17</span></h2> Years in Middle East
                    </li>
                    <li class="bg-light">
                        <h2><span class="counting">6</span></h2> GCC Countries
                    </li>
                    <li class="bg-light">
                        <h2><span class="counting">10</span>+</h2> Sourcing Countries
                    </li>
                    <li>
                        <h2><span class="counting">100</span>%</h2> Quality Products
                    </li>
                </ul>
            </div> --}}
            {{-- <div class="why-chs-right">
                <h2 class="heading">Why Choose Us</h2>
                <p>
                    {{ COMPANY_FULL_NAME }} has continuous feedback from sourcing locations with regard to availability,
                    season, market
                    prices, supply and demand which will enable us to help the customer to make right and profitable buying
                    decisions for their firms.
                </p>
                <div class="two-col">
                    <ul class="list">
                        <li>Quality Monitoring at all Stages of Production</li>
                        <li>Market Feedback for Buying Decisions.</li>
                        <li>Partial shipment assistance.</li>
                        <li>Mixed Products in a single container.</li>
                        <li>Available for Personnel meetings in G.C.C.</li>
                    </ul>
                </div>
                <div class="two-col last">
                    <ul class="list">
                        <li>Flexible payment terms.</li>
                        <li>Assured and timely delivery.</li>
                        <li>Sourcing from Right Locations.</li>
                        <li>Support for local sourcing in U.A.E.</li>
                        <li>Logistics and storage support in U.A.E.</li>
                        <li>Air shipment support in emergencies.</li>
                    </ul>
                </div>
                <p><span class="link"><a href="about-us">More Info</a></span></p>
            </div> --}}
        </div>
    </section> <!-- /why choose -->
    <!-- products -->
    <section class="product text-center">
        <div class="container">
            <h2 class="heading head-top-bg">Our Products</h2>
            <div class="owl-demo4 owl-top-pad">
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/1.Vannamei-Head-On-Shell-On-HOSO.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Vannamei Head On Shell On (HOSO)</h3>
                            <h5>Forms: Block frozen and Semi IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/2.Vannamei-Peeled-Deveined-Tail-On-PDTO.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Vannamei Peeled &#038; Deveined Tail On (PDTO)</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/29.-Tuna-Loins.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Tuna Loins</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/3.Vannamei-Peeled-Deveined-Tail-Off-PD.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Vannamei Peeled &#038; Deveined Tail Off (PD)</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/4.Vannamei-Peeled-Deveined-Tail-On-Cooked-PDTO-Cooked.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Vannamei Peeled &#038; Deveined Tail On Cooked (PDTO Cooked)</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/5.Head-On-Shell-On-Black-Tiger-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Head On Shell On Black Tiger</h3>
                            <h5>Forms: Block frozen and Semi IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/30.-Tuna-Saku.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Tuna Saku</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/6.Peeled-Deveined-Tail-On-Black-Tiger.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Peeled &#038; Deveined Tail On Black Tiger</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/7.Head-On-Sea-Tiger.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Head On Sea Tiger</h3>
                            <h5>Forms: Block frozen and IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/31.Soft-Shell-Crab.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Soft Shell Crab</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/Rock-Lobster.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Rock Lobster</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/9.Rock-Lobster-Tail.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Rock Lobster Tail</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/32.Crab-Meat.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Crab Meat</h3>
                            <h5>Forms: Pasteurised and chilled</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/10.Sand-Lobster.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Sand Lobster</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/33.King-Crab-Legs.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>King Crab Legs</h3>
                            <h5>Forms: Cooked & Raw IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/34.Canadian-Lobster.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Canadian Lobster</h3>
                            <h5>Forms: Cooked & Raw IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/35.Canadian-Lobster-Tails.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Canadian Lobster Tails</h3>
                            <h5>Forms: Cooked & Raw IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/36.Half-Shell-Mussels.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Half Shell Mussels</h3>
                            <h5>Forms: Raw IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/37.Scallops.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Scallops</h3>
                            <h5>Forms: Raw IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/24.Atlantic-Salmon-Whole-Gutted-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Atlantic Salmon Whole Gutted</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/25.Atlantic-Salmon-Fillets-2.jpg') }}" alt="">
                    </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Atlantic Salmon Fillets</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/26.Atlantic-Mackerel.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Atlantic Mackerel</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/27.Atlantic-Mackerel-Fillets.jpg') }}" alt="">
                    </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Atlantic Mackerel Fillets</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/28.Black-Cod-Headless-Gutted-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Black Cod Headless Gutted</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/28.Black-Cod-Headless-Gutted-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Milk Fish</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/18.Tilapia-Whole-IQF-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Tilapia Whole IQF</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/19.Tilapia-Fillets.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Tilapia Fillets</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/20.Seer-Fish.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Seer Fish</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/21.Basa-Fillets-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Basa Fillets</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/22.White-Pomfret.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>White Pomfret</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/23.Black-Pomfret.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Black Pomfret</h3>
                            <h5>Forms: Whole IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/11.Squid-Whole.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Squid Whole</h3>
                            <h5>Forms: Block frozen</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/12.Squid-Whole-Cleaned.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Squid Whole Cleaned</h3>
                            <h5>Forms: Block frozen & IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/13.Squid-Tubes-change-2.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Squid Tubes</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img src="{{ asset('new_look/images/product/14.Squid-Rings.jpg') }}"
                            alt=""> </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Squid Rings</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"> <img
                            src="{{ asset('new_look/images/product/15.Cuttlefish-Whole-Cleaned.jpg') }}" alt="">
                    </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Cuttlefish Whole Cleaned</h3>
                            <h5>Forms: Block frozen</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
                <div class="item">
                    <div class="pro-img"><img src="{{ asset('new_look/images/product/baby.jpg') }}" alt="">
                    </div>
                    <div class="pro-cent-wrp">
                        <div class="pro-cnt">
                            <h3>Baby Octopus Cleaned</h3>
                            <h5>Forms: IQF</h5>
                        </div> <span class="link"><a href="{{ route('products') }}">More Info</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /products -->
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
