<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экопроекты - mygreenway</title>

    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/landings/styles/common.css">
    <link rel="stylesheet" href="/landings/styles/page_eco.css">

    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <?php 
    include 'landings/header_pc.php';
    include 'modules/header_mob.php';
    ?>

    <div class="container">
        <?php
        $breadcrumb = ['/' => 'Главная', '/eco' => 'Экопроекты'];
        include 'modules/breadcrumb.php';
        ?>

        <div class="screen">
            <div class="eco-slide">
                <div class="main_img eco-1">
                    <button class="font-gotham" onclick="window.open('https://static.greenwaystart.com/download/video-promo/forest.mp4');">
                        <svg id="icon-play" viewBox="0 0 10 10">
                            <path d="M9.04277 4.38806L6.45607 2.87914C5.8789 2.54126 4.93489 1.99094 4.35654 1.65442L1.675 0.145461C1.09802 -0.192386 0.530579 0.0785976 0.530579 0.747912V9.25293C0.530579 9.91993 1.09802 10.1921 1.67522 9.85557L4.30935 8.34665C4.88769 8.01013 5.85601 7.45981 6.43317 7.12193L9.0321 5.61301C9.6079 5.27512 9.6188 4.72458 9.04277 4.38806Z"></path>
                        </svg>
                        Смотреть видео
                    </button>
                </div>
                <div class="content font-gotham">
                    <p class="subtitle">Экопроекты</p>
                    <div class="swiper textSwiperF">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h1>Greenway сажает сосны</h1>
                                <p><strong>В 2019 году сибирские леса были охвачены огнем. Пожары в тайге распространились на миллионы гектаров, погубив миллиарды животных и птиц. По подсчетам ученых, 100 лет понадобится для восстановления лесов и десятилетия для восстановления экосистемы.</strong></p>
                                <p>Мы не стали держаться в стороне от этой катастрофы и запустили свой флешмоб #greenwayсажаетсосны.</p>
                                <p>На мероприятии MaxMasters-2019 наши партнеры получили в подарок ручки с семенами черной сосны, чтобы посадить новые деревья и внести свой вклад в восстановление лесов. Семена сибирской сосны были выведены с учетом природных условий России, чтобы посадки помогли лесам преобразиться.</p>
                                <p>В последующем, идея с посадкой деревьев переросла в масштабный проект «Greenway сажает сосны». Все больше партнеров компании принимает участие в этой акции, выкладывая в социальные сети фотографии с хэштегом #greenwayсажаетсосны, тем самым поддерживая этот проект.</p>
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="screen">
            <div class="eco-slide">
                <div class="main_img eco-2">
                </div>
                <div class="content font-gotham">
                    <div class="swiper textSwiperS">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h1>Greenway помогает животным, пострадавшим от пластика</h1>
                                <p><strong>В 2020 году компания Greenway начала оказывать постоянную финансовую поддержку АНО «Научно-экологическому Центру Спасения дельфинов «Дельфа».</strong></p>
                                <p>В некоторых морях в мире есть места, где пластмассовых изделий больше, чем планктона! Биологи-океанографы бьют тревогу. Так, несколько лет назад, в Норвегии на берег выбросился кит, которого пришлось усыпить. В его желудке нашли 30 пластиковых пакетов. В марте 2019 года на берег Филиппин выбросило молодого кита, в желудке которого биологи и волонтёры обнаружили 40 килограммов пластика. Кроме этого, многие животные оказываются запутавшимися в рыболовных сетях или по неосторожности ранятся о корабли и катера.</p>
                                <p>На мероприятии MaxMasters-2019 наши партнеры получили в подарок ручки с семенами черной сосны, чтобы посадить новые деревья и внести свой вклад в восстановление лесов. Семена сибирской сосны были выведены с учетом природных условий России, чтобы посадки помогли лесам преобразиться.</p>
                                <p>В последующем, идея с посадкой деревьев переросла в масштабный проект «Greenway сажает сосны». Все больше партнеров компании принимает участие в этой акции, выкладывая в социальные сети фотографии с хэштегом #greenwayсажаетсосны, тем самым поддерживая этот проект.</p>
                            </div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
            <?php
            include 'modules/footer_pc.php';
            include 'modules/footer_mob.php';
            ?>
        </div>
    </div>

    <?php 
    include 'modules/popup__Join.php';
    include 'modules/popup__Cart.php';
    ?>

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"> </script>
    <script src="/landings/scripts/page_eco.js"></script>

    <script>
        document.querySelector('.breadcrumb').style.marginTop = document.querySelector('.breadcrumb').getAttribute('mt') + 40 + 'px'
    </script>

</body>

</html>