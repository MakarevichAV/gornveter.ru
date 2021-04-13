<?php
    include('auth_control.php');
    include('connect.php');
    $sql_get_contact = "SELECT * FROM `contact` WHERE `id` = 1";
    $result_get_contact = mysqli_query($link, $sql_get_contact);
    $result_get_contact = mysqli_fetch_assoc($result_get_contact);
    $template['tel1'] = $result_get_contact['tel1'];
    $template['tel2'] = $result_get_contact['tel2'];
    $template['mail'] = $result_get_contact['mail'];
    $template['addr'] = $result_get_contact['addr'];
    $sql_get_social = "SELECT * FROM `social` ORDER BY `id` ASC";
    $result_get_social = mysqli_query($link, $sql_get_social);
    $template['social'] = array();
    foreach($result_get_social as $key){
        array_push($template['social'], $key);
    }
    function spanw_social(){
        global $template;
        foreach($template['social'] as $key){
            // print_r($key);
            // print_r('</br>');
            $status = '';
            if($key['active']){
                $status = 'checked';
            }
            echo'<form action="" class="f_social" method="POST">
            <div class="social_item">
                <input type="hidden" name="target" value="edit_social">
                <input type="hidden" name="id" value="'.$key['id'].'">
                <input id="check1" type="checkbox" name="check" value="'.$key['active'].'" '.$status.'>
                <div class="social_ico '.$key['name'].'"></div>
                <input type="text" name="link" placeholder="'.$key['link'].'" value="'.$key['link'].'">
                <button type="submit">Применить</button>
            </div>
        </form>';
        }
    }
    include('close.php');
?>
<?php
    if(isset($_POST)){
        // print_r($_POST);
        if(!empty($_POST)){
            if(isset($_POST['target'])){
                if(!empty($_POST['target'])){
                    switch ($_POST['target']) {
                        case 'edit_contact':
                            // echo "edit_contact";
                            if(isset($_POST['tel1'])){
                                if(!empty($_POST['tel1'])){
                                    if(isset($_POST['tel2'])){
                                        if(isset($_POST['email'])){
                                            if(!empty($_POST['email'])){
                                                if(isset($_POST['addr'])){
                                                    if(!empty($_POST['addr'])){
                                                        $tel1 = $_POST['tel1'];
                                                        $tel2 = $_POST['tel2'];
                                                        $email = $_POST['email'];
                                                        $addr = $_POST['addr'];
                                                        print_r('200(OK)');
                                                        include('connect.php');
                                                        $sql_update_contact_info = "UPDATE `contact` SET `company_name` = 'Горный ветерок', `tel1` = '$tel1', `tel2` = '$tel2', `mail` = '$email', `addr` = '$addr' WHERE `contact`.`id` = 1";
                                                        $result_update_contact_info = mysqli_query($link, $sql_update_contact_info);
                                                        include('close.php');
                                                        if($result_update_contact_info){
                                                            header("Refresh: 0");
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            break;
                        case 'edit_social':
                            if(isset($_POST['id'])){
                                if(!empty($_POST['id'])){
                                    if(isset($_POST['link'])){
                                        if(!empty($_POST['link']) || 1){
                                            print_r($_POST);
                                            $social_ID = $_POST['id'];
                                            // $social_active = $_POST['check'];
                                            $social_link = $_POST['link'];
                                            $social_active = 0;
                                            if(isset($_POST['check'])){
                                                $social_active = 1;
                                            }
                                            $sql_update_social = "UPDATE `social` SET `active` = $social_active, `link` = '$social_link' WHERE `social`.`id` = $social_ID";
                                            include('connect.php');
                                            $result_update_social = mysqli_query($link, $sql_update_social);
                                            include('close.php');
                                            if($result_update_social){
                                                header("Refresh: 0");
                                            }
                                        }
                                    }
                                }
                            }
                            break;
                        case 2:
                            echo "i равно 2";
                            break;
                    }
                }
            }
        }
    }
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Edit Contact</title>
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
                <form action="" class="f_contact" method="POST">
                    <input type="hidden" name="target" value="edit_contact">
                    <h1>Контакты</h1>
                    <h2>Телефон: </h2>
                    <!-- <input type="text" placeholder="908 254-88-61" pattern="2-[0-9]{3}-[0-9]{3}"> -->
                    <input type="text" name="tel1" placeholder="+7 908 254-88-61" value="<?= $template['tel1']; ?>">
                    <h2>Доп. телефон: </h2>
                    <input type="text" name="tel2" placeholder="+7 908 254-88-61" value="<?= $template['tel2']; ?>">
                    <h2>Email: </h2>
                    <input type="text" name="email" placeholder="email@mail.ru" value="<?= $template['mail']; ?>">
                    <h2>Адрес: </h2>
                    <input type="text" name="addr" placeholder="Введите адрес" value="<?= $template['addr']; ?>">
                    <button type="submit" class="bt">Применить</button>
                </form>
                <div class="line"></div>
                <h1>Соц. сети</h1>
                <!-- <form action="" class="f_social" method="POST">
                    <div class="social_item">
                        <input type="hidden" name="target" value="edit_social">
                        <input type="hidden" name="id" value="1">
                        <input id="check1" type="checkbox" name="check" value="1" checked>
                        <div class="social_ico viber"></div>
                        <input type="text" name="link" placeholder="https://vk.com/club007">
                        <button type="submit">Применить</button>
                    </div>
                </form> -->
                <?php spanw_social(); ?>
            </div>
        </div>
    </div>
    <script src="js/bind_left_btn.js"></script>

</body>
</html>