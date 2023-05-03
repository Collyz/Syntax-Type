<?php
        $conn = mysqli_connect("localhost", "root", "Dolphin1!");

        if(!$conn) {

                die("connection failed: " .mysqli_connect_error());
        }
        else {

            echo "Connected successfully<br>";
        }

        mysqli_select_db($conn, "syntax_type") or die("Could not connect to the database");

        echo "Connected to the database successfully";



?>