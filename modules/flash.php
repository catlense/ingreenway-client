<?php if(!$_SESSION['user']->flash_hidden): ?>
<div class="flash">
    <div class="container">
        <div class="texts">
            <div class="font-bebas flash-title">Летние предложения</div>
            <div class="countdown">
                <div class="font-roboto remains">осталось 3 дня</div>
                <div class="timer font-bebas">
                    <span class="hour">04</span>
                    <span class="minutes">04</span>
                    <span class="seconds">48</span>
                </div>
            </div>
        </div>
        <div class="close-flash">
            <i class="mdi mdi-close"></i>
        </div>
    </div>
</div>
<?php endif; ?>