<?php

    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $usernameCheck = false;
    $passwordCheck = false;
    if(!preg_match("|^[a-zA-Z]{5,25}$|", $name)) {
        echo "Invalid name";
     }

    if($password1 == $password2){
        
        $hash = hash('sha512', $username);
        echo $hash;
        include('connection.php');
        $sql = "INSERT INTO users (user_username, user_password, user_has) VALUES ('$username','$password1','$hash')";
        if($conn->query($sql)==TRUE){
            header('location:../login-register.php?msg=You can now login!');
        }else{
            header('location:../login-register.php?msg=Contact website admin, a severe error has occured');
        }
    }else{
        header('location:../login-register.php?msg=Passwords do not match, go back and try again!');
    }

    

?>