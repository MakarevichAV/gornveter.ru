<?php
    include('auth_control.php');
    // Пути загрузки файлов
    $path = '../images/goods/';
    $tmp_path = 'tmp/';
    // Массив допустимых значений типа файла
    $types = array('image/gif', 'image/png', 'image/jpeg');
    // Максимальный размер файла
    $size = 1024000;
    
    // Обработка запроса
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    // Проверяем тип файла
    if (!in_array($_FILES['picture']['type'], $types))
    die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');
    
    // Проверяем размер файла
    if ($_FILES['picture']['size'] > $size)
    die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');
    
    // Загрузка файла и вывод сообщения
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
    echo 'Что-то пошло не так';
    else
    echo 'Загрузка удачна <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a> ' ;
    }


    if(isset($_POST)){
        print_r($_POST);
        if(!empty($_POST)){
            if(isset($_POST['target'])){
                if(!empty($_POST['target'])){
                    if($_POST['target'] == 'del'){
                        if(isset($_POST['del_id'])){
                            if(!empty($_POST['del_id'])){
                                $id = $_POST['del_id'];
                                $sql_del_product = "DELETE FROM `products` WHERE `products`.`id` = $id";
                                include('connect.php');
                                $result_del_product = mysqli_query($link, $sql_del_product);
                                include('close.php');
                            }
                        }
                    }
                }
            }
        }
    }

    function spawn_brand(){
        $sql_get_brand = "SELECT * FROM `brand`";
        include('connect.php');
        $result_get_brand = mysqli_query($link, $sql_get_brand);
        foreach($result_get_brand as $key){
            $id = $key['id'];
            $ico = $key['ico'];
            echo"<div class=\"item\" style=\"background-image: url('../images/brands/".$ico.".png')\">
            <form method='POST'>
                <input type='hidden' name='target' value='delbrand'>
                <input type='hidden' name='id' value='".$id."'>
                <button>Удалить</button>
            </form>
        </div>";
        }
    }
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/product.css">
    <title>Edit Product</title>
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
                <h1>Добавить новую продукцию</h1>
                <div class="alert">Дополнительная информация - помощь по загрузке/добавлению новых файлов</div>
                <form method="post" enctype="multipart/form-data">
                <p>Загрузка фото бренда: </p>
                <input type="file" name="picture">
                <input type="text" name="name" placeholder="Fujitsu">
                <input type="number" name="price" placeholder="цена">
                <!-- <input type="submit" value="Загрузить"> -->
                <button type="submit">Загрузить</button>
                </form>
                <div class="line"></div>
                <h1>Редактировать продукцию</h1>
                <div class="product_card">
                    <div class="logo">
                        <div class="logo_logo" style="background-image: url('../images/goods/jax.jpg')">
                            <div class="logo_edit">
                                <div class="logo_edit_text">изменить</div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" class="card_info">
                        <div class="info">
                            <div class="name">
                                <div class="text">Название</div>
                                <input type="text" name="name" placeholder="Введите название">
                            </div>
                            <div class="price">
                                <div class="text">Цена</div>
                                <input type="number" name="price" placeholder="Укажите цену">
                            </div>
                        </div>
                        <div class="btns">
                            <div class="del" data-id="1">удалить</div>
                            <!-- <div class="accept">применить</div> -->
                            <button type="submit" class="accept">применить</button>
                        </div>
                        </form>
                </div>
                <!-- del -->
                <form action="" method="POST" id="form_del">
                    <input type="hidden" name="target" value="del">
                    <input type="hidden" name="del_id" value="" id="inp_id">
                </form>
                <!-- /del -->
            </div>
        </div>
    </div>
    <!-- <form action="" method="POST">
        <input type="hidden" name="hidden" value="OK">
        <button type="submit">OK</button>
    </form> -->
    <script src="js/bind_left_btn.js"></script>
    <script src="js/product.js"></script>

</body>
</html>