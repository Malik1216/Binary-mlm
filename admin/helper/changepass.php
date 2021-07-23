<?php
    session_start();
    include "../../includes/db_config.php";
    $email = $_SESSION['email'];
    $pass = md5($_POST['pass']);
    $oldpass =md5( $_POST['oldpass']);
    $result = mysqli_query($conn , "SELECT email , pass FROM users WHERE email = '$email' and pass='$oldpass' ");
    if (mysqli_num_rows($result)>0)
    {
        $result = mysqli_query($conn , "UPDATE users SET pass = '$pass' WHERE email = '$email' ");
        if ($result)
        {
            echo 'true';
        }
        else
        {
            echo 'false' ;
        }
    }
    else
    {
        echo 'false' ;
    }
    
?>