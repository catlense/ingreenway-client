let mainCategoryContainer = document.querySelector('.mobile_cats')
let openSubcategories = document.querySelectorAll('.mobile_cats>li')
let openCategories = document.querySelector('.categories button')

let openMenu = document.querySelector('.right-link.menu')
let mobileMenu = document.querySelector('.mobile-menu')

let selectMenu = document.querySelectorAll('.selectMenu')
let backMenus = document.querySelectorAll('.backMenu')
let selectorsMenu = document.querySelectorAll('.selectorMenu')

mainCategoryContainer.style.maxHeight = window.innerHeight - 250 + 'px'

openCategories.onclick = () => {
    openCategories.classList.toggle('active')
}

openSubcategories.forEach(element => {
    element.onclick = () => {
        element.classList.toggle('active')
    }
})

selectMenu.forEach(element => {
    element.onclick = () => {
        if (_$(`#${element.getAttribute('data')}`)) {
            _$(`#${element.getAttribute('data')}`).classList.add('active')
        }
    }
})

backMenus.forEach(element => {
    element.onclick = () => {
        if (_$('.selectorMenu.active')) {
            _$('.selectorMenu.active').classList.remove('active')
        }
    }
})

openMenu.onclick = () => {
    if (openMenu.classList.toggle('animate')) {
        _$('.mini_logo').style.display = 'none'
        _$('.default_logo').style.display = 'block'
        _$('.default_logo').style.height = '40px'
        _$().style.overflow = 'hidden'
        mobileMenu.style.height = window.innerHeight -
            ((document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
                (document.querySelector('header.pc') ? document.querySelector('header.pc').clientHeight : document.querySelector('header.mobile').clientHeight)) + 'px'
    } else {
        _$('.mini_logo').style.display = 'block'
        _$('.default_logo').style.display = 'none'
        _$().style.overflow = 'auto'
        mobileMenu.style.height = '0px'
        selectorsMenu.forEach(element => {
            element.classList.remove('active')
        })
        _$('.consultant-info').classList.remove('active')
    }
}

if (document.querySelectorAll('.categories')[1] && document.querySelectorAll('.categories')[1].offsetHeight !== 0) {
    mobileMenu.style.marginTop = '-50px'
}

_$('.consultant-info').onclick = () => {
    _$('.consultant-info').classList.toggle('active')
}

function _$(tag = 'body') {
    return document.querySelector(tag);
}