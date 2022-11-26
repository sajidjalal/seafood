$(".num_value").keyup(function (e) {
    var $th = $(this);

    if (
        e.keyCode != 46 &&
        e.keyCode != 8 &&
        e.keyCode != 37 &&
        e.keyCode != 38 &&
        e.keyCode != 39 &&
        e.keyCode != 40
    ) {

        // if ((this.value.match(".") || []).length == 0) 
        $th.val(
            $th.val().replace(/[^0-9.]/g, function (str) {
                return "";
            })
        );
    }
    return;
});

$(".pincode").keyup(function (e) {
    var $th = $(this);

    if (
        e.keyCode != 46 &&
        e.keyCode != 8 &&
        e.keyCode != 37 &&
        e.keyCode != 38 &&
        e.keyCode != 39 &&
        e.keyCode != 40
    ) {
        var pincode = $(this).val();
        pincode = pincode.replace("_", "");
        if (pincode.length == 6) {
            get_Pincode(pincode);
        }
        $th.val(
            $th.val().replace(/[^0-9]/g, function (str) {
                return "";
            })
        );
    }
    return;
});

function get_Pincode(pincode) {
    $.ajax({
        url: "/get-city-state?pincode=" + pincode,
        data: {},
        processData: false,
        contentType: false,
        type: "GET",
        dataType: "json",
        headers: {
            "X-CSRF-TOKEN": $("input[name=_token]").val()
        },
        success: function (response) {
            $(".city").val(response.data.city_id);
            $(".state").val(response.data.state_id);
        },
        error: function (xhr, status, error) {
            var e = JSON.parse(xhr.responseText);
            var errorCode = e.fields;
        },
    });
}

function arrToDropDown(arr, selected_value = null, label = false) {

    var options = "";
    if (label) options += `<option value='0'>${label}</option>`;
    for (var i = 0; i < arr.length; i++) {
        options +=
            "<option " +
            (selected_value == arr[i].id ? 'selected="selected"' : "") +
            ' value="' +
            arr[i].id +
            '">' +
            arr[i].text +
            "</option>";
    }

    return options;
}