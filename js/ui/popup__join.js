let openPopup = document.querySelectorAll('.openPopupJB')
let closePopup = document.querySelector('.closePopup')

let joinBlock = document.querySelector('.joinBlock')

let wrapperJB = document.querySelector('.popup-wrapper.jb')

let openNextScreen = document.querySelector('.openNextScreen')

let firstScreen = document.querySelector('.firstScreen')
let secondScreen = document.querySelector('.second_screen')
let thirdScreen = document.querySelector('.third_screen')

let openConsultantMenu = document.querySelector('.openConsultant')

openPopup.forEach(element => {
    element.onclick = () => {
        wrapperJB.classList.toggle('active')
        document.body.style.overflow = 'hidden'
    }
})
closePopup.onclick = () => {
    wrapperJB.classList.toggle('active')
    document.body.style.overflow = 'auto'

    firstScreen.classList.remove('hidden')
    secondScreen.classList.add('hidden')
    thirdScreen.classList.add('hidden')
}

openNextScreen.onclick = () => {
    firstScreen.classList.add('hidden')
    secondScreen.classList.remove('hidden')
}

openConsultantMenu.onclick = () => {
    secondScreen.classList.add('hidden')
    thirdScreen.classList.remove('hidden')
}