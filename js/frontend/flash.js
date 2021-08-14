let flashTimer = {
    el: document.querySelector('.flash'),
    day: document.querySelector('.timer-day'),
    hour: document.querySelector('.timer .hour'),
    minute: document.querySelector('.timer .minutes'),
    second: document.querySelector('.timer .seconds'),
    timerText: document.querySelector('.timer-text'),
    timerTextOst: document.querySelector('.timer-text_later')
}

if (flashTimer.el) {
    setInterval(() => {
        fetch('/modules/front.php?method=get_flash_time')
            .then(response => response.json())
            .then(date => {
                if (date[0].days) {
                    if (date[0].days.toString().slice(-1) == 1) {
                        flashTimer.timerText.innerText = 'день'
                        flashTimer.timerTextOst.innerText = 'остался'
                    } else if (date[0].days.toString().slice(-1) == 2 || date[0].days.toString().slice(-1) == 3 || date[0].days.toString().slice(-1) == 4) {
                        flashTimer.timerText.innerText = 'дня'
                        flashTimer.timerTextOst.innerText = 'осталось'
                    } else if ((date[0].days.toString().slice(-1) > 5 && date[0].days.toString().slice(-1) < 9) || date[0].days.toString().slice(-1) == 0) {
                        flashTimer.timerText.innerText = 'дней'
                        flashTimer.timerTextOst.innerText = 'осталось'
                    } else {
                        flashTimer.timerText.innerText = 'дней'
                        flashTimer.timerTextOst.innerText = 'осталось'
                    }
                }
                // flashTimer.timerText.innerText = (date[0].days.toString().charAt(date[0].days.length - 1) == 1 ? 'день' : ((date[0].days.toString().charAt(date[0].days.length - 1) == 2 || date[0].days.toString().charAt(date[0].days.length - 1) == 3 || date[0].days.charAt(date[0].days.length - 1) == 4) ? 'дней' : 'дня'))
                flashTimer.day.innerText = date[0].days >= 1 ? date[0].days : 0
                flashTimer.hour.innerText = (date[1].hours >= 1 ? date[1].hours : 0)
                flashTimer.minute.innerText = (date[2].minuts >= 1 ? date[2].minuts : 0)
                flashTimer.second.innerText = (date[3].secs <= 1 ? 0 : date[3].secs)
            });
    }, 1000)
}

/*
1 день
2 дня
3 дня
4 дня
5 дней
6 дней
7 дней
8 дней
9 дней
...
21 день

*1 - день
*2,3,4 - дня
* - дней
*/