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

    <!-- Product Module -->
    <link rel="stylesheet" href="/styles/common/ModuleProduct.css">
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
            <div class="products_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #1', 'link'=>'/product', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #2', 'link'=>'/product', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/3.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #4', 'link'=>'/product', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #5', 'link'=>'/product', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/2.jpg'];
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
                            $product = ['id'=>1, 'title'=>'Название продукта #1', 'link'=>'/product', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #2', 'link'=>'/product', 'price'=>350, 'mark' => ['sale', 'hit', 'freeze'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/3.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #4', 'link'=>'/product', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #5', 'link'=>'/product', 'price'=>350, 'mark' => ['sale'], 'image'=>'/static/images/products/2.jpg'];
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

    <div class="new-products font-gotham">
        <div class="container indexBlock">
            <h1>Хиты продаж</h1>
            <div class="products_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #1', 'link'=>'/product', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #2', 'link'=>'/product', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/2.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/3.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #4', 'link'=>'/product', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/1.jpg'];
                            include 'modules/product.php';
                        ?>
                    </div>
                    <div class="swiper-slide">
                        <?php
                            $product = ['id'=>1, 'title'=>'Название продукта #5', 'link'=>'/product', 'price'=>350, 'mark' => ['hit'], 'image'=>'/static/images/products/2.jpg'];
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

    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- UI scripts -->
    <script src="/js/ui/page_index.js"></script>
    <script src="/js/ui/flash.js"></script>

</body>
</html>