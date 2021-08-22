let cBlockClose = document.querySelector('.cartBlock .closePopup')
let openCart = document.querySelectorAll('.right-icons .cart')
let openCartMob = document.querySelector('.right-link.cart')

openCart.forEach(element => {
    element.onclick = () => {
        document.querySelector('.popup-wrapper.cb').classList.add('active')
        document.body.style.overflowY = 'hidden'
    }
})

openCartMob.onclick = () => {
    document.querySelector('.popup-wrapper.cb').classList.add('active')
    document.body.style.overflowY = 'hidden'

}

cBlockClose.onclick = () => {
    document.querySelector('.popup-wrapper.cb').classList.remove('active')
    document.body.style.overflowY = 'auto'

}