import './bootstrap';

$(document).ready(function () {
    $("#intro").delay(1000).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
    $("#l1").delay(1500).css('opacity', 0).slideDown().animate({opacity: 1}, {queue: true, duration: 'slow'});
    $("#l2").delay(1800).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
    $("#l3").delay(2100).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
    $("#lr").delay(2400).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
    $("#scroll").delay(3000).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});

    $(window).scroll(function () {
        var topDivHeight = $("#about").height();
        var viewPortSize = $(window).height();

        var triggerAt = 150;
        var triggerHeight = (topDivHeight - viewPortSize) + triggerAt;

        if ($(window).scrollTop() >= triggerHeight) {
            $('#t1').delay(200).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
            $('#t2').delay(800).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
            $('#t3').delay(400).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
            $('#t4').delay(1000).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
            $('#t5').delay(600).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
            $('#t6').delay(1200).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
            $(this).off('scroll');
        }
    });



    // $("#scroll").click(function() {
    //     const sections = ['about', 'experience', 'contact'];
    //     for (let i = 0; i < sections.length; i++) {
    //         console.log(sections[i]);
    //         location.href = "#" + i.valueOf()
    //     }
    // });

});
