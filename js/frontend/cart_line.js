let amounts = {
    plus: document.querySelectorAll('.btn-amount.plus'),
    minus: document.querySelectorAll('.btn-amount.minus'),
}

document.querySelectorAll('.edit-count input').forEach(element => {
    element.onkeyup = (e) => {
        e.preventDefault()
    }
})

amounts.plus.forEach(element => {
    element.onclick = () => {
        document.querySelector(`input#${element.getAttribute('data-id')}`).value = (parseInt(document.querySelector(`input#${element.getAttribute('data-id')}`).value) | 0) + 1
        document.querySelector(`.total_price#${element.getAttribute('data-id')}`).innerText = parseInt(document.querySelector(`input#${element.getAttribute('data-id')}`).getAttribute('data')) * parseInt(document.querySelector(`input#${element.getAttribute('data-id')}`).value)
    }
})
amounts.minus.forEach(element => {
    element.onclick = () => {
        if (document.querySelector(`input#${element.getAttribute('data-id')}`).value - 1 < 1) return;
        document.querySelector(`input#${element.getAttribute('data-id')}`).value = parseInt(document.querySelector(`input#${element.getAttribute('data-id')}`).value) - 1
        document.querySelector(`.total_price#${element.getAttribute('data-id')}`).innerText = parseInt(document.querySelector(`input#${element.getAttribute('data-id')}`).getAttribute('data')) * parseInt(document.querySelector(`input#${element.getAttribute('data-id')}`).value)
    }
})