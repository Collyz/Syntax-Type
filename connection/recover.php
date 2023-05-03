<?php
    $hash = $_GET['hash'];

    include('connection.php');
    $sql = "SELECT user_username,user_password FROM users WHERE user_hash = '$hash'";
    $result = mysqli_query($conn, $sql);

    $username;
    $password;
    if ($result) {
        $rowNum = mysqli_num_rows($result);
        if ($rowNum > 0) {
            // OUTPUT DATA OF EACH ROW
            while($row = mysqli_fetch_assoc($result)) {
                $username = $row['user_username'];
                $password = $row['user_password'];
            }
            header('location:../recoverAcc.php?msg=<p style="color:green;">Username: '.$username.'<br>Password: '.$password.'</p>');
        } else {
            header('location:../recoverAcc.php?msg=<p style="color:red;">Nothing Found</p>');
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
  
   $conn->close();
?>
