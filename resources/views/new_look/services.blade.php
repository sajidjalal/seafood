@extends('new_look.app')


@section('content')
    <!-- banner -->
    <div class="banner" style="background-image: url(new_look/images/services.jpg);">
        <div class="banner-caption">
            <h2>Our Services</h2>
        </div>
    </div>
    <!-- /banner -->

    <!-- intro -->
    <section class="pad">
        <div class="container">
            <p class="text-center font-17">
                At Blue Waters, we adopt holistic 360-degree approach to finding out new products
                for the market and strongly strive to add value through unique products. Right from raw material procurement
                to packaging and distributing of products, BWG team ensures quality control on every stage of sourcing and
                delivery.
            </p>
            <p class="text-center font-17">BWG enables global food service to customers in streamlining their supply chain
                requirements of premium quality frozen seafood. Our legacy of more than two-decade experience in procurement
                is evident in customer satisfaction.</p>

            <p class="text-center font-17">We are known for good market intelligence and insights like the season,
                harvesting/landing of raw materials, international prices, exchange rates, and other factors, which will
                determine the product availability and prices in different countries. This allows the company to recommend
                the right solutions for its customers, covering the time, costs and lead time for imports. </p>
            <div class="row-flex ser-wrp">

                <div class="three-box">
                    <div class="ser-img">
                        <img src="{{ asset('new_look/images/ser1.jpg') }}"alt="">
                    </div>
                    <div class="ser-cnt">
                        <h3>SOURCING</h3>
                        <p>BWG serves as a reliable and exclusive marketing agent for the reputed manufacturers in Vietnam,
                            India, China, Indonesia, Thailand, etc. Our in-house team of experts has the right expertise to
                            source superior quality seafood </p><br><br><br>
                        <p>
                            <span class="link">
                                <a href="{{ route('sourcing') }}">Read More</a>
                            </span>

                        </p>
                    </div>

                </div>

                <div class="three-box">
                    <div class="ser-img">
                        <img src="{{ asset('new_look/images/ser2.jpg') }}" alt="">
                    </div>
                    <div class="ser-cnt">
                        <h3>QUALITY CONTROL</h3>
                        <p>BWG has a stringent audit and selection process for qualifying vendors. Every product sourced by
                            BWG passes through continuous quality control monitoring process. We clearly understand the
                            importance of Quality Control and our talented Quality </p><br><br><br>
                        <p>
                            <span class="link">
                                <a href="{{ route('quality-control') }}">Read More</a>
                            </span>
                        </p>
                    </div>

                </div>

                <div class="three-box">
                    <div class="ser-img">
                        <img src="{{ asset('new_look/images/ser3.jpg') }}" alt="">
                    </div>
                    <div class="ser-cnt">
                        <h3>SUPPLY CHAIN MANAGEMENT</h3>
                        <p>Based on customer's request, BWG provide solutions for customs clearance, warehousing, and local
                            delivery. We work closely with our clients to assess their unique supply chain requirements and
                            find the right solutions.</p><br><br><br>
                        <p>
                            <span class="link"><a href="{{ route('distribution') }}">Read
                                    More</a></span>

                        </p>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- /intro -->
@endsection
