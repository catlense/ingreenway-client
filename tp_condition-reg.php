<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Условия регистрации</title>

    <!-- Header PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleHeaderPC.css">

    <!-- Footer PC css -->
    <link rel="stylesheet" href="/styles/common/ModuleFooterPC.css">

    <!-- UIKit -->
    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="/styles/pages/page_terms.css">
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
        $breadcrumb = ['/' => 'Главная', '/terms' => 'Условия регистрации'];
        include 'modules/breadcrumb.php';
        ?>

        <div class="faq">
            <h1>Условия регистрации</h1>
            <div class="reg-container font-gotham">
                <h4>Правила регистрации нового члена клуба на сайте.</h4>
                <p>Coral Club — это сообщество единомышленников, которые, выбирая продукцию компании, выбирают перемены к лучшему. ЗОЖ — это стиль нашего комьюнити, а Сoral Сlub — место, где можно встретить людей, разделяющих ценности здоровья, красоты и развития.</p>
                <p>Вступить в клуб можно по рекомендации — приглашению члена клуба. Рекомендатель — ваш навигатор по продуктам и проводник в мир бизнес-возможностей, которые предоставляет Coral Club для потребителей и дистрибьюторов. Если кто-то из членов вашей семьи (супруги, находящиеся в зарегистрированном и незарегистрированном браке, но ведущие совместное хозяйство; родители; дети; родные братья и сестры) уже является членом клуба, то вам следует в качестве рекомендателя указать именно его.</p>
            </div>
        </div>

    </div>

    <?php
    include 'modules/footer_pc.php';
    include 'modules/footer_mob.php';
    ?>

    <!-- UI scripts -->
    <script src="/js/ui/flash.js"></script>

    <!-- Page scripts -->
    <script src="/js/ui/terms.js"></script>

</body>

</html>