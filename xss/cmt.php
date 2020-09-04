<?php
 require_once("../conn.php"); 

$name = $_POST['name'];
$com = mysqli_real_escape_string($conn,$_POST['comment']);

if(isset($_POST['name'])){

    $sql_insert = mysqli_query($conn,"INSERT INTO comment(name,comment)VALUES('$name','$com')");

    if(!$sql_insert){
        die('There\'s an error Shit Head!');
    }else{
        echo "Comment Submitted!";
    }
}