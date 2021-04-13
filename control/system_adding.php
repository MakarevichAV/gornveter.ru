<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/product_card.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Add System Info</title>
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
                    <div class="btn back" id="dop_btn_back" title="Вернуться в меню">
                        <div class="ico back"></div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <ul class="menu">
                    <li>Создать продукт</li>
                    <li><a href="./system_editing.php">Изменить продукт</a></li>
                    <li><a href="./product_adding.php">Создать модель</a></li>
                    <li><a href="./product_editing.php">Изменить модель</a></li>
                </ul>
                <h1>Заполнение карточки продукта</h1>
                <form action="">
                    <input type="text" name="system" placeholder="Введите название системы" />
                    <div class="photo-block">
                        <label for="system_photo">
                            <div class="load-file">Загрузить файл</div>
                        </label>
                        <div class="photo-block__picture" ></div>
                    </div>
                    <input type="file" name="" id="system_photo" style="display:none">

                    <br />
                    <button type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>