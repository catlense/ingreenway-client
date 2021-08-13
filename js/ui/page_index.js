let mainSlider = document.querySelector('.main-slider')

if (mainSlider) {
    mainSlider.style.height = window.innerHeight + 'px'

    new Swiper('.main-slider', {
        loop: true,
        pagination: {
            el: '.main-slider_pagination',
            dynamicBullets: true,
            clickable: true
        }
    })
}