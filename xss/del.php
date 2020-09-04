<?php
 require_once("../conn.php"); 


 if(isset($_POST['data'])){
     $del_id = $_POST['data'];

    $sql_del = mysqli_query($conn,"DELETE FROM comment WHERE id = '$del_id' ");

    if(!$sql_del){
        die('Error with deletion');
    }

    echo 'Item deleted successfully buddy';

 }else{
     echo 'No item to delete buddy';
 }

?>