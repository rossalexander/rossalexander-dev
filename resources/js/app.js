import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/inertia-vue3'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .mount(el)
    },
})

// import './bootstrap';
// $(document).ready(function () {
//     $("#intro").show().delay(1000).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
//     $("#l1").show().delay(1500).css('opacity', 0).slideDown().animate({opacity: 1}, {queue: true, duration: 'slow'});
//     $("#l2").show().delay(2000).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
//     $("#l3").show().delay(2500).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
//     $("#l24").show().delay(3000).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
//     $("#lr").show().delay(3500).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
//     $("#scroll").show().delay(4000).css('opacity', 0).animate({opacity: 1}, {queue: true, duration: 'slow'});
//
//     $(window).scroll(function () {
//         var topDivHeight = $("#about").height();
//         var viewPortSize = $(window).height();
//
//         var triggerAt = 150;
//         var triggerHeight = (topDivHeight - viewPortSize) + triggerAt;
//
//         if ($(window).scrollTop() >= triggerHeight) {
//             $('#t1').delay(200).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
//             $('#t2').delay(800).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
//             $('#t3').delay(400).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
//             $('#t4').delay(1000).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
//             $('#t5').delay(600).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
//             $('#t6').delay(1200).css('opacity', 0).slideDown('slow').animate({opacity: 1}, {queue: true, duration: 'slow'});
//             $(this).off('scroll');
//         }
//     });
// });
