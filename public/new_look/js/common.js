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
        url: "/get-city-state/" + pincode,
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

$.fn.dataTable.pipeline = function (opts) {
    // Configuration options
    var conf = $.extend(
        {
            pages: 5, // number of pages to cache
            url: "",
            data: null,
            method: "POST", // Ajax HTTP method
        },
        opts
    );
    // Private variables for storing the cache
    var cacheLower = -1;
    var cacheUpper = null;
    var cacheLastRequest = null;
    var cacheLastJson = null;

    return function (request, drawCallback, settings) {
        var ajax = false;
        var requestStart = request.start;
        var drawStart = request.start;
        var requestLength = request.length;
        var requestEnd = requestStart + requestLength;
        if (settings.clearCache) {
            // API requested that the cache be cleared
            ajax = true;
            settings.clearCache = false;
        } else if (
            cacheLower < 0 ||
            requestStart < cacheLower ||
            requestEnd > cacheUpper
        ) {
            // outside cached data - need to make a request
            ajax = true;
        } else if (
            JSON.stringify(request.order) !==
            JSON.stringify(cacheLastRequest.order) ||
            JSON.stringify(request.columns) !==
            JSON.stringify(cacheLastRequest.columns) ||
            JSON.stringify(request.search) !==
            JSON.stringify(cacheLastRequest.search)
        ) {
            // properties changed (ordering, columns, searching)
            ajax = true;
        }
        // Store the request for checking next time around
        cacheLastRequest = $.extend(true, {}, request);
        if (ajax) {
            if (requestStart < cacheLower) {
                requestStart = requestStart - requestLength * (conf.pages - 1);
                if (requestStart < 0) {
                    requestStart = 0;
                }
            }
            cacheLower = requestStart;
            cacheUpper = requestStart + requestLength * conf.pages;
            request.start = requestStart;
            request.length = requestLength * conf.pages;
            // Provide the same `data` options as DataTables.
            if ($.isFunction(conf.data)) {
                var d = conf.data(request);
                if (d) {
                    $.extend(request, d);
                }
            } else if ($.isPlainObject(conf.data)) {
                // As an object, the data given extends the default
                $.extend(request, conf.data);
            }
            settings.jqXHR = $.ajax({
                type: conf.method,
                url: conf.url,
                data: request,
                dataType: "json",
                cache: false,
                headers: { "X-CSRF-TOKEN": $("input[name=_token]").val() },
                success: function (json) {
                    cacheLastJson = $.extend(true, {}, json);
                    if (cacheLower != drawStart) {
                        json.data.splice(0, drawStart - cacheLower);
                    }
                    if (requestLength >= -1) {
                        json.data.splice(requestLength, json.data.length);
                    }
                    drawCallback(json);
                },
            });
        } else {
            json = $.extend(true, {}, cacheLastJson);
            json.draw = request.draw; // Update the echo for each response
            json.data.splice(0, requestStart - cacheLower);
            json.data.splice(requestLength, json.data.length);
            drawCallback(json);
        }
    };
};