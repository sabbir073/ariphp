(function($) {
    "use strict"; // Start of use strict

    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
        };
    });

    //modal

    $('#modalToggle').click(function() {
        $('#modal').modal({
            backdrop: 'static'
        });
    });

    $('#infoContinue').click(function(e) {
        e.preventDefault();
        $('.progress-bar').css('width', '40%');
        $('.progress-bar').html('Step 2 of 5');
        $('#myTab a[href="#ads"]').tab('show');
    });

    $('#adsContinue').click(function(e) {
        e.preventDefault();
        $('.progress-bar').css('width', '60%');
        $('.progress-bar').html('Step 3 of 5');
        $('#myTab a[href="#placementPanel"]').tab('show');
    });

    $('#placementContinue').click(function(e) {
        e.preventDefault();
        $('.progress-bar').css('width', '80%');
        $('.progress-bar').html('Step 4 of 5');
        $('#myTab a[href="#schedulePanel"]').tab('show');
    });

    $('#scheduleContinue').click(function(e) {
        e.preventDefault();
        $('.progress-bar').css('width', '100%');
        $('.progress-bar').html('Step 5 of 5');
        $('#myTab a[href="#reviewPanel"]').tab('show');
    });

    $('#campaignName14').on('change', function() {
        if (this.value == '7') {
            $('#onno1').removeClass('d-none');
            $('#onno1').addClass('d-block');
        } else {
            $('#onno1').removeClass('d-block');
            $('#onno1').addClass('d-none');
        }
    });
    $('#campaignName15').on('change', function() {
        if (this.value == '8') {
            $('#onno2').removeClass('d-none');
            $('#onno2').addClass('d-block');
        } else {
            $('#onno2').removeClass('d-block');
            $('#onno2').addClass('d-none');
        }
    });
    $('#campaignName16').on('change', function() {
        if (this.value == '11') {
            $('#onno3').removeClass('d-none');
            $('#onno3').addClass('d-block');
        } else {
            $('#onno3').removeClass('d-block');
            $('#onno3').addClass('d-none');
        }
    });
    $('#campaignName22').on('change', function() {
        if (this.value == '5') {
            $('#onno4').removeClass('d-none');
            $('#onno4').addClass('d-block');
        } else {
            $('#onno4').removeClass('d-block');
            $('#onno4').addClass('d-none');
        }
    });

    $('#activate').click(function(e) {
        e.preventDefault();
        var formData = {
            //campaign_name: $('#campaignName').val(),
            //start_date: $('#start-date').val(),
            // end_date: $('#end-date').val(),
            days: {
                //  sunday: $('#sunday').prop('checked'),
                //  monday: $('#monday').prop('checked'),
                //  tuesday: $('#tuesday').prop('checked'),
                //  wednesday: $('#wednesday').prop('checked'),
                //  thurday: $('#thursday').prop('checked'),
                //  friday: $('#friday').prop('checked'),
                //  saturday: $('#saturday').prop('checked'),
            },
            start_time: $('#start-time').val(),
            end_time: $('#end-time').val()
        }
        alert(JSON.stringify(formData));
    })

    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function() {
        if ($(window).width() < 768) {
            $('.sidebar .collapse').collapse('hide');
        };
    });

    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
        if ($(window).width() > 768) {
            var e0 = e.originalEvent,
                delta = e0.wheelDelta || -e0.detail;
            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
            e.preventDefault();
        }
    });

    // Scroll to top button appear
    $(document).on('scroll', function() {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function(e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        e.preventDefault();
    });

})(jQuery); // End of use strict