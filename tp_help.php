<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница FAQ</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_faq.css">

    <!-- Product Module -->
    <link rel="stylesheet" href="/styles/common/ModuleProduct.css">
</head>
<body>
    <?php
        include 'modules/flash.php';
        include 'modules/header_pc.php';
        include 'modules/header_mob.php';
        include 'modules/popup__Join.php';
        include 'modules/popup__Cart.php';
        include 'modules/popup__Cookies.php';
        include 'modules/popup__Support.php';
    ?>

    <div class="container">
        <?php
            $breadcrumb = ['/'=>'Главная', '/shop/home'=>'Категория продукта'];
            include 'modules/breadcrumb.php';
        ?>
    </div>

    <div class="container faq">
        <div class="head font-gotham">
            <h1>Раздел помощи и поддержки</h1>
            <p>Контекстный помощник</p>
        </div>
    </div>

    <div class="support-content container font-gotham">
        <div class="answers">
            <p class="title">Способ доставки</p>
            <a href="/faq/payment">Курьером в пределах МКАД</a>
            <a href="/faq/delivery">Курьерская служба «СДЭК»</a>
            <a href="/faq/payback">Курьерская служба «MAJOR EXPRESS»</a>
            <a href="/faq/payback">Срочная курьерская в пределах МКАД</a>
            <a href="/faq/payback">Почта России</a>
            <a href="/faq/payback">Курьером в пределах 30 км от МКАД</a>
            <a href="/faq/payback">По России</a>
        </div>
        <div class="answer">
            <h1>Доставка</h1>
            <p>Обработка, отправка и доставка заказов <a href="/">ingreenway.club</a> осуществляется в зависимости от адреса доставки.</p>
            <p><strong>Вы можете оформить доставку заказа одним из следующих способов:</strong></p>
            <ul>
                <li><p>Курьерская доставка по Москве в пределах МКАД.</p></li>
                <li><p>Курьерская доставка по Москве в пределах МКАД.</p></li>
                <li><p>Курьерская доставка по Москве в пределах МКАД.</p></li>
                <li><p>Курьерская доставка по Москве в пределах МКАД.</p></li>
            </ul>
        </div>
    </div>

    <?php
        include 'modules/footer_pc.php';
        include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>

    <!-- Page scripts -->
    <script src="/js/ui/help.js"></script>
</body>
</html>