<!-- category
    1 - Монтаж сплит-систем
    2 - Прокладка коммуникаций(черновой этап)
    3 - Прокладка коммуникаций(чистовой этап)
    4 - Ремонт и чистка
 -->
 <?php
    include('auth_control.php');
    if(isset($_POST)){
        if(!empty($_POST)){
            if(isset($_POST['type'])){
                if(!empty($_POST['type'])){
                    if($_POST['type'] == 'edit_item'){
                        if(isset($_POST['name'])){
                            if(!empty($_POST['name'])){
                                if(isset($_POST['price'])){
                                    if(!empty($_POST['price'])){
                                        if(isset($_POST['id'])){
                                            if(!empty($_POST['id']) && $_POST['id'] != 0 && $_POST['id'] > 0){
                                                $id = (int) $_POST['id'];
                                                $name = $_POST['name'];
                                                $price = $_POST['price'];
                                                $sql_edit_item = "UPDATE `price_list` SET `name` = '$name', `price` = '$price' WHERE `price_list`.`id` = $id";
                                                include('connect.php');
                                                $result_edit_item = mysqli_query($link, $sql_edit_item);
                                                include('close.php');
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }elseif($_POST['type'] == 'del_item'){
                        if(isset($_POST['id'])){
                            if(!empty($_POST['id']) && $_POST['id'] != 0 && $_POST['id'] > 0){
                                $id = (int) $_POST['id'];
                                $sql_del_item = "DELETE FROM `price_list` WHERE `price_list`.`id` = $id";
                                include('connect.php');
                                $result_del_item = mysqli_query($link, $sql_del_item);
                                include('close.php');
                            }
                        }
                    }elseif($_POST['type'] == 'add_item'){
                        if(isset($_POST['category'])){
                            if(!empty($_POST['category']) && $_POST['category'] != 0 && $_POST['category'] > 0){
                                if(isset($_POST['name'])){
                                    if(!empty($_POST['name'])){
                                        if(isset($_POST['price'])){
                                            if(!empty($_POST['price'])){
                                                $name = (string) $_POST['name'];
                                                $price = (string) $_POST['price'];
                                                $category = (int) $_POST['category'];
                                                $sql_add_price = "INSERT INTO `price_list` (`id`, `name`, `price`, `category_ID`) VALUES (NULL, '$name', '$price', '$category')";
                                                include('connect.php');
                                                $result_edit_item = mysqli_query($link, $sql_add_price);
                                                include('close.php');
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    function spawn_cat($targ){
        $id = $targ;
        $sql_get_cat = "SELECT * FROM `price_list` WHERE `category_ID` = $id";
        include('connect.php');
        $result_get_cat = mysqli_query($link, $sql_get_cat);
        if($result_get_cat){
            foreach($result_get_cat as $key){
                $key_ID = $key['id'];
                $key_NAME = $key['name'];
                $key_PRICE = $key['price'];
                $key_category = $key['category_ID'];
                echo'<form action="" class="item" method="POST">
                <div class="del" data-del="'.$key_ID.'"></div>
                <input type="hidden" name="type" value="edit_item">
                <input type="hidden" name="id" value="'.$key_ID.'">
                <input type="hidden" name="category" value="'.$key_category.'">
                <input type="text" class="name" name="name" placeholder="Название услуги" value="'.$key_NAME.'">
                <input type="text" class="price" name="price" placeholder="Цена услуги" value="'.$key_PRICE.'">
                <button type="submit"></button>
            </form>';
            }
        }
        include('close.php');
    }
 ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/price.css">
    <title>Edit Price</title>
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
                <!-- <h1>Редактор цен</h1> -->
                <div class="price_block">
                    <h2>Монтаж сплит-систем</h2>
                    <div class="discript">
                        <div class="block">Название услуги</div>
                        <div class="block">Цена</div>
                    </div>
                        <?php spawn_cat(1); ?>
                        <div class="add" data-add="1" data-cat="1"><div class="ico" data-add="2" data-cat="1"></div><div class="text" data-add="3" data-cat="1">Добавить</div></div>
                </div>

                <div class="price_block">
                    <h2>Прокладка коммуникаций (Черновой этап)</h2>
                    <div class="discript">
                        <div class="block">Название услуги</div>
                        <div class="block">Цена</div>
                    </div>
                        <?php spawn_cat(2); ?>
                        <div class="add" data-add="1" data-cat="2"><div class="ico" data-add="2" data-cat="2"></div><div class="text" data-add="3" data-cat="2">Добавить</div></div>
                </div>

                <div class="price_block">
                    <h2>Прокладка коммуникаций (Чистовой этап)</h2>
                    <div class="discript">
                        <div class="block">Название услуги</div>
                        <div class="block">Цена</div>
                    </div>
                        <?php spawn_cat(3); ?>
                        <div class="add" data-add="1" data-cat="3"><div class="ico" data-add="2" data-cat="3"></div><div class="text" data-add="3" data-cat="3">Добавить</div></div>
                </div>

                <div class="price_block">
                    <h2 id="h2">Ремонт и чистка</h2>
                    <div class="discript">
                        <div class="block">Название услуги</div>
                        <div class="block">Цена</div>
                    </div>
                        <?php spawn_cat(4); ?>
                        <div class="add" data-add="1" data-cat="4"><div class="ico" data-add="2" data-cat="4"></div><div class="text" data-add="3" data-cat="4">Добавить</div></div>
                </div>
                <!-- <h3>Черновой этап</h3>
                <h3>Чистовой этап</h3> -->
                <!-- <h2>Ремонт и чистка</h2> -->
            </div>
        </div>
    </div>
    <form action="" method="POST" id="form_del">
        <input type="hidden" name="type" value="del_item">
        <input type="hidden" name="id" value="0" id="form_del_id">
    </form>
    <script src="js/bind_left_btn.js"></script>
    <script src="js/price.js"></script>
</body>
</html>