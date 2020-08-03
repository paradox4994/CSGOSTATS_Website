<?php
    include('E:\project\XAMPP\htdocs\cs\php\connect.php');
    $uname = $_POST['uname'];
    $pass = $_POST['psw'];

    $sql = "SELECT * from logininfo where username = '$uname' and password = '$pass'";
    $result = $conn->query($sql) or die($conn->error);
    if($row = $result->fetch_assoc()) {
        echo "Login Sucessful<br>";
        echo "Hello ". $row["username"];
    }
    else {
      echo "Login Unsucessful";
    }

 ?>
