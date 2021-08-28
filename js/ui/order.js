document.querySelector('.left-column h1').style.top =
    (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
    (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 'px';

document.querySelector('.left-column .desc').style.top =
    (
        (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
        (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) +
        document.querySelector('.left-column h1').clientHeight
    ) + 'px';

document.querySelector('.right-column').style.top =
    (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
    (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 20 + 'px';

document.querySelectorAll('.attention').forEach(element => {
    element.setAttribute('start-height', element.clientHeight)
    element.style.height = element.clientHeight == 0 ? '' : element.clientHeight + 'px'
})

document.querySelectorAll('.open-attention').forEach(element => {
    element.onclick = () => {
        document.querySelector(`.attention-${element.getAttribute('data')}`).classList.remove('hidden')
    }
})

document.querySelectorAll('.attention .close').forEach(element => {
    element.onclick = () => {
        element.parentElement.classList.add('hidden')
    }
})