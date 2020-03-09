(function($) {
    "use strict"; // Start of use strict

    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on("click", function(e) {
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {
            $(".sidebar .collapse").collapse("hide");
        }
    });

    //change in vehicle/driver depend on injured vehicle
    $("#accidentcarnumber").on("change", function(e) {
        e.preventDefault();
        $("#vehiclenumberone").empty();
        var vvalue = this.value;
        var i;
        for (i = 1; i <= vvalue; i++) {
            var html =
                '<div class="card"><div class="card-header" role="tab" id="heading' +
                i +
                '"><h5 class="mb-0"><a data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapse' +
                i +
                '" aria-expanded="true" aria-controls="collapseOne">যানবাহন ' +
                i +
                '</a></h5></div><div id="scheduleAccordioncollapse' +
                i +
                '" class="collapse" role="tabpanel" aria-labelledby="heading' +
                i +
                '"><div class="row"><div class="container-fluid"><div class="form-group"><label for="vehiclecampaign' +
                i +
                '">মালিকের নাম</label><input type="text" name="vehiclecampaign[]" class="form-control" id="vehiclecampaign' +
                i +
                '"></input></div><div class="form-group"><label for="vehicleaddress' +
                i +
                '">মালিকের ঠিকানা </label><input type="text" name="vehcleaddress[]" class="form-control" id="vehicleaddress' +
                i +
                '"></input></div><div class="form-group"><label for="vehiclemaker' +
                i +
                '">যানবাহন প্রস্তুতকারী</label><input type="text" name="vehiclemaker[]" class="form-control" id="vehiclemaker' +
                i +
                '"></input></div><div class="form-group"><label for="vehiclereg' +
                i +
                '">রেজিস্ট্রেশন নম্বর</label><input type="text" name="vehiclereg[]" placeholder="38. জেলা" class="form-control" id="vehiclereg' +
                i +
                '"></input><input type="text" name="vehicleregextra[]" placeholder="39. নম্বর" class="form-control" id="vehicleregextra' +
                i +
                '"></input></div><div class="form-group"><label for="fitnesscert' +
                i +
                '">40.বৈধ ফিটনেস সার্টিফিকেট</label><select class="form-control" id="fitnesscert' +
                i +
                '" name="fitnesscertificate[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.আছে</option><option value="2">2.নাই</option><option value="3">3.প্রযোজ্য নয়</option></select></div><div class="form-group"><label for="checkinsurance' +
                i +
                '">বীমা কৃত</label><select class="form-control" id="checkinsurance' +
                i +
                '" name="checkinsurance[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.তৃতীয় পার্টি</option><option value="2">2.কমপ্রিহেনসিভ</option></select></div><div class="form-group"><label for="vehicletype' +
                i +
                '">41.যানবাহন এর ধরণ</label><select class="form-control" id="vehicletype' +
                i +
                '" name="vehicletype[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.বাইসাইকেল</option><option value="2">2.রিকশা/ভ্যান</option><option value="3">3.ঠেলাগাড়ি</option><option value="4">4.মটর সাইকেল</option><option value="5">5.বেবী ট্যাক্সি/সিএনজি</option><option value="6">6.টেম্পো</option><option value="7">7.মাইক্রোবাস</option><option value="8">8.মিনি বাস</option><option value="9">9.বাস</option><option value="10">10.কার</option><option value="11">11.জীপ</option><option value="12">12.পিকআপ</option><option value="13">13.ছোট ট্রাক</option><option value="14">14.ভারী ট্রাক</option><option value="15">15.আর্টিকুলেটেড ট্রাক</option><option value="16">16.ট্যাংকার</option><option value="17">17.ট্রাক্টর</option><option value="18">18.পশু চালিত</option><option value="19">19.অন্যান্য (নসিমন, করিমন ইত্যাদি)</option></select></div><div class="form-group"><label for="vehiclerunningtype' +
                i +
                '">42.যানবাহন চলাচল এর ধরণ</label><select class="form-control" id="vehiclerunningtype' +
                i +
                '" name="vehiclerunningtype[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.বামে মোড়</option><option value="2">2.ডানে মোড়</option><option value="3">3.U মোড়</option><option value="4">4.সংযোগ স্থলে আড়াআড়ি অতিক্রম</option><option value="5">5.ওভারটেকিং</option><option value="6">6.সোজাসুজি চলা</option><option value="7">7.পিছনের দিকে চলা</option><option value="8">8.হঠাৎ যাত্রা করা</option><option value="9">9.হঠাৎ থামা/গতি কমানো</option><option value="10">10.পার্ক/দাঁড়ানো অবস্থায়</option><option value="11">11.অন্যান্য</option></select></div><div class="form-group"><label for="vehicleproductweight' +
                i +
                '">43.যানবাহন এর মালামাল বোঝাই</label><select class="form-control" id="vehicleproductweight' +
                i +
                '" name="vehicleproductweight[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.আইনানুগ</option><option value="2">2.বেআইনি/বিপদজনক বোঝাই</option></select></div><div class="form-group"><label for="vehicleproblem' +
                i +
                '">44.যানবাহন এর ত্রুটি</label><select class="form-control" id="vehicleproblem' +
                i +
                '" name="vehicleproblem[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.ত্রুটি মুক্ত</option><option value="2">2.লাইট</option><option value="3">3.ব্রেক</option><option value="4">4.স্টিয়ারিং</option><option value="5">5.টায়ার</option><option value="6">6.বহুবিধ</option><option value="7">7.অন্যান্য</option></select></div><div class="form-group"><label for="vehiclesuffer' +
                i +
                '">45.যানবাহন এর ক্ষতি (দুর্ঘটনা জনিত)</label><select class="form-control" id="vehiclesuffer' +
                i +
                '" name="vehiclesuffer[]"><option value="0">সিলেক্ট করুন</option><option value="1">1.নাই</option><option value="2">2.সামনে</option><option value="3">3.পিছনে</option><option value="4">4.ডানে</option><option value="5">5.বামে</option><option value="6">6.ছাদে</option><option value="7">7.বহুবিধ</option><option value="8">8.অন্যান্য</option></select></div></div></div></div>';
            $("#vehiclenumberone").append(html);
        }
    });

    //change in vehicle/driver depend on injured driver
    $("#injureddrivernumber").on("change", function(e) {
        e.preventDefault();
        $("#drivernumberone").empty();
        var vvalue = this.value;
        var i;
        for (i = 1; i <= vvalue; i++) {
            var html =
                '<div class="card"><div class="card-header" role="tab" id="heading' +
                i +
                '"><h5 class="mb-0"><a data-toggle="collapse" data-parent="#scheduleAccordiontwo" href="#scheduleAccordiontwocollapse' +
                i +
                '" aria-expanded="true" aria-controls="collapseOne">চালক ' +
                i +
                '</a></h5></div><div id="scheduleAccordiontwocollapse' +
                i +
                '" class="collapse" role="tabpanel" aria-labelledby="heading' +
                i +
                '"><div class="row"><div class="container-fluid"><div class="form-group"><label for="drivername' +
                i +
                '">চালকের নাম</label><input type="text" name="drivername[]" class="form-control" id="drivername' +
                i +
                '"></input></div><div class="form-group"><label for="driveraddress' +
                i +
                '">চালকের ঠিকানা </label><input type="text" name="driveraddress[]" class="form-control" id="driveraddress' +
                i +
                '"></input></div><div class="form-group"><label for="drivinglicense' +
                i +
                '">ড্রাইভিং লাইসেন্স</label><input type="text" name="drivinglicense[]" placeholder="46. জেলা" class="form-control" id="drivinglicense' +
                i +
                '"></input><input type="text" name="drivinglicenseextra[]" placeholder="47. নম্বর" class="form-control" id="vehicleregextra' +
                i +
                '"></input></div></div></div></div></div>';
            $("#drivernumberone").append(html);
        }
    });

    //modal

    $("#modalToggle").click(function() {
        $("#modal").modal({
            backdrop: "static"
        });
    });

    $("#primarycontinue").click(function(e) {
        e.preventDefault();
        $(".progress-bar").css("width", "40%");
        $(".progress-bar").html("Step 2 of 5");
        $('#myTab a[href="#officeuse"]').tab("show");
    });

    $("#officecontinue").click(function(e) {
        e.preventDefault();
        $(".progress-bar").css("width", "60%");
        $(".progress-bar").html("Step 3 of 5");
        $('#myTab a[href="#vehicledriver"]').tab("show");
    });

    $("#vehicledrivercontinue").click(function(e) {
        e.preventDefault();
        $(".progress-bar").css("width", "80%");
        $(".progress-bar").html("Step 4 of 5");
        $('#myTab a[href="#passenger"]').tab("show");
    });

    $("#passengercontinue").click(function(e) {
        e.preventDefault();
        $(".progress-bar").css("width", "100%");
        $(".progress-bar").html("Step 5 of 5");
        $('#myTab a[href="#finalstep"]').tab("show");
    });

    $("#campaignName14").on("change", function() {
        if (this.value == "7") {
            $("#onno1").removeClass("d-none");
            $("#onno1").addClass("d-block");
        } else {
            $("#onno1").removeClass("d-block");
            $("#onno1").addClass("d-none");
        }
    });
    $("#campaignName15").on("change", function() {
        if (this.value == "8") {
            $("#onno2").removeClass("d-none");
            $("#onno2").addClass("d-block");
        } else {
            $("#onno2").removeClass("d-block");
            $("#onno2").addClass("d-none");
        }
    });
    $("#campaignName16").on("change", function() {
        if (this.value == "11") {
            $("#onno3").removeClass("d-none");
            $("#onno3").addClass("d-block");
        } else {
            $("#onno3").removeClass("d-block");
            $("#onno3").addClass("d-none");
        }
    });
    $("#campaignName22").on("change", function() {
        if (this.value == "5") {
            $("#onno4").removeClass("d-none");
            $("#onno4").addClass("d-block");
        } else {
            $("#onno4").removeClass("d-block");
            $("#onno4").addClass("d-none");
        }
    });

    //function for vehicle amount and input print

    $("#activate").click(function(e) {
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
            start_time: $("#start-time").val(),
            end_time: $("#end-time").val()
        };
        alert(JSON.stringify(formData));
    });

    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function() {
        if ($(window).width() < 768) {
            $(".sidebar .collapse").collapse("hide");
        }
    });

    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function(
        e
    ) {
        if ($(window).width() > 768) {
            var e0 = e.originalEvent,
                delta = e0.wheelDelta || -e0.detail;
            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
            e.preventDefault();
        }
    });

    // Scroll to top button appear
    $(document).on("scroll", function() {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }
    });

    // Smooth scrolling using jQuery easing
    $(document).on("click", "a.scroll-to-top", function(e) {
        var $anchor = $(this);
        $("html, body")
            .stop()
            .animate({
                    scrollTop: $($anchor.attr("href")).offset().top
                },
                1000,
                "easeInOutExpo"
            );
        e.preventDefault();
    });
})(jQuery); // End of use strict