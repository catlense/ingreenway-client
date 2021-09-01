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

if (window.innerWidth < 768) {
    swiper_s.destroy()
    swiper.destroy()
}