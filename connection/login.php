<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    include('connection.php');
    $sql = "SELECT user_username FROM users WHERE user_username = '$username' AND user_password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $rowNum = mysqli_num_rows($result);
        if ($rowNum > 0) {
            // OUTPUT DATA OF EACH ROW
            session_start();
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['username'] = $row['user_username'];
            }
            header('location:../typing.php');
        } else {
            header('location:../login-register.php?msg=<p style="color:red;">Wrong username/password</p>');
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
  
   $conn->close();
?>
