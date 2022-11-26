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
                    <form action="{{ route('contact-register') }}" class="wpcf7-form init" id="contact_us_form">
                        @csrf
                        <h2 class="subtittle">GET IN TOUCH WITH US</h2>
                        <div class="contact-form">
                            <div class="col smd2 gutter">
                                <span><i class="fa fa-user"></i>
                                    <span class="wpcf7-form-control-wrap Name">
                                        <input type="text" name="name" id="name" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fieldset"
                                            placeholder="Name" required>
                                    </span>
                                </span>
                            </div>

                            <div class="col smd2 gutter">
                                <span><i class="fa fa-envelope-open"></i>
                                    <span class="wpcf7-form-control-wrap email">
                                        <input type="email" name="email" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email fieldset"
                                            placeholder="Email Address" required>
                                    </span>
                                </span>
                            </div>

                            <div class="col smd2 gutter">
                                <span><i class="fa-solid fa-phone"></i>
                                    <span class="wpcf7-form-control-wrap Number">
                                        <input type="text" name="mobile_number" value=""
                                            class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number fieldset num_value"
                                            placeholder="Telephone/Mobile No" minlength="10" maxlength="13" required>
                                    </span>
                                </span>
                            </div>

                            <div class="col smd2 gutter">
                                <span><i class="fa-solid fa-newspaper"></i>
                                    <span class="wpcf7-form-control-wrap Subject">
                                        <input type="text" name="subject" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fieldset"
                                            placeholder="Subject" required/>
                                    </span>
                                </span>
                            </div>
                            <div class="col smd1 gutter">
                                <span><i class="fa fa-comment-dots"></i>
                                    <span class="wpcf7-form-control-wrap Message">
                                        <textarea name="message" cols="40" rows="4"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required fieldset fieldset1" aria-required="true"
                                            aria-invalid="false" placeholder="Type Your Message" required></textarea>
                                    </span>
                                </span>
                            </div>
                            <div class="col smd1 gutter text-center">
                                <span>
                                    <input type="submit" value="Send now" id="submit"
                                        class="wpcf7-form-control has-spinner wpcf7-submit sendbutton" />
                                </span>
                            </div>
                        </div>
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

    <script>
        $("#contact_us_form").validate({
            ignore: ".ignoreFIle",
            rules: {
                education: {
                    required: true,
                },
                education_copy: {
                    required: true,
                },
            },
            messages: {},
            highlight: function(element, errorClass, validClass) {
                $(".remove_custome_div").remove();
                $(element)
                    .parents("div.control-group")
                    .addClass(errorClass)
                    .removeClass(validClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(".remove_custome_div").remove();
                $(element)
                    .parents(".error")
                    .removeClass(errorClass)
                    .addClass(validClass);
            },
            errorPlacement: function(error, element) {
                if (element.hasClass('custome_select2') && element.next('.select2-container')
                    .length) {
                    error.insertAfter(element.next('.select2-container'));
                } else if (element.prop('type') === 'checkbox' || element.prop('type') ===
                    'radio') {
                    error.appendTo(element.parent().parent());
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                var fd = new FormData(form);

                var submit_id = (document.activeElement).id;

                $.ajax({
                    url: $(form).attr('action'),
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: "POST",
                    dataType: "json",
                    headers: {
                        "X-CSRF-TOKEN": $("input[name=_token]").val()
                    },
                    beforeSend: function() {
                        $("#" + submit_id).text("Please Wait..").prop('disabled', true);
                    },
                    complete: function() {
                        $("#" + submit_id).text("Submit").prop('disabled', false);
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Success",
                            text: response.message,
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then((result) => {
                            $("#refresh_document").click();
                            // location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        var e = JSON.parse(xhr.responseText);
                        var errorCode = e.fields;

                        // append error message comes from server
                        for (x in errorCode) {
                            $("#" + x).after(
                                "<div  class='error remove_custome_div'  id=" +
                                x +
                                "-error' class='error'>" +
                                errorCode[x] +
                                "</div>"
                            );
                        }
                        Swal.fire({
                            title: "Alert",
                            text: e.message,
                            icon: "warning",

                            confirmButtonText: "OK",
                        }).then((result) => {});
                    },
                });
            },
        });
        $(document).ready(function() {

        });
    </script>
@endsection
