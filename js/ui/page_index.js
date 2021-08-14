let mainSlider = document.querySelector('.main-slider')
let slidesLabel = document.querySelectorAll('.slide_label')

let flashHeight = document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0
let headerPcHeight = document.querySelector('header.pc') ? document.querySelector('header.pc').clientHeight : 0

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

if (slidesLabel && headerPcHeight) {
    slidesLabel.forEach(element => {
        element.style.marginTop = `${headerPcHeight + flashHeight}px`
    })
}