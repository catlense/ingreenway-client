<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница категории</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_category.css">

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
        $breadcrumb = ['/'=>'Главная', '/shop/home'=>'Категория продукта'];
        include 'modules/breadcrumb.php';
        ?>

        <h1 class="title">Дом <span>/ 3</span></h1>
        <div class="filters-block">asdasd</div>
        <div class="catalog-block">
            <h1 class="title">Природный пятновыводитель <span>/ 1</span></h1>
            <div class="catalog-list">
                <?php
                    $product = ['id'=>1, 'title'=>'Название продукта #3', 'link'=>'/product', 'price'=>350, 'mark' => ['new'], 'image'=>'/static/images/products/3.jpg'];
                    include 'modules/product.php';
                ?>
            </div>
        </div>
    </div>

    <?php
        include 'modules/footer_pc.php';
        include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>
    <script src="/js/ui/category.js"></script>

</body>
</html>