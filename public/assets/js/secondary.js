//jquery for toggle button

$(document).ready(function() {
    $("#checkbox").click(function() {
        //daily-monthly toggle
        $(".toggle-daily").toggleClass("jq-daily");
        $(".toggle-monthly").toggleClass("jq-monthly");
        // price change
        $(".text1").toggle(function() {
            $("text1-js").css("transition", "1s ease-out 1s")
        })

        $(".text2").toggle(function() {
            $("text2-js").css("transition", "1s ease-in-out 1s")
        })

    });
    // search button drop-down
    $("#search-btn").click(function() {
        $(".search-box").slideToggle(500, function() {
            // Animation complete.
        });
    });


    $(".search-box").on({
        mouseenter: function() {

            $(this).css("background", "#F14668");

        },
        mouseleave: function() {

            $(this).css("background", "#fff");

        }

    });

});
