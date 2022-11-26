@extends('layouts.app')

@section('content')
    <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('images/front_end/slider/slides_2.jpg') }}" alt="Contact us Silde"
                        style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Contact Us</h3>
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
                <h1 class="contact-title">TELL US YOUR Query</h1>
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3">Message</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center">
                <h1 class="contact-title">CONTACT US</h1>
                <div class="contact-info">
                    <p style="line-height: 26px;">
                        {{ COMPANY_NAME }} Company Known For Seafood By Customers Around The World. We
                        Have Been In The Seafood Industry Last Year.</p>
                    <div class="contact-list-wrapper">
                        <div class="contact-list">
                            <i class="fa fa-fax"></i>
                            <span>
                                Address : {{ CONTACT_ADDRESS }}
                            </span>
                        </div>
                        <br>
                        <div class="contact-list">
                            <i class="fa fa-envelope-o"></i>
                            <span>
                                <a href="mailto:{{ CONTACT_EMAIL }}">{{ CONTACT_EMAIL }} </a>
                            </span>
                        </div>
                        <br>
                        <div class="contact-list">
                            <i class="fa fa-phone"></i>
                            <span><a href="tel:{{ CONTACT_NO }}">{{ CONTACT_NO }}</a></span>
                        </div>
                    </div>
                </div>
                <div class="working-time">
                    <h2>Working hours</h2>

                    <strong>Monday - Saturday: </strong>
                    <span> 10:00 AM - 7:00 PM </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
