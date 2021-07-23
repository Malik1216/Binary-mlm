<?php
    include "../includes/db_config.php";
    $email = $_POST['email'];
    $pass = md5($_POST['pass'] );
    if (  $email=="" || $pass==""  )
    {
        echo "false" ;
    }
    else
    {
        $result = mysqli_query($conn , "SELECT email , pass FROM users WHERE (email = '$email' or uname = '$email' ) and pass='$pass' ");
        if (mysqli_num_rows($result)>0)
        {
            session_start();
            $row = mysqli_fetch_array($result);
            $_SESSION['email']=$row['email'];
            echo "true" ;
        }
        else
        {
            echo "false";
        }
    }
    
?>