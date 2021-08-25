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
        include 'modules/header_pc.php';
        include 'modules/header_mob.php';
        include 'modules/popup__Join.php';
        include 'modules/popup__Cart.php';
        include 'modules/popup__Cookies.php';
        include 'modules/popup__Support.php';
    ?>

    <div class="container font-gotham">
        <?php
            $breadcrumb = ['/' => 'Главная', '/news' => 'Новости', '/news/1111'=>'Название новости'];
            include 'modules/breadcrumb.php';
        ?>

        <h1 class="title">Новости и события</h1>
    </div>

    <?php
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>
</body>
</html>