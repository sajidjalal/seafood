@extends('new_look.app')


@section('content')
    <!-- banner -->
    <div class="banner" style="background-image: url(new_look/images/contact.jpg);">
        <div class="banner-caption">
            <h2>Contact Us</h2>
        </div>
    </div>
    <!-- /banner -->

    <!-- intro -->
    <section class="pad">
        <div class="container">
            <aside>
                <div class="cnt-wrap">
                    <div class="icon_box"> <i class="fa fa-map-marker-alt"></i>
                        <div class="descripion">
                            <h5>Address</h5>
                            <p>
                                {{ CONTACT_ADDRESS }}
                            </p>
                        </div>
                    </div>
                    <div class="icon_box"> <i class="fa-solid fa-phone"></i>
                        <div class="descripion">
                            <h5>Contact Details</h5>
                            <p>
                                <a href="tel:{{ CONTACT_NO }} ">{{ CONTACT_NO }}, </a>
                                <a href="tel:{{ CONTACT_NO_2 }} ">{{ CONTACT_NO_2 }}, </a>
                            </p>
                        </div>
                    </div>
                    {{-- <div class="icon_box"> <i class="fa-solid fa-fax"></i>
                        <div class="descripion">
                            <h5>Fax</h5>
                            <p><a>+xxxxxxx</a>
                            </p>
                        </div>
                    </div> --}}
                    <div class="icon_box"> <i class="fas fa-envelope-open"></i>
                        <div class="descripion">
                            <h5>E-Mail Address</h5>
                            <p>
                                <a href="mailto:{{ CONTACT_EMAIL }}">{{ CONTACT_EMAIL }}</a>
                            </p>
                        </div>


                    </div>
                </div>
            </aside>
            <summary>
                <div role="form" class="wpcf7" id="wpcf7-f9-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/contact-us/#wpcf7-f9-o1" method="post" class="wpcf7-form init" novalidate="novalidate"
                        data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="9" />
                            <input type="hidden" name="_wpcf7_version" value="5.5.6" />
                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f9-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="0" />
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                            <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                        </div>
                        <h2 class="subtittle">GET IN TOUCH WITH US</h2>
                        <div class="contact-form">
                            <div class="col smd2 gutter"><span><i class="fa fa-user"></i><span
                                        class="wpcf7-form-control-wrap Name"><input type="text" name="Name"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fieldset"
                                            aria-required="true" aria-invalid="false" placeholder="Name" /></span></span>
                            </div>
                            <div class="col smd2 gutter"><span><i class="fa fa-envelope-open"></i><span
                                        class="wpcf7-form-control-wrap email"><input type="email" name="email"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email fieldset"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Email Address" /></span></span></div>
                            <div class="col smd2 gutter"><span><i class="fa-solid fa-phone"></i><span
                                        class="wpcf7-form-control-wrap Number"><input type="number" name="Number"
                                            value=""
                                            class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number fieldset"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Telephone No" /></span></span></div>
                            <div class="col smd2 gutter"><span><i class="fa-solid fa-newspaper"></i><span
                                        class="wpcf7-form-control-wrap Subject"><input type="text" name="Subject"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fieldset"
                                            aria-required="true" aria-invalid="false" placeholder="Subject" /></span></span>
                            </div>
                            <div class="col smd1 gutter"><span><i class="fa fa-comment-dots"></i><span
                                        class="wpcf7-form-control-wrap Message">
                                        <textarea name="Message" cols="40" rows="4"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required fieldset fieldset1" aria-required="true"
                                            aria-invalid="false">Message</textarea>
                                    </span></span></div>
                            <div class="col smd1 gutter"><span>
                                    <span class="wpcf7-form-control-wrap recaptcha"><span
                                            data-sitekey="6LdTJ9sfAAAAACZatmEN5LPbwVQPxUJVMHT2BqYf"
                                            class="wpcf7-form-control g-recaptcha wpcf7-recaptcha"></span>
                                        <noscript>
                                            <div class="grecaptcha-noscript">
                                                <iframe
                                                    src="https://www.google.com/recaptcha/api/fallback?k=6LdTJ9sfAAAAACZatmEN5LPbwVQPxUJVMHT2BqYf"
                                                    frameborder="0" scrolling="no" width="310" height="430">
                                                </iframe>
                                                <textarea name="g-recaptcha-response" rows="3" cols="40" placeholder="reCaptcha Response Here">
            </textarea>
                                            </div>
                                        </noscript>
                                    </span>
                                    <p>
                                </span></div>
                            <div class="col smd1 gutter text-center"><span><input type="submit" value="Send now"
                                        class="wpcf7-form-control has-spinner wpcf7-submit sendbutton" /></span></div>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </summary>
            <div class="map">
                <iframe src="{{ CONTACT_MAP }}" width="100%" height="450" style="border:0;" allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
    <!-- /intro -->
@endsection
