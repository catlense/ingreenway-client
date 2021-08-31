let flashHeight = document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0
if (document.querySelector('header.mobile') || document.querySelector('header.pc')) {
    var headerHeight = window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight
}
let breadcrumb = document.querySelector('.breadcrumb')

if (breadcrumb) {
    breadcrumb.style.marginTop = flashHeight + headerHeight + 9 + 'px'
}