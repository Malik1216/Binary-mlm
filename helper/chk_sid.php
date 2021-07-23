<?php
    include "../includes/db_config.php";
    $sid = $_POST['Sid'];
    if (  $sid==""   )
    {
        
        echo "false" ;
    }
    else
    {
        $result = mysqli_query($conn , "SELECT left_Sid , right_Sid FROM users WHERE left_Sid = '$sid' or right_Sid='$sid' ");
        if (mysqli_num_rows($result)>0)
        {
            echo "true" ;
        }
        else
        {
            echo "false";
        }
    }
    
?>