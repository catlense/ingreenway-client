let showValues = document.querySelectorAll('.selector_value')
let values = document.querySelectorAll('.filter_value')

let showNews = document.querySelectorAll('.newsLink a')

showValues.forEach(element => {
    element.onclick = () => {
        values.forEach(element1 => {
            if (element1.getAttribute('id') != element.getAttribute('data-id')) element1.classList.remove('active')
        })

        document.querySelector(`#${element.getAttribute('data-id')}`).classList.toggle('active')
    }
})

showNews.forEach(element => {
    element.onclick = (e) => {
        e.preventDefault()
        window.location.href = element.getAttribute('href')
    }
})