<div class="popup__cookies font-gotham <? echo $_SESSION['user']->cookie_accepted ? '' : 'visible';?>">
    <div class="title">Уведомление</div>
    <p>Мы используем куки (cookies) с целью повышения удобства вашей работы с сайтом. Продолжив работу с сайтом, вы примете нашу политику использования куки</p>
    <div class="close_cookie_block row_line">
        <a href="/faq/privacy/" class="cookie__show_more">Подробнее</a>
        <button form="cookie" name="send_form" class="access_cookie font-gotham">Принять</button>
    </div>
</div>

<link rel="stylesheet" href="/styles/common/PopupCookies.css">
<script src="/js/frontend/cookies.js"></script>