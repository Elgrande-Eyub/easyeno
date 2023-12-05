$(document).ready(function() {
    function removeRtlClass() {
        var div = $(".navbar");
        var col = $(".navbar .collapse");
        var lang = $(".navbar .lang");
        if ($(window).width() < 992) {
            div.removeClass("rtl");
            col.addClass("rtl");
            lang.removeClass("languageMenuNone");

        } else {
            div.addClass("rtl");
            col.removeClass("rtl");
            lang.addClass("languageMenuNone");

        }
    }

    removeRtlClass();
    $(window).resize(removeRtlClass);

    //Contact Form
    $("#contactUs").submit(function(event) {
        event.preventDefault();

        // Serialize the form data
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "/contactForm",
            data: formData,
            success: function() {
                // Hide the form
                // $("#myForm").hide();

                Swal.fire({
                    icon: 'success',
                    title: 'Thank You',
                    text: 'We Got Your Letter ,Will Contact You Soon',
                });

                // Optionally, you can reset the form
                $("#contactUs")[0].reset();
            },
            error: function(response) {
                // Handle errors if needed
                console.log(response);
            }
        });
    });
});