<?php
require_once('conn.php');

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $pass  = $_POST['pass'];


        //FOR REGISTRATION  ---------------------
        // //password hashing 
        $hash_pass = password_hash($pass, PASSWORD_BCRYPT,array('cost' => 12));

        $sql_insert = mysqli_query($conn,"INSERT INTO sign_in(email,password)VALUES('$email','$hash_pass')");

        if(!$sql_insert){
            die('ERROR WITH SQL INSERT');
        }
        echo "Registration was successfully made";
        // ------------------------------------------------  FOR REGISTRATION

        
        // FOR LOGIN

        // $user_search = mysqli_query($conn,"SELECT * FROM sign_in WHERE email = '$email' ");
        // if(mysqli_num_rows($user_search) == 1){
        //     echo "User Exists";
        // }else{
        //     echo "User not found!";
        // }
        
    }

?>