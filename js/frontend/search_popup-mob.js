document.querySelector('.right-link.search').onclick = () => {
    document.querySelector('.search-popup').classList.add('active')
}
document.querySelector('.close-search').onclick = () => {
    document.querySelector('.search-popup').classList.remove('active')
}