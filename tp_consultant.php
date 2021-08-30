<?php include 'modules/front.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/common/uikit.css">
    <link rel="stylesheet" href="/static/fonts/fontawesome/all.css">
    <link rel="stylesheet" href="/static/fonts/mdi/materialdesignicons.min.css">

    <title>Консультант бренда Левко Эмма</title>
    <link rel="stylesheet" href="/styles/pages/page_consultant.css">
</head>
<body class="<?php echo $_SESSION['user']->consultant_theme == 0 ? '' : 'dark'; ?>">
    <i class="far fa-moon"></i>
    <div class="content_block font-gotham">
        <div class="avatar">
            <img src="/static/images/photos/avatar.jpg" alt="">
        </div>
        <div class="username">
            Левко Эмма
        </div>

        <div class="description">
            Привет, меня зовут Эмма, я профессиональный бренд консультант. Строю сети из довольных клиентов по всему миру.<br><br>
            Вопросы по продукции, сотрудничеству или нужна консультация? Мои контакты:
        </div>
        <div class="socials">
            <div class="social">
                <svg class="icon icon-tg" xmlns="http://www.w3.org/2000/svg" width="74" height="74" id="icon-tg" viewBox="0 0 34 29">
                    <path d="M33.3342 0.70374C32.7873 0.217311 32.0098 0.0552111 31.3052 0.280604L1.40989 9.84554C0.595148 10.1062 0.0426479 10.8121 0.00233932 11.6437C-0.0379029 12.4754 0.443875 13.2286 1.22973 13.5624L7.23319 16.1118L24.9085 6.59052C25.3403 6.35797 25.8821 6.46664 26.1835 6.84582C26.4851 7.22513 26.4558 7.76131 26.1147 8.10756L15.0954 19.2905L12.8355 27.2154L18.2596 23.2733L24.6737 28.3676C25.0473 28.6645 25.5039 28.8193 25.9695 28.8193C26.1912 28.8192 26.415 28.7842 26.6327 28.7125C27.3077 28.4903 27.8082 27.9556 27.9713 27.2821L33.9456 2.62851C34.1154 1.92771 33.8812 1.19017 33.3342 0.70374Z"></path>
                </svg>
                Telegram
            </div>
            <div class="social">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="">
                    <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                </svg>
                Instagram
            </div>
            <div class="social">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                WhatsApp
            </div>
        </div>
        <div class="consultant" style="line-height:1.5;margin-top: 70px">
            Делай то, что тебе нравится!
        </div>
        <div class="description">
            Хочешь иметь больше свободного времени и решать как его проводить? Тогда ты по адресу! Некоторые мои проекты:
        </div>
        <div class="carts">
            <div class="cart" onclick="window.location.href = '/';">
                <img src="/static/images/consultant-works/main_screen.png" alt="">
                <p>Интернет-магазин эко-товаров</p>
                <a href="/">Смотреть</a>
            </div>
            <div class="cart" onclick="window.location.href = '/';">
                <img src="/static/images/consultant-works/main_screen.png" alt="">
                <p>Интернет-магазин эко-товаров</p>
                <a href="/">Смотреть</a>
            </div>
            <div class="cart" onclick="window.location.href = '/';">
                <img src="/static/images/consultant-works/main_screen.png" alt="">
                <p>Интернет-магазин эко-товаров</p>
                <a href="/">Смотреть</a>
            </div>
        </div>
        <p class="footer">
            Сайт-визитка был сделан в рамках мастер класса <a href="/">ingreenway.club</a> как один из инструментов брендконсультанта.
        </p>
    </div>

    <script>
        document.querySelector('.far.fa-moon').onclick = () => {
            if(document.body.classList.toggle('dark')) {
                fetch('/modules/front.php?method=change_theme_consultant&theme=1')
            } else fetch('/modules/front.php?method=change_theme_consultant&theme=0')
            window.location.href = location.href
        }
    </script>
    <?php if($_SESSION['user']->consultant_theme): ?>
        <style>

            @keyframes animationLinks1 {
                0% {
                    color: #74c044;
                    fill: #74c044;
                }
                50% {
                    color: rgb(221, 221, 221);
                    fill: rgb(221, 221, 221);
                }
                100% {
                    color: rgb(221, 221, 221);
                    fill: rgb(221, 221, 221);
                }
            }
            @keyframes animationLinks2 {
                0% {
                    color: rgb(221, 221, 221);
                    fill: rgb(221, 221, 221);
                }
                50% {
                    color: #74c044;
                    fill: #74c044;
                }
                100% {
                    color: rgb(221, 221, 221);
                    fill: rgb(221, 221, 221);
                }
            }
            @keyframes animationLinks3 {
                0% {
                    color: rgb(221, 221, 221);
                    fill: rgb(221, 221, 221);
                }
                50% {
                    color: rgb(221, 221, 221);
                    fill: rgb(221, 221, 221);
                }
                100% {
                    color: #74c044;
                    fill: #74c044;
                }
            }
            .cart img {
                box-shadow: 0px 15px 25px #24242446;
            }
                .cart img:hover {
                    box-shadow: 0px 25px 25px #0a0a0a46;
                }
        </style>
    <?php endif; ?>
</body>
</html>