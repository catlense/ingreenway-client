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

let swiper = new Swiper('.products_slider', {
    slidesPerView: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    simulateTouch: true,
    slidesOffsetBefore: 0,
    slidesOffsetAfter: 0,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
        currentClass: 'swiper-pagination-current',
        totalClass: 'swiper-pagination-total'
    },
    navigation: {
        nextEl: ".swiper-button__next",
        prevEl: ".swiper-button__prev",
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 15,
            slidesPerGroup: 1
        }

    },
    on: {
        init() {
            setTimeout(updateFraction, 0, this);
        },
        slideChange() {
            updateFraction(this);
        },
        resize() {
            updateFraction(this);
        },
    }
})

function updateFraction(slider) {
    const { params, activeIndex } = slider;
    if (slider.slides.length > 3) {
        slider.$el
            .find(`.${params.pagination.currentClass}`)
            .text(`${activeIndex + 1} - ${activeIndex + params.slidesPerView}`);
    }
    slider.$el
        .find(`.${params.pagination.totalClass}`)
        .text(slider.slides.length);
}