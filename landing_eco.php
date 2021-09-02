<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экопроекты - mygreenway</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/landings/styles/page_eco.css">
    <link rel="stylesheet" href="/landings/styles/common.css">

    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">
</head>

<body>
    <?php
    include 'landings/components/landing_menu.php';
    include 'modules/header_mob.php';
    
    ?>
    
    <div class="swiper pageSwiper" noSwiping>
        <div class="swiper-wrapper">
            <div class="swiper-slide">1</div>
            <div class="swiper-slide">2</div>
        </div>
    </div>

    <?php
    include 'modules/popup__Join.php';
    include 'modules/popup__Cart.php';
    ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/landings/js/page_eco.js"></script>
</body>

</html>