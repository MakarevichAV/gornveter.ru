<?php
    include('auth_control.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Control</title>
</head>
<body>
    <div class="wrapper">
        <div class="main">
            <div class="site">
                <div class="block">
                    <div class="btn info">
                        <div class="ico info"></div>
                    </div>
                    <div class="btn help">
                        <div class="ico help"></div>
                    </div>
                    <div class="btn feedback"></div>
                </div>
            </div>
            <div class="nav">
                <div class="btn contact" id="btnContact">
                    <div class="ico contact"></div>
                    <div class="text">Контакты</div>
                </div>
                <div class="btn order" id="btnOrder">
                    <div class="ico order"></div>
                    <div class="text">Заявки</div>
                </div>
                <div class="btn product" id="btnProduct">
                    <div class="ico product"></div>
                    <div class="text">Продукция</div>
                </div>
                <div class="btn brand" id="btnBrand">
                    <div class="ico brand"></div>
                    <div class="text">Бренды</div>
                </div>
                <div class="btn price" id="btnPrice">
                    <div class="ico price"></div>
                    <div class="text">Прайс лист</div>
                </div>
                <div class="btn feedback" id="btnFeedback">
                    <div class="ico feedback"></div>
                    <div class="text">Отзывы</div>
                </div>
                <div class="btn profile" id="btnProfile">
                    <div class="ico profile"></div>
                    <div class="text">Профиль</div>
                </div>
                <div class="btn contact">
                    <div class="ico contact"></div>
                    <div class="text">Настройки</div>
                </div>
                <div class="btn contact">
                    <div class="ico contact"></div>
                    <div class="text">Выход</div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>