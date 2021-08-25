<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница продукта</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_news.css">

    <!-- Product Module -->
    <link rel="stylesheet" href="/styles/common/ModuleProduct.css">
</head>

<body>
    <?php
    include 'modules/flash.php';
    include 'modules/header_pc_modify.php';
    include 'modules/header_mob_modify.php';
    include 'modules/popup__Join.php';
    include 'modules/popup__Cart.php';
    include 'modules/popup__Cookies.php';
    include 'modules/popup__Support.php';
    ?>

    <?php if ($_GET['page'] == '') : ?>
        <div class="container font-gotham">
            <?php
            $breadcrumb = ['/' => 'Главная', '/news' => 'Новости'];
            include 'modules/breadcrumb.php';
            ?>

            <h1 class="title">Новости и события</h1>
            <div class="news-container">
                <?php
                $filterParams = array(
                    'years' => [2021, 2020, 2019, 2018],
                    'tags' => ['новинка', 'акция', 'Прямой_эфир']
                );
                ?>
                <div class="header-content_margin content__block">
                    <div class="section_filters">
                        <section class="selector">
                            <p>Год:</p>
                            <div class="selector_value" data-id="year">
                                <?php
                                if ($_GET['search'] == 'year') {
                                    echo $_GET['value'];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </div>
                        </section>
                        <section class="selector">
                            <p>Тег:</p>
                            <div class="selector_value" data-id="tag">
                                <?php
                                if ($_GET['search'] == 'tag') {
                                    echo $_GET['value'];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </div>
                        </section>
                        <?php if ($_GET['search'] != '') : ?>
                            <section class="selector">
                                <a href="/news/" class="iconFilter">
                                    <svg id="icon-close-round" viewBox="0 0 18 18">
                                        <path d="M8.99984 0.666504C13.6082 0.666504 17.3332 4.3915 17.3332 8.99984C17.3332 13.6082 13.6082 17.3332 8.99984 17.3332C4.3915 17.3332 0.666504 13.6082 0.666504 8.99984C0.666504 4.3915 4.3915 0.666504 8.99984 0.666504ZM11.9915 4.83317L8.99984 7.82484L6.00817 4.83317L4.83317 6.00817L7.82484 8.99984L4.83317 11.9915L6.00817 13.1665L8.99984 10.1748L11.9915 13.1665L13.1665 11.9915L10.1748 8.99984L13.1665 6.00817L11.9915 4.83317Z"></path>
                                    </svg>
                                </a>
                            </section>
                        <?php endif; ?>
                    </div>
                    <div class="filter_values">
                        <div class="filter_value" id="year">
                            <?php
                            foreach ($filterParams['years'] as $year) {
                                echo "<a href='/news/year/$year'>$year</a>";
                            }
                            ?>
                        </div>
                        <div class="filter_value" id="tag">
                            <?php
                            foreach ($filterParams['tags'] as $tag) {
                                echo "<a href='/news/tag/$tag'>$tag</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="content__block">
                    <div class="news-blocks">
                        <div class="newsBlock" data="111">
                            <div class="newsDate">
                                <svg class="icon" viewBox="0 0 12 12">
                                    <path d="M11.4545 4.36353H10.9091H1.0909H0.545461H0V11.4544C0 11.7557 0.244219 11.9999 0.545461 11.9999H11.4546C11.7558 11.9999 12 11.7557 12 11.4544V4.36353H11.4545ZM4.00001 9.2726C4.00001 9.57385 3.75579 9.81806 3.45455 9.81806H2.72728C2.42604 9.81806 2.18182 9.57385 2.18182 9.2726V8.54534C2.18182 8.2441 2.42604 7.99988 2.72728 7.99988H3.45455C3.75579 7.99988 4.00001 8.2441 4.00001 8.54534V9.2726Z"></path>
                                    <path d="M11.4545 1.0909H8.36365V0.545461C8.36365 0.244219 8.11943 0 7.81819 0C7.51694 0 7.27273 0.244219 7.27273 0.545461V1.09092H4.72727V0.545461C4.72727 0.244219 4.48305 0 4.18181 0C3.88057 0 3.63635 0.244219 3.63635 0.545461V1.09092H0.545461C0.244219 1.0909 0 1.33512 0 1.63636V3.27272H0.545461H1.09092H10.9091H11.4546H12V1.63636C12 1.33512 11.7558 1.0909 11.4545 1.0909Z"></path>
                                </svg>
                                01.07.2021
                            </div>
                            <div class="newsTitle" onclick="window.location.href = '/news/111'">Разъяснения по программе лояльности Green Priority</div>
                            <div class="newsDescription">
                                При покупке трех одинаковых позиций текстиля — четвертую вы получите в подарок
                            </div>
                            <div class="newsLink"><a href="/news/111">Подробнее</a></div>
                        </div>
                        <div class="newsBlock" data="111">
                            <div class="newsDate">
                                <svg class="icon" viewBox="0 0 12 12">
                                    <path d="M11.4545 4.36353H10.9091H1.0909H0.545461H0V11.4544C0 11.7557 0.244219 11.9999 0.545461 11.9999H11.4546C11.7558 11.9999 12 11.7557 12 11.4544V4.36353H11.4545ZM4.00001 9.2726C4.00001 9.57385 3.75579 9.81806 3.45455 9.81806H2.72728C2.42604 9.81806 2.18182 9.57385 2.18182 9.2726V8.54534C2.18182 8.2441 2.42604 7.99988 2.72728 7.99988H3.45455C3.75579 7.99988 4.00001 8.2441 4.00001 8.54534V9.2726Z"></path>
                                    <path d="M11.4545 1.0909H8.36365V0.545461C8.36365 0.244219 8.11943 0 7.81819 0C7.51694 0 7.27273 0.244219 7.27273 0.545461V1.09092H4.72727V0.545461C4.72727 0.244219 4.48305 0 4.18181 0C3.88057 0 3.63635 0.244219 3.63635 0.545461V1.09092H0.545461C0.244219 1.0909 0 1.33512 0 1.63636V3.27272H0.545461H1.09092H10.9091H11.4546H12V1.63636C12 1.33512 11.7558 1.0909 11.4545 1.0909Z"></path>
                                </svg>
                                01.07.2021
                            </div>
                            <div class="newsTitle" onclick="window.location.href = '/news/111'">Разъяснения по программе лояльности Green Priority</div>
                            <div class="newsDescription">
                                При покупке трех одинаковых позиций текстиля — четвертую вы получите в подарок
                            </div>
                            <div class="newsLink"><a href="/news/111">Подробнее</a></div>
                        </div>
                        <div class="newsBlock" data="111">
                            <div class="newsDate">
                                <svg class="icon" viewBox="0 0 12 12">
                                    <path d="M11.4545 4.36353H10.9091H1.0909H0.545461H0V11.4544C0 11.7557 0.244219 11.9999 0.545461 11.9999H11.4546C11.7558 11.9999 12 11.7557 12 11.4544V4.36353H11.4545ZM4.00001 9.2726C4.00001 9.57385 3.75579 9.81806 3.45455 9.81806H2.72728C2.42604 9.81806 2.18182 9.57385 2.18182 9.2726V8.54534C2.18182 8.2441 2.42604 7.99988 2.72728 7.99988H3.45455C3.75579 7.99988 4.00001 8.2441 4.00001 8.54534V9.2726Z"></path>
                                    <path d="M11.4545 1.0909H8.36365V0.545461C8.36365 0.244219 8.11943 0 7.81819 0C7.51694 0 7.27273 0.244219 7.27273 0.545461V1.09092H4.72727V0.545461C4.72727 0.244219 4.48305 0 4.18181 0C3.88057 0 3.63635 0.244219 3.63635 0.545461V1.09092H0.545461C0.244219 1.0909 0 1.33512 0 1.63636V3.27272H0.545461H1.09092H10.9091H11.4546H12V1.63636C12 1.33512 11.7558 1.0909 11.4545 1.0909Z"></path>
                                </svg>
                                01.07.2021
                            </div>
                            <div class="newsTitle" onclick="window.location.href = '/news/111'">Разъяснения по программе лояльности Green Priority</div>
                            <div class="newsHashtag" onclick="window.location.href = '/news/tag/акция'"># акция</div>
                            <div class="newsDescription">
                                При покупке трех одинаковых позиций текстиля — четвертую вы получите в подарок
                            </div>
                            <div class="newsLink"><a href="/news/111">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container font-gotham">
            <?php
            $breadcrumb = ['/' => 'Главная', '/news' => 'Новости', '/news/1111' => 'Название новости'];
            include 'modules/breadcrumb.php';
            ?>
            <style>
                body {
                    background: white;
                }
                .news-container {
                    margin-top: 50px;
                }
            </style>
            <div class="news-container">
                <div class="news_content">

                    <div class="hashtag">
                        # <a href="/news/tag/акция">акция</a>
                    </div>

                    <div class="title">
                        Акция! 3+1 на текстиль AQUAmagic
                    </div>

                    <div class="description">
                        При покупке трех одинаковых позиций текстиля — четвертую вы получите в подарок
                    </div>

                    <div class="text">
                        <p>Выгодная арифметика!</p>
                        <p>С 5 июля (10:00 по мск) по 6 июля (23:59 по мск) при покупке трех позиций текстиля — четвертую вы получите в подарок!</p>
                        <p>Как это работает?</p>
                        <p>При добавлении в корзину 3 одинаковых продуктов из выделенного ассортимента, 4 позиция автоматически добавится бесплатно. </p>

                        <p><a href="">#02251 Салфетка универсальная Aquamagic UJUT оранжевая</a> подходит для любых загрязнений. Отлично впитывает, не оставляет разводов и ворсинок, придает безупречный вид любой поверхности.</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>

    <!-- News page -->
    <script src="/js/ui/news.js"></script>
</body>

</html>