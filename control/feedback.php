<?php
    include('auth_control.php');
    if(isset($_POST)){
        if(!empty($_POST)){
            if(isset($_POST['type'])){
                if($_POST['type'] == 'add'){
                    if(isset($_POST['name']) && isset($_POST['date']) && isset($_POST['text'])){
                        if(!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['text'])){
                            $name = $_POST['name'];
                            $date = $_POST['date'];
                            $text = $_POST['text'];
                            print_r('Имя: '.$name);
                            print_r('</br>');
                            print_r('Дата: '.$date);
                            print_r('</br>');
                            print_r('Отзыв: '.$text);
                            $sql_add_feedback = "INSERT INTO `feedback` (`id`, `name`, `photo`, `date`, `text`) VALUES (NULL, '$name', 'default', 'date', '$text')";
                            include('connect.php');
                            $result_add_feedback = mysqli_query($link, $sql_add_feedback);
                            include('close.php');
                        }
                    }
                }
            }elseif($_POST['type'] == 'del'){
                if(isset($_POST['id'])){
                    if(!empty($_POST['id']) && $_POST['id'] > 0){
                        $id = (int) $_POST['id'];
                        $sql_del_feedback = "DELETE FROM `feedback` WHERE `feedback`.`id` = $id";
                        include('connect.php');
                        $result_del_feedback = mysqli_query($link, $sql_del_feedback);
                        include('close.php');
                    }
                }
            }elseif($_POST['type'] == 'edit'){

            }
        }
    }


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

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/feedback.css">
    <title>Edit Feedback</title>
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
                <h1>Добавить новый отзыв</h1>
                <div class="alert">Дополнительная информация - помощь по загрузке/добавлению новых файлов</div>
                    <form action="" method="POST">
                        <textarea name="text" id="" cols="30" rows="10" placeholder="Текст отзыва" required></textarea>
                        <div class="">
                            <input type="text" name="name" vlue="" placeholder="Имя" required>
                            <input type="date" name="date" value="<?php echo date("Y-m-d");?>" required>
                            <button type="submit">Добавить</button>
                        </div>
                        <input type="hidden" name="type" value="add">
                    </form>
                    <div class="line"></div>
                    <h1>Редактирование отзывов</h1>
                    <form action="" method="POST">
                        <textarea name="text" id="" cols="30" rows="10" placeholder="Текст отзыва" required></textarea>
                        <div class="">
                            <input type="text" name="name" vlue="" placeholder="Имя" required>
                            <input type="date" name="date" value="<?php echo date("Y-m-d");?>" required>
                            <button type="submit">Добавить</button>
                            <div class="del">Удалить</div>
                        </div>
                        <input type="hidden" name="type" value="add">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <script src="js/bind_left_btn.js"></script>

</body>
</html>