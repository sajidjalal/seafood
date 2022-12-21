@extends('layouts.crm.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 col-xl-12 pe-lg-12 mb-3">
            <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-3">
                    <br>

                    <div class="card-body">
                        <div class="card-header bg-light d-flex justify-content-between">
                            <h5 class="mb-0">Compose Mail</h5>
                            <span class="fas fa-long-arrow-alt-left fa-2x" onclick="history.back()"
                                title="{{ GOBACK }}"></span>
                        </div>

                        <form action="{{ route('mail-send') }}" id="user_send_mail_form" method="post"
                            enctype="multipart/form-data" class="signup" autocomplete="off">
                            @csrf

                            <br>
                            <div class="row g-3">
                                {{-- <div class="col-12">
                                    <label for="user_list">Select User</label>
                                    <select class="form-select js-choice_xxx" id="user_list" multiple="multiple"
                                        name="user_list[]" required="required">
                                        <option value="" selected disabled>Select User...</option>
                                        @foreach ($user_list as $row)
                                            <option value="{{ $row->id }}">{{ $row->text }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="col-12">
                                    <label for="user_list">Enter User List
                                        <span style="color: red; font-size: 10px">Please enter email in comma separated
                                            format</span>
                                    </label>
                                    <textarea class="form-select" name="user_list" id="user_list" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="user_list">Mail Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>

                                </div>

                                <div class="col-12">
                                    <label class="form-label " for="message">Write your Mail</label>
                                    <textarea id="mail_body" name="mail_body" class="form-control"></textarea>
                                </div>

                                <div class="col-12">
                                    <input class="form-label " type="file" name="attachment_file" id="attachment_file">
                                </div>
                            </div>
                            <br>

                            <div class="row g-3">
                                <div class="col-12">
                                    <button class="btn btn-primary" id="btn_form_submit" type="submit">Send Mail</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('crm/vendor/js/ckeditor.js') }}"></script> --}}
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $("textarea").each(function() {
            CKEDITOR.replace("mail_body", {
                uiColor: "#92acfd",
                toolbar: [
                    [
                        "Bold",
                        "Italic",
                        "-",
                        "RemoveFormat",
                        "TextColor",
                        "-",
                        "NumberedList",
                        "BulletedList",
                    ],
                    [
                        "JustifyLeft",
                        "JustifyCenter",
                        "JustifyRight",
                        "JustifyBlock",
                    ],
                    ['Styles', 'Format', 'Font', 'FontSize']
                ],
            });
        });

        function getUser_list(selected_value = "") {
            return;
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ route('get-all-users') }}",
                headers: {
                    "X-CSRF-TOKEN": $("input[name=_token]").val()
                },
                success: function(response) {
                    let data = response.data.user_list.results;
                    let select_options = arrToDropDown(
                        data,
                        selected_value,
                        "Select Users"
                    );
                    $("#user_list").html(select_options);
                },
            });

        }

        $(function() {
            getUser_list();
            $("#user_send_mail_form").validate({
                ignore: ".ignoreFIle",
                onkeyup: false,
                rules: {
                    user_list: {
                        required: true,
                    },
                    subject: {
                        required: true,
                    },
                    mail_body: {
                        required: true,
                    },

                },
                messages: {

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
                    // if (!CKEDITOR.instances.mail_body.getData()) {
                    //     Swal.fire("Alert", "Please Type Mail.", "error");
                    //     return;
                    // }


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
                            location.reload();
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
