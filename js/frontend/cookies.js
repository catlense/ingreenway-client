let popUpCookie = document.querySelector('.popup__cookies')
let accessCookie = document.querySelector('.access_cookie')

accessCookie.onclick = () => {
    popUpCookie.classList.remove('visible')
    fetch('/modules/front.php?method=close_cookie')
}