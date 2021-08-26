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
    <link rel="stylesheet" href="/styles/pages/page_list.css">
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

    <div class="container font-gotham">
        <?php
        $breadcrumb = ['/' => 'Главная', '/shop/home' => 'Категория продукта'];
        include 'modules/breadcrumb.php';
        ?>
        <div class="preview-block font-gotham">
            <h1>Ingreenway Россия</h1>
            <p>Поддержка без перерывов и выходных</p>
        </div>
        <div class="second_block font-gotham">
            <h1>Контакты</h1>
            <div class="contact">
                <a href="tel:88002345800">8-800-2345-800</a>
                <a href="mailto:office@greenway.group">office@greenway.group</a>
            </div>
            <div class="contact">
                <p>Время работы call-центра</p>
                <h2>с 6:00 до 22:00 (МСК)</h2>
            </div>
        </div>
        <div class="third_block font-gotham">
            <div class="list font-gotham">
                <h1>Найти офис<br>продаж</h1>
                <div class="searchOffice">
                    <i class="mdi mdi-magnify  pointer"></i>
                    <input type="text" placeholder="Введите город, адрес или номер офиса..." class="font-gotham">
                </div>
                <div class="offices font-gotham">
                    <div class="office">
                        <div class="title">
                            №100, Россия, Москва Хорошевское шоссе, д.32, корп.2
                        </div>
                        <div class="closeTime">
                            Закрывается в 20:00
                        </div>
                    </div>
                    <div class="office">
                        <div class="title">
                            №100, Россия, Москва Хорошевское шоссе, д.32, корп.2
                        </div>
                        <div class="closeTime">
                            Закрывается в 20:00
                        </div>
                    </div>
                    <div class="office">
                        <div class="title">
                            №100, Россия, Москва Хорошевское шоссе, д.32, корп.2
                        </div>
                        <div class="closeTime">
                            Закрывается в 20:00
                        </div>
                    </div>
                    <div class="office">
                        <div class="title">
                            №100, Россия, Москва Хорошевское шоссе, д.32, корп.2
                        </div>
                        <div class="closeTime">
                            Закрывается в 20:00
                        </div>
                    </div>
                    <div class="office">
                        <div class="title">
                            №100, Россия, Москва Хорошевское шоссе, д.32, корп.2
                        </div>
                        <div class="closeTime">
                            Закрывается в 20:00
                        </div>
                    </div>
                    <a href="#addresses" class="showAllOffices font-gotham">Показать все офисы</a>
                </div>
            </div>
            <div class="map"></div>
        </div>
    </div>

    <?php
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>
</body>

</html>