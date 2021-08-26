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

    <div class="container">
        <div class="addresses font-gotham">
            <h1>Офисы продаж компании</h1>
    
            <div class="table">
                <div class="line head">
                    <p class="code">Код филиала</p>
                    <p class="country">Страна</p>
                    <p class="address">Адрес</p>
                    <p class="phone">Телефон</p>
                    <p class="time">Время работы</p>
                </div>
                <div class="line">
                    <p class="code">378</p>
                    <p class="country">Armenia</p>
                    <p class="address">Yerevan Gyulbenkyan 30/3</p>
                    <p class="phone">
                        <span>+374 12 320023</span>
                        <span>+37499320323</span>
                    </p>
                    <p class="time">
                        <span>Пн: 11:00 - 19:00</span>
                        <span>Вт: 11:00 - 19:00</span>
                        <span>Ср: 11:00 - 19:00</span>
                        <span>Чт: 11:00 - 19:00</span>
                        <span>Пт: 11:00 - 19:00</span>
                        <span>Сб: 11:00 - 19:00</span>
                    </p>
                </div>
                <div class="line">
                    <p class="code">378</p>
                    <p class="country">Armenia</p>
                    <p class="address">Yerevan Gyulbenkyan 30/3</p>
                    <p class="phone">
                        <span>+374 12 320023</span>
                        <span>+37499320323</span>
                    </p>
                    <p class="time">
                        <span>Пн: 11:00 - 19:00</span>
                        <span>Вт: 11:00 - 19:00</span>
                        <span>Ср: 11:00 - 19:00</span>
                        <span>Чт: 11:00 - 19:00</span>
                        <span>Пт: 11:00 - 19:00</span>
                        <span>Сб: 11:00 - 19:00</span>
                    </p>
                </div>
            </div>
            <a href="#addresses" class="showAllOfficesTable">Показать ещё</a>
        </div>
    </div>

    <div class="font-bebas">
        <div class="indexBlock indexJoinBlock">
            <div class="head font-gotham">
                <h1>Экология жизни, пространства и человека</h1>
                <p>Мы предлагаем каждому человеку присоединиться к заботе об экологии окружающей среды. Это не просто работа, а стиль жизни, который открывает новые горизонты и безграничные возможности</p>
            </div>
            <div class="withbg">
                <button class="font-bebas">Присоединиться</button>
            </div>
        </div>
    </div>

    <?php
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>

    <!-- page scripts -->
    <script src="/js/frontend/list.js"></script>
</body>

</html>