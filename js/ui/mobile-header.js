let mainCategoryContainer = document.querySelector('.mobile_cats')
let openSubcategories = document.querySelectorAll('.mobile_cats>li')
let openCategories = document.querySelector('.categories button')

let openMenu = document.querySelector('.right-link.menu')
let mobileMenu = document.querySelector('.mobile-menu')

mainCategoryContainer.style.maxHeight = window.innerHeight - 250 + 'px'

openCategories.onclick = () => {
    openCategories.classList.toggle('active')
}

openSubcategories.forEach(element => {
    element.onclick = () => {
        element.classList.toggle('active')
    }
});

openMenu.onclick = () => {
    if (openMenu.classList.toggle('animate')) {
        _$('.mini_logo').style.display = 'none'
        _$('.default_logo').style.display = 'block'
        _$('.default_logo').style.height = '40px'
        _$().style.overflow = 'hidden'
        mobileMenu.style.height = window.innerHeight - _$('header').clientHeight + 'px'
        if (_$('.categories')) {
            mobileMenu.style.marginTop = '-50px'
        }
    } else {
        _$('.mini_logo').style.display = 'block'
        _$('.default_logo').style.display = 'none'
        _$().style.overflow = 'auto'
        mobileMenu.style.height = '0px'
    }
}

_$('.consultant-info').onclick = () => {
    _$('.consultant-info').classList.toggle('active')
}

function _$(tag = 'body') {
    return document.querySelector(tag);
}