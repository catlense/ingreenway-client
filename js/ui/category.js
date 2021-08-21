let fH = document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0
let hH = window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight
document.querySelector('.filters-block').style.top = `${fH + hH}px`