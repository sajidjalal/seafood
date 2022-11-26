@extends('layouts.crm.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 col-xl-12 pe-lg-12 mb-3">
            <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-3">
                    <br>

                    <div class="card-body">
                        <div class="card-header bg-light d-flex justify-content-between">
                            <h5 class="mb-0">User Edit Information</h5>
                            <span class="fas fa-long-arrow-alt-left fa-2x" onclick="history.back()" title="{{GOBACK}}"></span>
                        </div>


                        <form action="{{ route('user-register') }}" id="user_register_form" method="post"
                            enctype="multipart/form-data" class="signup" autocomplete="off">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                        value="{{ $user_info->email }}" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control" id="password" name="password" type="password" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="confirm_password">Confirm Password</label>
                                    <input class="form-control" id="confirm_password" name="confirm_password"
                                        type="text" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="first_name">First Name</label>
                                    <input class="form-control" id="first_name" name="first_name" type="text"
                                        value="{{ $user_info->first_name }}" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="middle_name">Middle Name</label>
                                    <input class="form-control" id="middle_name" name="middle_name" type="text"
                                        value="{{ $user_info->middle_name }}" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="last_name">Last Name</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text"
                                        value="{{ $user_info->last_name }}" />
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="mobile_number">Mobile Number</label>
                                    <input class="form-control num_value" id="mobile_number" name="mobile_number"
                                        type="text" value="{{ $user_info->mobile_number }}" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label " for="pincode">Pin-Code</label>
                                    <input class="form-control num_value pincode" id="pincode" name="pincode"
                                        type="text" value="{{ $user_info->pincode }}" />
                                </div>
                                <div class="col-md-3">
                                    <label for="city">City</label>
                                    <select class="form-select js-choice_xxx city" id="city" size="1"
                                        name="city" required>
                                        <option value="" selected disabled>Select City</option>
                                        @foreach ($city as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select one</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="state">State</label>
                                    <select class="form-select js-choice_xxx state" id="state" size="1"
                                        name="state" required>
                                        <option value="" selected disabled>Select state</option>
                                        @foreach ($state as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select one</div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="address">Address</label>
                                    <input class="form-control" id="address" name="address" type="text"
                                        placeholder="1234 Main St" value="{{ $user_info->address }}" />
                                </div>
                            </div>
                            <br>

                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="hidden" name="id" id="id" value="{{ $user_info->id }}">
                                    <button class="btn btn-primary" id="btn_form_submit" type="submit">
                                        Update User</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#city').val('{{ $user_info->city }}');
            $('#state').val('{{ $user_info->state }}');
            $("#user_register_form").validate({
                ignore: ".ignore",
                onkeyup: false,
                rules: {
                    first_name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: "{{ route('is_email_exists') }}",
                            onkeyup: false,
                            type: "post",
                            headers: {
                                "X-CSRF-TOKEN": $("input[name=_token]").val()
                            },
                            data: {
                                email: function() {
                                    return $("#email").val();
                                },
                                id: function() {
                                    return $("#id").val();
                                },
                                role: '2'
                            },
                            complete: function(response) {
                                // if (response.responseJSON) {
                                //     $(".otp_code_class").show();
                                // } else {
                                //     $(".otp_code_class").hide();
                                // }
                            }
                        },


                    },
                    mobile_number: {
                        required: true,
                        number: true,
                    },
                    // city: {
                    //     required: true,
                    // },
                    // state: {
                    //     required: true,
                    // },
                    pincode: {
                        required: true,
                        number: true,
                    },


                },
                messages: {
                    confirm_password: {
                        equalTo: "Password and confirm password should be same",
                    },
                    mobile_number: {
                        required: "Please enter valied number only",
                    },
                    email: {
                        email: "Enter valid Email ID",
                        remote: "{0} email id exists"
                    },
                },
                highlight: function(element, errorClass, validClass) {
                    $(".remove_custome_div").remove();
                    $(element).parents("div.control-group").addClass(errorClass).removeClass(
                        validClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(".remove_custome_div").remove();
                    $(element).parents(".error").removeClass(errorClass).addClass(validClass);
                },
                errorPlacement: function(error, element) {
                    if (element.hasClass('custome_select2') && element.next('.select2-container')
                        .length) {
                        error.insertAfter(element.next('.select2-container'));
                    } else if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else if (element.prop('type') === 'radio' && element.parent('.radio-inline')
                        .length) {
                        error.insertAfter(element.parent().parent());
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
                            $("#" + submit_id).text("Please Wait...").prop('disabled',
                                true);
                        },
                        complete: function() {
                            $("#" + submit_id).text("Submit").prop('disabled', false);
                        },
                        success: function(response) {
                            Swal.fire({
                                title: "success",
                                text: response.message,
                                icon: "success",
                            });
                        },
                        error: function(xhr, status, error) {
                            var e = JSON.parse(xhr.responseText);
                            var errorCode = e.fields;
                            // append error message comes from server
                            for (x in errorCode) {
                                $("#" + x).after(
                                    "<div  class='error remove_custome_div'  id=" + x +
                                    "-error' class='error'>" + errorCode[x] + "</div>");
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

        });
    </script>
@endsection
