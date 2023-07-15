<?php
$conn = mysqli_connect("localhost", "root", "", "cinema_booking");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
      } else {
        echo "connected";
      }
      ?>