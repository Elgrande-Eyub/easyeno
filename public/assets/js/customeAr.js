$(document).ready(function() {
    function removeRtlClass() {
        var div = $(".navbar");
        var col = $(".navbar .collapse");
        if ($(window).width() < 992) {
            div.removeClass("rtl");
            col.addClass("rtl");


        } else {
            div.addClass("rtl");
            col.removeClass("rtl");


        }
    }

    removeRtlClass();
    $(window).resize(removeRtlClass);

    //Contact Form
    $("#contactUs").submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "/contactForm",
            data: formData,
            success: function() {
                Swal.fire({
                    icon: 'success',
                    title: 'شكراً',
                    text: 'شكرًا لك على الاتصال بنا. نقدر رسالتك وسنتواصل معك قريبًا',
                });

                $("#contactUs")[0].reset();
            },
            error: function(response) {

                console.log(response);
            }
        });
    });
});