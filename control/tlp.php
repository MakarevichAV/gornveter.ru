<?php
    include('auth_control.php');
    // Пути загрузки файлов
    $path = 'ico/brand/tmp/';
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
    
?>
<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
 <title>Загрузка изображения с изменением размеров</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
 <h1>Загрузка изображения с изменением размеров</h1>
 <form method="post" enctype="multipart/form-data">
 <input type="file" name="picture">
 <input type="submit" value="Загрузить">
 </form>
 </body>
</html>