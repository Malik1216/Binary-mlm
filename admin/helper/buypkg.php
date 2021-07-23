<?php
    session_start();
    date_default_timezone_set("Asia/Karachi");
    function get_username($email , $conn)
    {
        $result1 = mysqli_query($conn , "SELECT * FROM users WHERE email= '$email' ");
        $data = mysqli_fetch_array($result1);
        return $data['fname']. " " . $data['lname']; 
    }
    function Give_DirectBonus( $email , $conn , $date , $pkg_amt , $count=0 )
    {
        $count +=1;
        if ($count>5)
        {
            return ;
        }
        $sponser = mysqli_query($conn , "SELECT * FROM users WHERE email = '$email'");
        if(mysqli_num_rows($sponser)>0)
        {
            $sponser_row = mysqli_fetch_array($sponser);
            $sponser_id = $sponser_row['sid'];
            $sdata = base64_decode($sponser_id);
            $sid = explode(',', $sdata);
            $sponser_email = $sid[0];
            $sponser_wallet = mysqli_query($conn , "SELECT * FROM wallet WHERE email = '$sponser_email'");
            $wallet_row = mysqli_fetch_array($sponser_wallet);
            if ($count==1)
            {
                $wallet_amt = $wallet_row['amt'] + ($pkg_amt*0.1);
                $dbonus = $wallet_row['direct_bonus'] + ($pkg_amt*0.1);
                $amt = ($pkg_amt*0.1);
            }
            else
            {
                $wallet_amt = $wallet_row['amt'] + ($pkg_amt*0.01);
                $dbonus = $wallet_row['direct_bonus'] + ($pkg_amt*0.01);
                $amt = ($pkg_amt*0.01);
            }
            $wallet_amt=$wallet_row['amt'];
            mysqli_query($conn , "UPDATE wallet SET amt = '$wallet_amt' , direct_bonus='$dbonus' WHERE email='$sponser_email' ");
            mysqli_query($conn , "INSERT into history (email , amt , wallet_amt , detail , date ) values('$sponser_email' , '".'+'.$amt."' , '$wallet_amt' , 'Direct Bonus from ".$sponser_row['uname']."' , '$date' )");
            Give_DirectBonus( $sponser_email  , $conn , $date , $pkg_amt , $count );
         }
        
    }
    $amt = $_POST['amt'];
    include "../../includes/db_config.php";
    $email = $_SESSION['email'];
    $result = mysqli_query($conn , "SELECT amt FROM wallet WHERE email = '$email'");
    $wallet_data = mysqli_fetch_array($result);
    $wallet_amt = $wallet_data['amt'];
    if ($wallet_amt<$amt)
    {
        echo "Wallet amt : " . $wallet_amt . " amt : " . $amt; 
        echo "false";
    }
    else
    {
        $new_wallet_amt = $wallet_amt - $amt; 
        $date = date("Y-m-d h:i:sa");
        $result = mysqli_query($conn , "UPDATE wallet SET amt = '$new_wallet_amt' WHERE email='$email' ");
        $result = mysqli_query($conn , "INSERT into history (email , amt , wallet_amt , detail , date ) values('$email' , ".'-'.$amt." , '$new_wallet_amt' , 'bought package' , '$date' )");
        $result = mysqli_query($conn , "INSERT into pkgs (email , pkg_name , date , rio_date) values('$email' , '$amt' , '$date' , '0')");
        if ($result)
        {
            Give_DirectBonus( $email  , $conn , $date , $amt  );
            echo 'true';
        }
        else
        {
            echo 'false11';
        }
    }

?>