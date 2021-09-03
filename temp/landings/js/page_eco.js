let pageSwiper = new Swiper(".pageSwiper", {
    direction: "vertical",
    slidesPerView: 1,
    mousewheel: true,
    allowTouchMove: false,
    effect: 'fade',
    releaseOnEdges: true,
    on: {
        slideChange: (e) => {

            if (e.activeIndex === 0) {
                window.scrollTo(0, 0)
                document.body.style.overflow = 'hidden'
            } else { document.body.style.overflowY = 'scroll' }
            // console.log(e)
        },
        init: () => {
            window.scrollTo(0, 0)
            document.body.style.overflow = 'hidden'
        },
    }
});

document.querySelector('.eco-slide#e2').addEventListener('wheel', (e) => {
    if (document.body.scrollTop === 0 && pageSwiper.activeIndex === 1) {
        window.scrollTo(0, e.deltaY)
    }
})

let swiper = new Swiper('[data-js-swiper-scrollblock]', {
    direction: 'vertical',
    slidesPerView: 'auto',
    freeMode: true,
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    mousewheel: true,
    nested: true,
    releaseOnEdges: true
});

// new Swiper(".textSwiperF", {
//     direction: "vertical",
//     slidesPerView: "auto",
//     freeMode: true,
//     height: 450,
//     scrollbar: {
//         el: ".textSwiperF .swiper-scrollbar",
//     },
//     mousewheel: true,
// });

// let swiper_s = new Swiper(".textSwiperS", {
//     direction: "vertical",
//     slidesPerView: "auto",
//     freeMode: true,
//     height: 450,
//     scrollbar: {
//         el: ".textSwiperS .swiper-scrollbar",
//     },
//     mousewheel: true,
// });

// if (window.innerWidth < 768) {
//     pageSwiper.destroy()
//     swiper.destroy()
// }


// new Swiper('[data-js-fullScreen-slider]', {
//     effect: 'fade',
//     fadeEffect: {
//         crossFade: true
//     },
//     simulateTouch: false,
//     allowTouchMove: false,
//     preventInteractionOnTransition: true,
//     direction: 'vertical',
//     slidesPerView: 1,
//     nested: true,
//     on: {
//         reachEnd: () => {
//             // $('.app').removeClass('app--scrollDisable').scrollTop(0);
//         },
//         slideChange: () => {

//             let targetSlide = $('[data-js-fullScreen-slider] > .swiper-wrapper > .swiper-slide').eq(fullScreenSlider.activeIndex);
//             let animationElements = targetSlide.find('[data-fslider-animation]');

//             if (animationElements.length) {

//                 animationElements.each((i, el) => {

//                     let type = $(el).data('fsliderType') || 'opacity';
//                     let delay = $(el).data('fsliderDelay') || 0;

//                     let duration = $(el).data('fsliderDuration') || 0.3;
//                     switch (type) {
//                         case 'fromRight':
//                             gsap.from($(el), { x: '105%', duration: duration, delay: delay, ease: "expo.inOut", clearProps: 'all' });
//                             break;
//                         case 'fromLeft':
//                             gsap.from($(el), { x: '-105%', duration: duration, delay: delay, ease: "expo.inOut", clearProps: 'all' });
//                             break;
//                         case 'fromTop':
//                             gsap.from($(el), { y: '-105%', duration: duration, delay: delay, ease: "expo.inOut", clearProps: 'all' });
//                             break;
//                         case 'fromBottom':
//                             gsap.from($(el), { y: '105%', duration: duration, delay: delay, ease: "expo.inOut", clearProps: 'all' });
//                             break;
//                         case 'revealBottom':
//                             gsap.from($(el), { opacity: 0, y: '75', duration: duration, delay: delay, ease: "power2.out", clearProps: 'all' });
//                             break;
//                         case 'revealTop':
//                             gsap.from($(el), { opacity: 0, y: '-75', duration: duration, delay: delay, ease: "power2.out", clearProps: 'all' });
//                             break;
//                         case 'revealLeft':
//                             gsap.from($(el), { opacity: 0, x: '-75', duration: duration, delay: delay, ease: "power2.out", clearProps: 'all' });
//                             break;
//                         case 'revealRight':
//                             gsap.from($(el), { opacity: 0, x: '75', duration: duration, delay: delay, ease: "power2.out", clearProps: 'all' });
//                             break;
//                     }

//                 });

//             }
//             // set current counter
//             $('#company-counter-current').text(fullScreenSlider.activeIndex + 1);
//         }
//     },
//     speed: 500