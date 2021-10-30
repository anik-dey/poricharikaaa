

$(document).ready(function () {
    var url = window.location;

    $('ul.nav a[href="' + url + '"]').parent().addClass('active');


    $('ul.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active').parent().parent().addClass('active');
});

$(document).ready(function(){

    $("#married").click(function() {

        $(".husband-info").show(500);

    });
    $("#unmarried").click(function() {

        $(".husband-info").hide('slow');

    });

    $("#nid").keypress(function (e) {

        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

            $("#errmsg").html("Digits Only").show().fadeOut("slow");
                return false;
       }
      });

      $('.text-alpha').keydown(function (e) {
        if (e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 45) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });

});
