let links = document.querySelectorAll('.footerLinks>li')

links.forEach(element => {
    element.onclick = () => {
        element.classList.toggle('active')
    }
})