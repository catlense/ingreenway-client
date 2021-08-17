let mainCategoryContainer = document.querySelector('.mobile_cats')
let openSubcategories = document.querySelectorAll('.mobile_cats>li')
let openCategories = document.querySelector('.categories button')

mainCategoryContainer.style.maxHeight = window.innerHeight - 250 + 'px'

openCategories.onclick = () => {
    openCategories.classList.toggle('active')
}

openSubcategories.forEach(element => {
    element.onclick = () => {
        element.classList.toggle('active')
    }
});