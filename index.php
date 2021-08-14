<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_index.css">
</head>
<body>
    <?php
        include 'modules/flash.php';
        include 'modules/header_pc.php';
    ?>

    <div class="swiper-container main-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(/static/images/main_slider/1.jpg) no-repeat">
                <div class="container font-bebas right">
                    <div class="slide_label">Новинка</div>
                    <div class="slide_title_line">Открой</div>
                    <div class="slide_title_line">свое сияние</div>
                    <a href="#" class="font-gotham">Эксклюзивно онлайн <i class="mdi mdi-18px mdi-arrow-right"></i></a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url(/static/images/main_slider/2.jpg) no-repeat">
                <div class="container font-bebas">
                    <div class="slide_label">Новинка</div>
                    <div class="slide_title_line">Открой</div>
                    <div class="slide_title_line">свое сияние</div>
                    <a href="#" class="font-gotham">Эксклюзивно онлайн <i class="mdi mdi-18px mdi-arrow-right"></i></a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url(/static/images/main_slider/3.jpg) no-repeat">
                <div class="container font-bebas">
                    <div class="slide_label">Новинка</div>
                    <div class="slide_title_line">Открой</div>
                    <div class="slide_title_line">свое сияние</div>
                    <a href="#" class="font-gotham">Эксклюзивно онлайн <i class="mdi mdi-18px mdi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="main-slider_pagination"></div>
    </div>

    <div class="new-products font-gotham">
        <div class="container indexBlock">
            <h1>Новинки</h1>
            <div class="new-products_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $product = ['mark' => 'new'];
                            include 'modules/product.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- UI scripts -->
    <script src="/js/ui/page_index.js"></script>
    <script src="/js/ui/flash.js"></script>

</body>
</html>