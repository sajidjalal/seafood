@extends('new_look.app')
@section('content')
    <style>
        span.blue {
            color: #b6b2b2;
            font-size: 35px;
            font-weight: 700;
            line-height: 58px;
            margin-bottom: 30px;
        }

        span.red {
            color: red;
            font-size: 35px;
            font-weight: 700;
            line-height: 58px;
            margin-bottom: 30px;
        }
    </style>
    <!-- banner -->
    <div class="banner" style="background-image: url(new_look/images/about.jpg);">
        <div class="banner-caption">
            <h2>About Us</h2>
            <!-- <h4><a href="https://bluewatersllcdubai.com/">Home</a> | <span>About Us</span></h4>    -->
        </div>
    </div>
    <!-- /banner -->

    <!-- intro -->
    <section class="pad pad-bottom-0">
        <div class="container">
            <div class="two-col">
                <p class="hover-effect">
                    <img src="{{ asset('new_look/images/about.png') }}" alt="" />
                </p>
            </div>
            <div class="two-col last">
                <h5 class="hed-cap">{{ COMPANY_NAME }}</h5>
                <h2 class="heading-big" hidden>
                    Aiza Seafood
                </h2>

                <p>
                    <span class="blue"> Aiza Seafood </span>
                </p>

                <p class="font-17">
                    {{ COMPANY_NAME }} Company Known For Seafood By Customers Around The World. We Have Been In The Seafood
                    Industry Since 2022.We Are In The Business Of Seafood Sourcing, That Is Sourcing Various Fresh And
                    Frozen Seafoods To Our Clients In Europe, USA, Middle East, Vietnam, China, Thailand, Etc.
                </p>
                <p class="font-17">
                    We Source To The Global Market A Wide Range Of Seafood From India. We Understand And Fulfil The Client's
                    Need By Sourcing Them, The Best Of The Product Available From Our Country.
                </p>
                <p class="font-17">
                    We Are Here To Provide Consistent Service And There Is No Compromise At All On Quality. Through
                    Determination And Aggressive Negotiation, We Have Been Able To Successfully Secure Several Premium
                    Suppliers And Customers.
                </p>
            </div>
            <div class="msn-vsn-wrp">
                <div class="row-flex">
                    <div class="two-box">
                        <h2>OUR VISION</h2>
                        <p class="justify font-17">
                            To become an innovative and admired, frozen food solution provider, for its excellence and
                            integrity. Delighting customers and rewarding employees and shareholders.
                        </p>
                    </div>
                    <div class="two-box two-box-bg">
                        <h2>OUR MISSION</h2>
                        <p class="justify font-17">
                            To become a leading frozen seafood company covering by helping customers in sourcing and supply
                            chain management of frozen seafood products from across the world.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="light-blue abt-cnt">
            <div class="container">
                <p class="font-17">
                    The company has good market intelligence and insights like season, harvesting/landing of raw materials,
                    international prices, exchange rates and other factors, which will determine the product availability
                    and prices at different countries. This will allow the company to recommend the right solutions for its
                    customers covering the time, price, and lead time for imports.
                </p>
            </div>
        </div>
    </section>
    <!-- /intro -->
@endsection
