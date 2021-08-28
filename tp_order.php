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
    ?>

    <div class="container">
        <?php
        $breadcrumb = ['/' => 'Главная', '/order/1' => 'Моя заявка'];
        include 'modules/breadcrumb.php';
        ?>
    </div>
    <div class="container order">
        <div class="left-column font-gotham">
            <h1>Оформление заказа</h1>
            <p class="desc">Заполните контактные данные, после чего мы максимально быстро свяжемся с Вами для выбора удобного способа оплаты и доставки</p>
            <p class="title">Информация о покупателе</p>
            <div class="modify_input">      
                <input type="text" class="font-gotham" required>
                <span class="bar"></span>
                <label>Имя</label>
            </div>
            <div class="modify_input">      
                <input type="text" class="font-gotham" required>
                <span class="bar"></span>
                <label>Телефон</label>
            </div>
            <p class="title selected">Выбраные товары</p>
            <div class="selected-products">
                <?php
                $carts = [
                    ['id'=>1, 'image'=>'/static/images/products/1.jpg', 'title'=>'Веллаб Артемия / Wellab Artemia, 30 капсул', 'price'=>490, 'count'=>1],
                    ['id'=>2, 'image'=>'/static/images/products/2.jpg', 'title'=>'Веллаб Артемия / Wellab Artemia, 40 капсул', 'price'=>690, 'count'=>3],
                ];
                foreach($carts as $cart) {
                    include 'modules/cart_line.php';
                }
                ?>
            </div>
        </div>
        <div class="right-column">
            <div class="container">
                
            </div>
        </div>
    </div>

    <?php
    include 'modules/popup__Join.php';
    include 'modules/popup__Cart.php';
    include 'modules/popup__Cookies.php';
    include 'modules/popup__Support.php';
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>
</body>

</html>