if (document.querySelector('.country-selector')) document.querySelector('.country-selector').onclick = () => {
    document.querySelector('.language-selector').classList.toggle('active')
}