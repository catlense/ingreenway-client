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

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_index.css">

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
            <div class="products_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #1', 'link'=>'/product/1', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #2', 'link'=>'/product/1', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product/1', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/3.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #4', 'link'=>'/product/1', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #5', 'link'=>'/product/1', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                </div>
                <div class="swiper__footer">
                    <div class="swiper-control">
                        <i class="swiper-button__prev">
                            <svg id="icon-arrow" viewBox="0 0 9 14">
                                <path d="M0.612096 11.85L5.4621 6.99999L0.612096 2.14999C0.496369 2.03426 0.404569 1.89687 0.341938 1.74567C0.279307 1.59446 0.24707 1.4324 0.24707 1.26874C0.24707 1.10507 0.279307 0.943013 0.341938 0.791808C0.404569 0.640603 0.496369 0.503214 0.612096 0.387487C0.727824 0.27176 0.865212 0.179959 1.01642 0.117328C1.16762 0.0546971 1.32968 0.0224609 1.49335 0.0224609C1.65701 0.0224609 1.81907 0.0546971 1.97028 0.117328C2.12148 0.179959 2.25887 0.27176 2.3746 0.387487L8.1121 6.12499C8.5996 6.61249 8.5996 7.39999 8.1121 7.88749L2.3746 13.625C2.25895 13.7409 2.12159 13.8328 1.97038 13.8955C1.81916 13.9583 1.65706 13.9905 1.49335 13.9905C1.32964 13.9905 1.16753 13.9583 1.01632 13.8955C0.865099 13.8328 0.727738 13.7409 0.612096 13.625C0.137096 13.1375 0.124596 12.3375 0.612096 11.85Z"></path>
                            </svg>
                        </i>
                        <div class="swiper-pagination">
                            <div class="swiper-pagination-current"></div>
                            <div class="swiper-pagination-total"></div>
                        </div>
                        <i class="swiper-button__next">
                            <svg id="icon-arrow" viewBox="0 0 9 14">
                                <path d="M0.612096 11.85L5.4621 6.99999L0.612096 2.14999C0.496369 2.03426 0.404569 1.89687 0.341938 1.74567C0.279307 1.59446 0.24707 1.4324 0.24707 1.26874C0.24707 1.10507 0.279307 0.943013 0.341938 0.791808C0.404569 0.640603 0.496369 0.503214 0.612096 0.387487C0.727824 0.27176 0.865212 0.179959 1.01642 0.117328C1.16762 0.0546971 1.32968 0.0224609 1.49335 0.0224609C1.65701 0.0224609 1.81907 0.0546971 1.97028 0.117328C2.12148 0.179959 2.25887 0.27176 2.3746 0.387487L8.1121 6.12499C8.5996 6.61249 8.5996 7.39999 8.1121 7.88749L2.3746 13.625C2.25895 13.7409 2.12159 13.8328 1.97038 13.8955C1.81916 13.9583 1.65706 13.9905 1.49335 13.9905C1.32964 13.9905 1.16753 13.9583 1.01632 13.8955C0.865099 13.8328 0.727738 13.7409 0.612096 13.625C0.137096 13.1375 0.124596 12.3375 0.612096 11.85Z"></path>
                            </svg>
                        </i>
                    </div>
                    <a class="link" href="/shop/new">
                        Все новинки
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="sale-products font-gotham">
        <div class="container indexBlock">
            <h1>Акции</h1>
            <div class="products_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #1', 'link'=>'/product/1', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #2', 'link'=>'/product/1', 'price'=>350, 'mark' => ['sale', 'hit', 'freeze'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product/1', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/3.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #4', 'link'=>'/product/1', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #5', 'link'=>'/product/1', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                </div>
                <div class="swiper__footer">
                    <div class="swiper-control">
                        <i class="swiper-button__prev">
                            <svg id="icon-arrow" viewBox="0 0 9 14">
                                <path d="M0.612096 11.85L5.4621 6.99999L0.612096 2.14999C0.496369 2.03426 0.404569 1.89687 0.341938 1.74567C0.279307 1.59446 0.24707 1.4324 0.24707 1.26874C0.24707 1.10507 0.279307 0.943013 0.341938 0.791808C0.404569 0.640603 0.496369 0.503214 0.612096 0.387487C0.727824 0.27176 0.865212 0.179959 1.01642 0.117328C1.16762 0.0546971 1.32968 0.0224609 1.49335 0.0224609C1.65701 0.0224609 1.81907 0.0546971 1.97028 0.117328C2.12148 0.179959 2.25887 0.27176 2.3746 0.387487L8.1121 6.12499C8.5996 6.61249 8.5996 7.39999 8.1121 7.88749L2.3746 13.625C2.25895 13.7409 2.12159 13.8328 1.97038 13.8955C1.81916 13.9583 1.65706 13.9905 1.49335 13.9905C1.32964 13.9905 1.16753 13.9583 1.01632 13.8955C0.865099 13.8328 0.727738 13.7409 0.612096 13.625C0.137096 13.1375 0.124596 12.3375 0.612096 11.85Z"></path>
                            </svg>
                        </i>
                        <div class="swiper-pagination">
                            <div class="swiper-pagination-current"></div>
                            <div class="swiper-pagination-total"></div>
                        </div>
                        <i class="swiper-button__next">
                            <svg id="icon-arrow" viewBox="0 0 9 14">
                                <path d="M0.612096 11.85L5.4621 6.99999L0.612096 2.14999C0.496369 2.03426 0.404569 1.89687 0.341938 1.74567C0.279307 1.59446 0.24707 1.4324 0.24707 1.26874C0.24707 1.10507 0.279307 0.943013 0.341938 0.791808C0.404569 0.640603 0.496369 0.503214 0.612096 0.387487C0.727824 0.27176 0.865212 0.179959 1.01642 0.117328C1.16762 0.0546971 1.32968 0.0224609 1.49335 0.0224609C1.65701 0.0224609 1.81907 0.0546971 1.97028 0.117328C2.12148 0.179959 2.25887 0.27176 2.3746 0.387487L8.1121 6.12499C8.5996 6.61249 8.5996 7.39999 8.1121 7.88749L2.3746 13.625C2.25895 13.7409 2.12159 13.8328 1.97038 13.8955C1.81916 13.9583 1.65706 13.9905 1.49335 13.9905C1.32964 13.9905 1.16753 13.9583 1.01632 13.8955C0.865099 13.8328 0.727738 13.7409 0.612096 13.625C0.137096 13.1375 0.124596 12.3375 0.612096 11.85Z"></path>
                            </svg>
                        </i>
                    </div>
                    <a class="link" href="/shop/sale">
                        Все акции
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hits-products font-gotham">
        <div class="container indexBlock">
            <h1>Хиты продаж</h1>
            <div class="products_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #1', 'link'=>'/product/1', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #2', 'link'=>'/product/1', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product/1', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/3.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #4', 'link'=>'/product/1', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #5', 'link'=>'/product/1', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                </div>
                <div class="swiper__footer">
                    <div class="swiper-control">
                        <i class="swiper-button__prev">
                            <svg id="icon-arrow" viewBox="0 0 9 14">
                                <path d="M0.612096 11.85L5.4621 6.99999L0.612096 2.14999C0.496369 2.03426 0.404569 1.89687 0.341938 1.74567C0.279307 1.59446 0.24707 1.4324 0.24707 1.26874C0.24707 1.10507 0.279307 0.943013 0.341938 0.791808C0.404569 0.640603 0.496369 0.503214 0.612096 0.387487C0.727824 0.27176 0.865212 0.179959 1.01642 0.117328C1.16762 0.0546971 1.32968 0.0224609 1.49335 0.0224609C1.65701 0.0224609 1.81907 0.0546971 1.97028 0.117328C2.12148 0.179959 2.25887 0.27176 2.3746 0.387487L8.1121 6.12499C8.5996 6.61249 8.5996 7.39999 8.1121 7.88749L2.3746 13.625C2.25895 13.7409 2.12159 13.8328 1.97038 13.8955C1.81916 13.9583 1.65706 13.9905 1.49335 13.9905C1.32964 13.9905 1.16753 13.9583 1.01632 13.8955C0.865099 13.8328 0.727738 13.7409 0.612096 13.625C0.137096 13.1375 0.124596 12.3375 0.612096 11.85Z"></path>
                            </svg>
                        </i>
                        <div class="swiper-pagination">
                            <div class="swiper-pagination-current"></div>
                            <div class="swiper-pagination-total"></div>
                        </div>
                        <i class="swiper-button__next">
                            <svg id="icon-arrow" viewBox="0 0 9 14">
                                <path d="M0.612096 11.85L5.4621 6.99999L0.612096 2.14999C0.496369 2.03426 0.404569 1.89687 0.341938 1.74567C0.279307 1.59446 0.24707 1.4324 0.24707 1.26874C0.24707 1.10507 0.279307 0.943013 0.341938 0.791808C0.404569 0.640603 0.496369 0.503214 0.612096 0.387487C0.727824 0.27176 0.865212 0.179959 1.01642 0.117328C1.16762 0.0546971 1.32968 0.0224609 1.49335 0.0224609C1.65701 0.0224609 1.81907 0.0546971 1.97028 0.117328C2.12148 0.179959 2.25887 0.27176 2.3746 0.387487L8.1121 6.12499C8.5996 6.61249 8.5996 7.39999 8.1121 7.88749L2.3746 13.625C2.25895 13.7409 2.12159 13.8328 1.97038 13.8955C1.81916 13.9583 1.65706 13.9905 1.49335 13.9905C1.32964 13.9905 1.16753 13.9583 1.01632 13.8955C0.865099 13.8328 0.727738 13.7409 0.612096 13.625C0.137096 13.1375 0.124596 12.3375 0.612096 11.85Z"></path>
                            </svg>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="font-gotham">
        <div class="container indexBlock">
            <h1>Торговые марки</h1>
            <ul class="indexBrands">
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/starterpack.png" alt="">
                        <p>Наборы для активации</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/aquamagic">
                        <img src="/static/images/brands/aquamagic.png" alt="">
                        <p>Изделия из микроволокна</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/aquamatic">
                        <img src="/static/images/brands/aquamatic.png" alt="">
                        <p>Системы для уборки</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/balancer">
                        <img src="/static/images/brands/balancer.png" alt="">
                        <p>Функциональное питание</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/biotrim">
                        <img src="/static/images/brands/biotrim.png" alt="">
                        <p>Чистящие средства</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/ecopam.png" alt="">
                        <p>Комплексы с колострумом</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/foet.png" alt="">
                        <p>Декоративная косметика</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/healthberry.png" alt="">
                        <p>Функциональные напитки и леденцы</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/hemp.png" alt="">
                        <p>Уходовая косметика</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/igen.png" alt="">
                        <p>Генетические тесты</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/nicecode.png" alt="">
                        <p>Косметика для кожи лица</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/revitall.png" alt="">
                        <p>Биоминеральные комплексы</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/sharme.png" alt="">
                        <p>Сухая минеральная косметика</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/sharme_dent.png" alt="">
                        <p>Натуральные зубные пасты</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Sharme_DEO.png" alt="">
                        <p>Природные дезодоранты для тела</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Sharme_ess.png" alt="">
                        <p>Натуральные эфирные масла</p>
                        <p>Аромароллеры</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Sharme_Hair.png" alt="">
                        <p>Натуральные твердые шампуни и кондиционеры</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Sharme_Soap.png" alt="">
                        <p>Натуральное твердое мыло ручной работы</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Teavitall.png" alt="">
                        <p>Функциональные и ежедневные чаи</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/welllab.png" alt="">
                        <p>Продукты для здоровья</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/welllab_element.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/wellab_liq.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Accs.png" alt="">
                        <p>Аксессуары</p>
                    </a>
                </li>
                <li>
                    <a href="/shop/brands/active">
                        <img src="/static/images/brands/Schedule.png" alt="">
                        <p>Билеты</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="font-bebas">
        <div class="indexBlock indexJoinBlock">
            <div class="head font-gotham">
                <h1>Получите все возможности Greenway</h1>
                <p>После регистрации вам станут доступны: Моментальный доступ к скидкам, участие в программе лояльности и доступ к партнёрской программе</p>
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

    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- UI scripts -->
    <script src="/js/ui/page_index.js"></script>
    <script src="/js/ui/flash.js"></script>

</body>
</html>