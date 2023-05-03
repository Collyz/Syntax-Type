<?php

    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $hash = hash('sha512', $username);
    include('connection.php');
    $sql = "INSERT INTO users (user_username, user_password, user_hash) VALUES ('$username','$password1','$hash')";
    if($conn->query($sql)==true){
        header('location:../login-register.php?msg=You can now login!<br>This is your hash, save it somewhere: '.
        $hash.'<br>DO NOT LOSE THIS HASH');
    }else{
        header('location:../login-register.php?msg=Contact website admin, a severe error has occured');
    }

    $conn->close();

    

?>