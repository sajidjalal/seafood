@extends('layouts.app')

@section('content')
    <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('images/front_end/slider/slides_2.jpg') }}" alt="About silde" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>About Us</h3>
                        {{-- <p>We had such a great time in LA!</p> --}}
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <div class="container" style="padding: 50px 10px 50px 10px">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="organic-about-img">
                    <img src="{{ asset('images/front_end/abtout_us.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center">
                <div class="organic-about-text">
                    <h4 style="font-size: 32px;">who we are</h4>
                    <p>
                        {{COMPANY_NAME}} Company Known For Seafood By Customers Around The World. We Have Been In The
                        Seafood Industry Since 2022. We Are In The Business Of Seafood Sourcing, That Is Sourcing arious
                        Fresh And Frozen Sea Foods To Our Clients In Europe, USA, Vietnam, China, Thailand, Etc.
                        <br>
                        <br>
                        We Source To The Global Market A Wide Range Of Seafood From India. We Understand And Fulfill
                        The Client's Need By Sourcing Them, The Best Of The Product Available From Our Country. We Are Here
                        To Provide Consistent Service And There Is No Compromise At All On Quality. Through Determination
                        And Aggressive Negotiation, We Have Been Able To Successfully Secure Several Premium Suppliers And
                        Customers.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding: 50px 10px 50px 10px">

        <div class="banner-area-fruits overflow-hidden">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-6">
                    <div class="banner-fruits">
                        <a href="#"><img src="{{ asset('images/front_end/ban2.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="banner-fruits">
                        <a href="#"><img src="{{ asset('images/front_end/ban1.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container" style="padding: 50px 10px 50px 10px">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="banner-text pt-130">
                    <h2 class="mt-4">
                        <span>Infrastructural Facility</span>
                    </h2>
                    <p>The company has developed an up-to-date supply chain including the in-house product R&amp;D
                        department, and warehousing facilities, alongside the close proximity to the fishing grounds, raw
                        seafood suppliers, and direct logistic providers. It helps us in delivering the 100% fresh and
                        unadulterated range of seafood in any quantity in a timely manner. Moreover, the seafood range is
                        cut and cleaned as per the requirements of clients and packed in the high-grade packaging.</p>




                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="banner-text pt-130">


                    <h2>
                        <span>Operational Excellence</span>
                    </h2>
                    <p>With a team that combines experience in the seafood industry and passion towards customer service, we
                        have become a right partner to put your faith in. We are committed to offering a wide range of fresh
                        and unadulterated seafood with quality, hygiene, and packaging that is unparalleled. Our aim is to
                        create an agreeable experience for our customers by executing prompt deliveries and providing best
                        customer service.</p>


                </div>
            </div>
        </div>
    </div>

    <style>
        .container .box {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 20px;
            transform-style: preserve-3d;
            perspective: 1000px;
            cursor: pointer;
        }

        .container .box .body {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: 0.9s ease;
        }



        .container .box .body .imgContainer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        }

        .container .box .body .imgContainer img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container .box .body .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #333;
            backface-visibility: hidden;
            transform-style: preserve-3d;
            transform: rotateY(180deg);
        }

        .container .box:hover .body {
            transform: rotateY(180deg);
        }

        .container .box .body .content div {
            transform-style: preserve-3d;
            padding: 20px;
            background: linear-gradient(45deg, #f1f1f1, #c5bd7b);
            transform: translateZ(100px);
        }
    </style>

    <div class="container d-flex align-items-center justify-content-center flex-wrap">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="body">
                        <div class="imgContainer">
                            <img src="{{ asset('images/male.jpg') }}" alt="">
                        </div>
                        <div class="content d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <h3 class="text-white fs-5">Hamid Abdullah</h3>
                                <p class="fs-6 text-white">
                                    Their Seafood quality is fresh and hygenic quality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="box">
                    <div class="body">
                        <div class="imgContainer">
                            <img src="{{ asset('images/female.jpg') }}" alt="">
                        </div>
                        <div class="content d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <h3 class="text-white fs-5">Swati Verma</h3>
                                <p class="fs-6 text-white">
                                    {{COMPANY_NAME}} is our partner and we are quite happy with the work. I see a great
                                    future for this company. Keep making happy clients.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="body">
                        <div class="imgContainer">
                            <img src="{{ asset('images/male.jpg') }}" alt="">
                        </div>
                        <div class="content d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <h3 class="text-white fs-5">Rakesh Shukla</h3>
                                <p class="fs-6 text-white">
                                    {{COMPANY_NAME}} provides a high standard of service. They are quick to address
                                    questions and concerns and produce quality work. We look forward to working with them in
                                    the future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
