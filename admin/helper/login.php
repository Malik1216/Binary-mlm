<?php
    session_start();
    include "../../includes/db_config.php";
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $result = mysqli_query($conn , "SELECT * FROM admin WHERE uname = '$uname' and pass = '$pass' ");
    if (mysqli_num_rows($result)==1)
    {
        $_SESSION['admin'] = 'Logedin';
        echo "true";
    }
    else
    {
        echo "false";
    }
?>