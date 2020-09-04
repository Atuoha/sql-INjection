<?php
      session_start();
      $conn = mysqli_connect("localhost","root","","sql_inject");
      $_SESSION['csrf_email'] = 'smith@gmail.com';



     if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            if(!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])){
                  die('INVALID TOKEN');
            }   
      }  


      $_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));

?>