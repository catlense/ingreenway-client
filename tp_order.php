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
            <p class="title selected">Выбраные товары <img src="/static/images/ui-icons/attention.svg" class="open-attention" data="main" alt=""></p>
            <div class="attention attention-main">
                <div class="close">&times;</div>
                <p>Доставка кальянов и табачной продукции не осуществляется. Зарезервированные в заказе позиции забронированы именно за вами. Данные позиции будут отложены и доступны к покупке в фирменном магазине или пункте выдачи Sweet Smoke Вашего города при получении своего заказа по предъявлению паспорта (18+).</p>
            </div>
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
            <p class="title selected">Рекомендованные товары</p>
            <div class="recommended-products">
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
            <div class="container font-gotham">
                <div class="head-price">
                    <p class="count_product">Общее количество товаров 3 шт. <img src="/static/images/ui-icons/attention.svg" class="open-attention" data="count" alt=""></p>
                    <div class="attention attention-count hidden">
                        <div class="close">&times;</div>
                        <p>Доставка кальянов и табачной продукции не осуществляется. Зарезервированные в заказе позиции забронированы именно за вами. Данные позиции будут отложены и доступны к покупке в фирменном магазине или пункте выдачи Sweet Smoke Вашего города при получении своего заказа по предъявлению паспорта (18+).</p>
                    </div>
                </div>
                <div class="pay_del">
                    <p class="title">Оплата и доставка</p>
                    <p class="delivery">Доставка - <span>ожидает согласования</span></p>
                    <p class="payment">Оплата - <span>ожидает согласования</span></p>
                </div>
                <div class="result_price">
                    <p class="res">Итого</p>
                    <p class="price">3 690.00 <sup>RUB</sup></p>
                </div>
            </div>
            <button class="font-gotham">Оформить заказ</button>
            <div class="container font-gotham">
                <p class="privacy">
                    Оформляя заказ, вы соглашаетесь с <a href="/privacy">Политикой обработки персональных данных</a> и принимаете условия <a href="/offer">Оферты</a>.
                </p>
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

    <!-- Page scripts -->
    <script src="/js/ui/order.js"></script>
</body>

</html>