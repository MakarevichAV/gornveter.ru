<?php
    include($_SERVER['DOCUMENT_ROOT'].'/control/connect.php');

    $sql_get_contact = "SELECT * FROM `contact` WHERE `id` = 1";
    $result_get_contact = mysqli_query($link, $sql_get_contact);
    $result_get_contact = mysqli_fetch_assoc($result_get_contact);
    $tel1 = $result_get_contact['tel1'];
    $tel2 = $result_get_contact['tel2'];
    $mail = $result_get_contact['mail'];

    $sql_get_social = "SELECT * FROM `social`";
    $result_get_social = mysqli_query($link, $sql_get_social);
    $social_nets = [];
    while ($row = mysqli_fetch_assoc($result_get_social)) {
        $social_nets[] = $row;
    }
    // $result_get_social = mysqli_fetch_assoc($result_get_social);
?>

<pre>
        <?php 
        print_r($social_nets);
        ?>
        </pre>