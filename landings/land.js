let totalLink = location.pathname;
console.log(totalLink.substring(totalLink.length - 5, totalLink.length));
if (window.innerWidth < 768) {
    if (totalLink.substring(totalLink.length - 5, totalLink.length) != '-mob/') window.location.href = totalLink.substring(0, totalLink.length - 1) + '-mob/'
} else {
    if (totalLink.substring(totalLink.length - 5, totalLink.length) == '-mob/') window.location.href = totalLink.substring(0, totalLink.length - 5)
}

window.onload = () => {
    document.querySelectorAll('.consultant-info').forEach(element => {
        element.onclick = () => { element.classList.toggle('active') }
    })

    document.querySelectorAll('.close_landing_pc_showed').forEach(element => {
        element.onclick = () => {
            element.classList.remove('active')
            document.querySelectorAll('.landing_pc_showed').forEach(element => element.classList.remove('active'))
        }
    })

    document.querySelectorAll('.open-menu').forEach(element => {
        element.onclick = () => {
            document.querySelectorAll('.close_landing_pc_showed').forEach(element => element.classList.add('active'))
            document.querySelectorAll('.landing_pc_showed').forEach(element => element.classList.add('active'))
        }
    })

    switch (location.pathname) {
        case '/company/':
            document.querySelector('.nav-about').classList.add('active')
            break;
        case '/history/':
            document.querySelector('.nav-history').classList.add('active')
            break;
        case '/opportunities/':
            document.querySelector('.nav-opp').classList.add('active')
            break;
        case '/eco/':
            document.querySelector('.nav-eco').classList.add('active')
            break;
        case '/news/':
            document.querySelector('.nav-news').classList.add('active')
            break;
        case '/shop/':
            document.querySelector('.nav-shop').classList.add('active')
            break;
        default:
            console.log(location.pathname);
    }
}