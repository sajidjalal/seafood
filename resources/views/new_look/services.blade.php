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
                At {{ COMPANY_FULL_NAME }}, we adopt holistic 360-degree approach to finding out new products for the market
                and strongly strive to add value through unique products. Right from raw material procurement to packaging
                and
                distributing of products, Our team ensures quality control on every stage of sourcing and delivery.
            </p>

            <p class="text-center font-17">
                Aiza seafood enables global food service to customers in streamlining their supply chain requirements of
                premium quality frozen seafood. Our legacy of more than two-decade experience in procurement is evident in
                customer satisfaction.
            </p>

            <p class="text-center font-17">
                We are known for good market intelligence and insights like the season, harvesting/landing of raw materials,
                international prices, exchange rates, and other factors, which will determine the product availability and
                prices in different countries. This allows the company to recommend the right solutions for its customers,
                covering the time, costs and lead time for imports.
            </p>
            <div class="row-flex ser-wrp">

                <div class="three-box">
                    <div class="ser-img">
                        <img src="{{ asset('new_look/images/ser1.jpg') }}"alt="">
                    </div>
                    <div class="ser-cnt">
                        <h3>SOURCING</h3>
                        <p>
                            {{ COMPANY_FULL_NAME }} serves as a reliable and exclusive marketing agent for the reputed
                            manufacturers in
                            Vietnam, India, China, Indonesia, Thailand, etc. Our in-house team of experts has the right
                            expertise to source superior quality seafood for our reputed customers. We are committed to
                            solve the needs and pain points of B2B Customers. {{ COMPANY_FULL_NAME }} helps in strategies to
                            streamline
                            with cost effectiveness and lead-time efficiency. We helps with real-time inputs and
                            personalized services to match your business demand supply needs. The company can negotiate
                            favourable payment terms between the parties, which will facilitate business as well as help the
                            cash flow for the customer.</p><br><br><br>
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
                        <p>
                            {{ COMPANY_FULL_NAME }} has a stringent audit and selection process for qualifying vendors.
                            Every product sourced by passes through continuous quality control monitoring process. We
                            clearly understand the importance of Quality Control and our talented Quality Assurance officers
                            make sure that products are sourced from enterprises having HACCP, BRC, USFDA, ISO, and SQF
                            quality standards. At Aiza seafood, we cover online quality monitoring methods. We coordinate
                            with vendors to follow statutory specifications and ensure adherence to quality expectations and
                            standards of buyers.
                        </p><br><br><br>
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
                        <p>
                            Based on customer's request, Aiza seafood provides solutions for customs clearance and
                            warehousing. We work closely with our clients to assess their unique supply chain requirements
                            and find the right solutions. We strive for an uninterrupted movement of products in the supply
                            chain for the customer to maintain the right inventory levels. We also provide Supply Chain
                            Management support and solutions for Value added products, Private labels, and Consumer packaged
                            goods (CPG) etc.</p><br><br><br>
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
