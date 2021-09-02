let pageSwiper = new Swiper(".pageSwiper", {
    direction: "vertical",
    slidesPerView: 1,
    mousewheel: true,
    allowTouchMove: false
});

if (window.innerWidth < 768) {
    pageSwiper.destroy()
}