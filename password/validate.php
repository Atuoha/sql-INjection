<?php
   session_start();
   ob_start();
   require_once("../conn.php");
   
   if(isset($_POST['email'])){
       $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
       $pass = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pass']));

        //pulling user if exists
       $sql_pull_user_det = mysqli_query($conn,"SELECT * FROM sign_in WHERE email = '$email' ");
       if(!$sql_pull_user_det){
           die('Error with pulling using details');
       }

       while($row = mysqli_fetch_array($sql_pull_user_det)){
           $id = $row['id'];
           $db_pass = $row['password'];
       }

       $count_email_res = mysqli_num_rows($sql_pull_user_det);
       if($count_email_res === 1){ 
           // User exists
           if(password_verify($pass,$db_pass)){
                // PASSword valid
                echo "<br><span class='alert alert-success'>Bravo! You're a correct bro</span>";
                $_SESSION['sql_user'] = $id;
           }else{
               // password invalid
                echo "<br><span class='alert alert-danger'>Opps! Password mismatch</span>";

           }

       }else{   // User doesn't exist
           echo "<br><span class='alert alert-danger'>Opps! We couldn't find your account</span>";
       }
   }
?>