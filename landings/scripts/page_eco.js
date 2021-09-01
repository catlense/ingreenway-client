let swiper = new Swiper(".textSwiperF", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    height: 450,
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    mousewheel: true,
});

let swiper_s = new Swiper(".textSwiperS", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    height: 450,
    scrollbar: {
        el: ".swiper-scrollbar2",
    },
    mousewheel: true,
});

// document.querySelector('body').addEventListener('mousewheel', (e) => {
//     let isAnimate = false
//     let currentAnchor = -1
//     var anchors = []

//     console.log(e);

//     e.stopPropagation();

//     if (isAnimate) {
//         return false
//     }

//     isAnimate = true
//     if (e.deltaY >= 0) {
//         currentAnchor--
//     } else {
//         currentAnchor++
//     }

//     if (currentAnchor > (anchors.length - 1) || currentAnchor < 0) {
//         currentAnchor = 0
//     }

//     isAnimate = true

//     document.querySelector('body').scrollTo(100, 0)
//     isAnimate = false

// })

// let pages = new Swiper('.presentation', {
//     direction: "vertical",
//     slidesPerView: 1,
//     mousewheel: true,
// })

// document.querySelector('.swiperPages .swiper-slide').style.maxHeight = window.innerHeight + 'px'
// console.log(window.innerHeight + 'px');