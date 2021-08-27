<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница заказа</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_order.css">
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

    <div class="container">
        <?php
        $breadcrumb = ['/' => 'Главная', '/order/1' => 'Моя заявка'];
        include 'modules/breadcrumb.php';
        ?>
    </div>

    <?php
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>
</body>

</html>