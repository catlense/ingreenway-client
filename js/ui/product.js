let tabsNames = document.querySelectorAll('.tabs__name');
let tabsContents = document.querySelectorAll('.tabs__content');

let feedbacks = document.querySelector('.recommendation')

let miniImages = document.querySelectorAll('.mini-images .img')

miniImages.forEach(element => {
    element.onclick = () => {
        document.querySelector('.mini-images .img.active').classList.remove('active')
        element.classList.add('active')

        document.querySelectorAll('.main.image img').forEach(element => {
            element.setAttribute('src', document.querySelector('.mini-images .img.active img').getAttribute('src'))
        })
    }
})

if (window.innerWidth > 850) {
    feedbacks.style.marginTop = tabsContents[0].scrollHeight + tabsNames[0].scrollHeight + 30 + 'px'
} else {
    feedbacks.style.marginTop = tabsNames[0].scrollHeight + 'px'
}

tabsNames.forEach(element => {
    element.onclick = () => {
        if (window.innerWidth < 850) {
            if (document.querySelector('.tabs__container.active') == document.querySelector(`#${element.getAttribute('data-id')}`)) {
                document.querySelector('.tabs__container.active').classList.remove('active')
                feedbacks.style.marginTop = document.querySelector(`#${element.getAttribute('data-id')}`).scrollHeight + 'px'
                return;
            } else {
                if (document.querySelector('.tabs__container.active') != null) {
                    document.querySelector('.tabs__container.active').classList.remove('active')
                }
                document.querySelector(`#${element.getAttribute('data-id')}`).classList.add('active');
                feedbacks.style.marginTop = document.querySelector(`#${element.getAttribute('data-id')}`).scrollHeight + 'px'
            }
        } else {
            document.querySelector('.tabs__container.active').classList.remove('active')
            element.classList.add('active')

            document.querySelector(`#${element.getAttribute('data-id')}`).classList.add('active');
            feedbacks.style.marginTop = document.querySelector(`#${element.getAttribute('data-id')} .tabs__content`).scrollHeight + 30 + 'px'

        }

    }
})

new Swiper('.products_slider', {
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

    }
})