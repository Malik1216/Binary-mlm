<?php
    session_start();
    date_default_timezone_set("Asia/Karachi");
    include "../../includes/db_config.php";
    $email = $_SESSION['email'];
    $left = $_POST['left'];
    $right = $_POST['right'];
    $amt = $_POST['amt'];
    $aamt ='+'. $amt;
    if ( $left=='' || $right=='' || $amt=='' )
    {
        echo "false";
        exit();
    }
    else
    {
        $result = mysqli_query($conn , "select amt , pair_bonus from wallet where email = '$email' ");
        $row = mysqli_fetch_array($result);
        $Old_amt = $row['amt'];
        $Old_pairbonus = $row['pair_bonus'];
        $parbonus = $Old_pairbonus + $amt;
        $amt = $Old_amt + $amt;
        $date = date("Y-m-d h:i:sa");
        $result = mysqli_query($conn , "INSERT INTO history (email , date , detail , amt , wallet_amt ) values( '$email', '$date' , 'Pair Bonus' , '$aamt' , '$amt' ) ");
        $result = mysqli_query($conn , "UPDATE wallet SET points_left = '$left' , points_right='$right' , amt = '$amt' , pair_bonus='$parbonus' where email = '$email' ");
        
        if ($result)
        {
            $array = array( "tamt"=>$parbonus , "left"=>$left , "right"=>$right  );
            echo json_encode($array);
        }
        else
        {
            echo "false";
        }
    }

?>