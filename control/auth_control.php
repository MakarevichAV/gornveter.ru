<?php
    session_start();
    if(isset($_POST)){
        if(!empty($_POST)){
            if(isset($_POST['type'])){
                if(!empty($_POST['type'])){
                    if($_POST['type'] == 'auth'){
                        if(isset($_POST['login']) && isset($_POST['password'])){
                            if(!empty($_POST['login']) && !empty($_POST['password'])){
                                $login = (string) $_POST['login'];
                                $password = (string) $_POST['password'];
                                $passHash = md5(md5('forn'.$password).sha1($password.'veter'));
                                $key = md5(sha1('gorn'.time().'veter'));
                                $sql_get_user = "SELECT * FROM `user` WHERE `login` = '$login'";
                                include('connect.php');
                                $result_get_user = mysqli_query($link, $sql_get_user);
                                include('close.php');
                                if($result_get_user){
                                    // gornveter2021
                                    $user = mysqli_fetch_assoc($result_get_user);
                                    $user_ID = $user['id'];
                                    $user_pass = $user['passwd'];
                                    if($passHash == $user_pass){
                                        $sql_update_user_key = "UPDATE `user` SET `user_key` = '$key' WHERE `user`.`id` = $user_ID";
                                        include('connect.php');
                                        $result_update_user_key = mysqli_query($link, $sql_update_user_key);
                                        include('close.php');
                                        if($result_update_user_key){
                                            $_SESSION['key'] = $key;
                                            $_SESSION['user'] = $user_ID;
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
    if(isset($_SESSION['key'])){
        if(!empty($_SESSION['key'])){
            if(isset($_SESSION['user'])){
                if(!empty($_SESSION['user'])){
                    $u_ID = (int) $_SESSION['user'];
                    $u_Key = (string) $_SESSION['key'];
                    $sql_check_user = "SELECT * FROM `user` WHERE `id` = $u_ID";
                    include('connect.php');
                    $result_check_user = mysqli_query($link, $sql_check_user);
                    include('close.php');
                    if($result_check_user){
                        $result = mysqli_fetch_assoc($result_check_user);
                        if($result['user_key'] == $u_Key){

                        }else{
                            include('auth.php');
                            die;
                        }
                    }
                }
            }
        }
    }else{
        include('auth.php');
        die;
    }
?>