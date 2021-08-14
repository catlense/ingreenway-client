<?php if(!$_SESSION['user']->flash_hidden): ?>
<div class="flash">
    <div class="container">
        <div class="texts">
            <div class="font-bebas flash-title">Летние предложения</div>
            <div class="countdown">
                <div class="font-roboto remains"><span class="timer-text_later">осталось</span> <span class="timer-day">3</span> <span class="timer-text"></span></div>
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
<!-- Flash scripts -->
<script src="/js/frontend/flash.js"></script>

<!-- Flash styles -->
<link rel="stylesheet" href="/styles/common/ModuleFlash.css">
<?php endif; ?>
