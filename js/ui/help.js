document.querySelector('.support-content .answers').style.top =
    (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
    (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 20 + 'px';
document.querySelector('.support-content h1').style.top = (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
    (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 'px';
document.querySelector('.mdi.mdi-close').onclick = () => {
    document.querySelector('.flash').addEventListener('transitionend', () => {
        document.querySelector('.support-content .answers').style.top =
            (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
            (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 20 + 'px';
        document.querySelector('.support-content h1').style.top = (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
            (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 'px';
        document.querySelector('.breadcrumb').style.marginTop =
            (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) +
            (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 30 + 'px';
    }, false)
}