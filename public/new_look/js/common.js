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
