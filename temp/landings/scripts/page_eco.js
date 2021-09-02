let swiper = new Swiper(".textSwiperF", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    height: 450,
    scrollbar: {
        el: ".textSwiperF .swiper-scrollbar",
    },
    mousewheel: true,
});

let swiper_s = new Swiper(".textSwiperS", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    height: 450,
    scrollbar: {
        el: ".textSwiperS .swiper-scrollbar",
    },
    mousewheel: true,
});

let swiperPages = new Swiper('.swiperPage', {
    direction: "vertical",
    slidesPerView: 1,
    slidesPerGroup: 1,
    mousewheel: true,
})

// document.querySelectorAll('.swiper').forEach(element => {
//     element.style.maxHeight = window.innerHeight + 'px'
// })

if (window.innerWidth < 768) {
    swiper_s.destroy()
    swiper.destroy()
}