let flashTimer = {
    el: document.querySelector('.flash'),
    day: document.querySelector('.timer-day'),
    hour: document.querySelector('.timer .hour'),
    minute: document.querySelector('.timer .minutes'),
    second: document.querySelector('.timer .seconds')
}

if (flashTimer.el) {
    setInterval(() => {
        fetch('/modules/front.php?method=get_flash_time')
            .then(response => response.json())
            .then(date => {
                flashTimer.day.innerText = date[0].days
                flashTimer.hour.innerText = date[1].hours
                flashTimer.minute.innerText = date[2].minuts
                flashTimer.second.innerText = date[3].secs
                    // console.log(date);
            });
    }, 1000)
}