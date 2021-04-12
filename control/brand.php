<?php
    include('auth_control.php');
    // Пути загрузки файлов
    $path = '../images/brands/';
    // $tmp_path = 'tmp/';
    // Массив допустимых значений типа файла
    $types = array('image/gif', 'image/png', 'image/jpeg');
    // Максимальный размер файла
    $size = 1024000;
    
    // Обработка запроса
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['picture'])) 
    {
    // Проверяем тип файла
    if (!in_array($_FILES['picture']['type'], $types))
    die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');
    
    // Проверяем размер файла
    if ($_FILES['picture']['size'] > $size)
    die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');
    
    // Загрузка файла и вывод сообщения
    // print_r($_FILES['picture']['name']);
    $today = date("dHis");
    $file_new_name = "ico".$today;
    $_FILES['picture']['name'] = $file_new_name.".png";
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
    echo 'Что-то пошло не так';
    else
    echo 'Загрузка удачна <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a> ' ;
    $sql_add_brand = "INSERT INTO `brand` (`id`, `ico`) VALUES (NULL, '$file_new_name');";
    include('connect.php');
    $result_add_brand = mysqli_query($link, $sql_add_brand);
    include('close.php');
    if($result_add_brand){
        print_r('OK(200)');
    }
    }


    if(isset($_POST)){
        if(!empty($_POST)){
            if(isset($_POST['target'])){
                if(!empty($_POST['target'])){
                    if($_POST['target'] == 'delbrand'){
                        if(isset($_POST['id'])){
                            if(!empty($_POST['id'])){
                                $id = $_POST['id'];
                                $sql_del_brand = "DELETE FROM `brand` WHERE `brand`.`id` = $id";
                                include('connect.php');
                                $result_del_brand = mysqli_query($link, $sql_del_brand);
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
    <link rel="stylesheet" href="styles/brand.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Edit Brand</title>
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
                <h1>Добавить новый бренд</h1>
                <div class="alert">Дополнительная информация - помощь по загрузке/добавлению новых файлов</div>
                <form method="post" enctype="multipart/form-data">
                <p>Загрузка фото бренда: </p>
                <input type="file" name="picture">
                <input type="submit" value="Загрузить">
                </form>
                <h1>Удалить бренд</h1>
                <div class="del">
                    <!-- <div class="item" style="background-image: url('../images/brands/ch.png')">
                        <form action="" method="POST">
                            <input type="hidden" name="target" value="delbrand">
                            <input type="hidden" name="id">
                            <button>Удалить</button>
                        </form>
                    </div> -->
                    <?php spawn_brand(); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bind_left_btn.js"></script>

</body>
</html>