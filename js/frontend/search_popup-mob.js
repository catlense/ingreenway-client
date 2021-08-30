document.querySelector('.right-link.search').onclick = () => {
    document.querySelector('.search-popup').classList.add('active')
    document.body.style.overflow = 'hidden'
}
document.querySelector('.close-search').onclick = () => {
    document.querySelector('.search-popup').classList.remove('active')
}
document.querySelector('.fa-search').onclick = () => {
    window.location.href = `/search?text=${document.querySelector('.search-text').value}`
}