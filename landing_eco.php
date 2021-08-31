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

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <?php include 'landings/header_pc.php'; ?>

    <div class="container">
        <?php
        $breadcrumb = ['/' => 'Главная', '/eco' => 'Экопроекты'];
        include 'modules/breadcrumb.php';
        ?>

        <div class="eco-slide">
            <div class="main_img eco-1"></div>
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
        <div class="eco-slide"></div>

    </div>

    <?php include 'modules/popup__Join.php'; ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"> </script>
    <script src="/landings/scripts/page_eco.js"></script>

</body>

</html>