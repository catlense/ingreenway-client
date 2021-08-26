document.querySelector('.showAllOffices').onclick = () => {
    if (document.querySelector('.addresses').classList.toggle('active')) {
        document.querySelector('.addresses').style.display = 'block'
        document.querySelector('.showAllOffices').innerText = 'Скрыть все офисы'
    } else {
        document.querySelector('.addresses').style.display = 'none'
        document.querySelector('.showAllOffices').innerText = 'Показать все офисы'
    }
}