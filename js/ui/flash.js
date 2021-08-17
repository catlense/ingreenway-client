let flash = document.querySelector('.flash')
let flashClose = document.querySelector('.close-flash')

let headerPc = document.querySelector('header.pc')
let headerMob = document.querySelector('header.mobile')

if (flash && flashClose) {
    flashClose.onclick = () => {
        flash.classList.add('flash_hidden')
        if (headerPc) {
            headerPc.style.marginTop = '0px'
            headerMob.style.marginTop = '0px'
        }
        fetch('/modules/front.php?method=hide_flash')
    }

    if (headerPc) {
        headerPc.style.marginTop = flash.scrollHeight + 'px'
        headerMob.style.marginTop = flash.scrollHeight + 'px'
    }
}