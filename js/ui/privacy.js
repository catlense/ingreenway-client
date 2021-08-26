let faqOpeners = document.querySelectorAll('.faqOpener')
let faqTexts = document.querySelectorAll('.faqText')

faqOpeners.forEach(element => {

    if (window.innerWidth < 768) {
        element.style.height = document.querySelector(`p.title[p-id="${element.getAttribute('data-id')}"]`).clientHeight + 2 + 'px'
        element.onclick = () => {
            if (document.querySelector('.faqOpener.active') && document.querySelector('.faqOpener.active').getAttribute('data-id') != element.getAttribute('data-id')) {
                document.querySelector('.faqOpener.active').style.height = '105px'
                document.querySelector('.faqOpener.active').classList.remove('active')
            }
            if (element.classList.toggle('active')) {
                element.style.height = document.querySelector(`.faqText#${element.getAttribute('data-id')}`).clientHeight + 155 + 'px'
            } else {
                element.style.height = document.querySelector(`p.title[p-id="${element.getAttribute('data-id')}"]`).clientHeight + 2 + 'px'
            }
        }
    } else {
        element.style.height = document.querySelector(`p.title[p-id="${element.getAttribute('data-id')}"]`).clientHeight + 21 + 'px'
        element.onclick = () => {
            if (document.querySelector('.faqOpener.active') && document.querySelector('.faqOpener.active').getAttribute('data-id') != element.getAttribute('data-id')) {
                document.querySelector('.faqOpener.active').style.height = '105px'
                document.querySelector('.faqOpener.active').classList.remove('active')
            }
            if (element.classList.toggle('active')) {
                element.style.height = document.querySelector(`.faqText#${element.getAttribute('data-id')}`).clientHeight + 155 + 'px'
            } else {
                element.style.height = document.querySelector(`p.title[p-id="${element.getAttribute('data-id')}"]`).clientHeight + 21 + 'px'
            }
        }
    }
})