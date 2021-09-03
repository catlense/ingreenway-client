let flashHeight = document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0
if (document.querySelector('header.mobile') || document.querySelector('header.pc')) {
    var headerHeight = window.innerWidth < 890 ?
        (document.querySelector('header.mobile') ? document.querySelector('header.mobile').clientHeight : 0) :
        (document.querySelector('header.pc') ? document.querySelector('header.pc').clientHeight : 0)
}
let breadcrumb = document.querySelector('.breadcrumb')

if (breadcrumb) {
    breadcrumb.style.paddingTop = flashHeight + headerHeight + 9 + 'px'
}