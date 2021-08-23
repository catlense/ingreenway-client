<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница FAQ</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_faq.css">

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


    <div class="faq">
        <div class="head font-gotham">
            <h1>Раздел помощи и поддержки</h1>
            <p>Контекстный помощник</p>
        </div>
    </div>

    <div class="container">
        <?php
            $breadcrumb = ['/'=>'Главная', '/shop/home'=>'Категория продукта'];
            include 'modules/breadcrumb.php';
        ?>
    </div>
    <div class="support-content container font-gotham">
        <div class="answers">
            <p class="title">Доставка</p>
            <a href="/faq/payment">Оплата наличными</a>
            <a href="/faq/delivery" class="active">Доставка</a>
            <a href="/faq/payback">Возврат товара</a>
        </div>
        <div class="answer">
            <h1>Доставка</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, dolor dolorum dignissimos veniam vitae exercitationem tenetur officiis quas unde odit earum quos repudiandae delectus, quod a iste et voluptatibus aperiam.</p>
        </div>
    </div>

    <?php
        include 'modules/footer_pc.php';
        include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>

    <script>
        document.querySelector('.support-content .answers').style.top = 
            (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) + 
            (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 20 + 'px';
        document.querySelector('.faq').style.marginTop = (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) + 
            (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 'px';
        document.querySelector('.support-content h1').style.top = (document.querySelector('.flash') ? document.querySelector('.flash').clientHeight : 0) + 
            (window.innerWidth < 890 ? document.querySelector('header.mobile').clientHeight : document.querySelector('header.pc').clientHeight) + 'px';
    </script>
    <style>
        .breadcrumb {
            margin-top: 30px !important;
        }
    </style>
</body>
</html>