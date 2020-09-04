<?php
    require_once('app/index.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
     $email = $_SESSION['csrf_email'];

    $sql_del = mysqli_query($conn,"DELETE FROM sign_in WHERE email = '$email' ");
    }else{
        die('ERROR 404 CAN\'T PERFROM OPERATION');
    }
?>

