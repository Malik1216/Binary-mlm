<?php
    include "../includes/db_config.php";
    function addchield_left( $parent , $email , $conn )
    {       
        
          $result = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=1");
          $row = mysqli_fetch_array($result);
          if (mysqli_num_rows($result)>0)
          {
              addchield_left( $row['node'] , $email , $conn ) ;
          }
          else
          {
              $date = date("Y/m/d") ;
              $result = mysqli_query($conn , "INSERT INTO tree( parent , node , positon , date ) VALUES( '$parent' , '$email' , 1 , '$date'  )");
          }
          
    }
    function addchield_right( $parent , $email , $conn )
    {       
        
          $result = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=2");
          $row = mysqli_fetch_array($result);
          if (mysqli_num_rows($result)>0)
          {
             addchield_right( $row['node'] , $email , $conn ) ;
          }
          else
          {
              $date = date("Y/m/d") ;
              $result = mysqli_query($conn , "INSERT INTO tree( parent , node , positon , date ) VALUES( '$parent' , '$email' , 2 , '$date'  )");
          }
          
    }
    function CrateWallet( $email , $conn)
    {
         $result = mysqli_query($conn , "INSERT INTO wallet(amt , points_left  , direct_bonus , email , points_right , pair_bonus , rio ) VALUES('0' , '0' , '0'  , '$email'  , '0' , '0' , '0' )");
         GivePoints( $email , $conn);
    }
    function GivePoints( $email , $conn)
    {
        $parent = mysqli_query($conn , "SELECT * FROM tree WHERE node = '$email'");
        if(mysqli_num_rows($parent)>0)
        {
            $parent_row = mysqli_fetch_array($parent);
            $parent_email = $parent_row['parent'];
            //echo "parent mail is : " . $parent_email ;
            $parent_wallet = mysqli_query($conn , "SELECT * FROM wallet WHERE email = '$parent_email'");
            $old_points_raw = mysqli_fetch_array($parent_wallet);
            $old_points_left = $old_points_raw['points_left'];
            $new_points_left = $old_points_left +100;
            $old_points_right = $old_points_raw['points_right'];
            $new_points_right = $old_points_right +100;
            if ( $parent_row['positon']==1 )
                mysqli_query($conn , "UPDATE wallet SET points_left='$new_points_left' WHERE email = '$parent_email'");
            else
                mysqli_query($conn , "UPDATE wallet SET points_right='$new_points_right' WHERE email = '$parent_email'");
            GivePoints( $parent_email , $conn);
         }
        
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $uname = $_POST['uname'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $sdata = base64_decode( $_POST['sid']);
    $sid = explode(',', $sdata);
   // print_r($sid);
    $semail = $sid[0];
    $date = date("Y/m/d") ;
    if ($sid[1]=='left')
    {
        $sp = 1;
    }
    else
    {
        $sp=2;
    }
    //print_r($sid);
    //echo "email is : " . $semail . " position is : " . $sp;
    $pass = md5($_POST['pass'] );
    if ( $fname=="" || $lname=="" || $email=="" || $phone=="" || $sid=="" || $uname=="" || $city=="" || $country=="" )
    {
        echo "dataError" ;
    }
    else
    {
        $email_chk = mysqli_query($conn , "SELECT email FROM users WHERE email = '$email'");
        $uname_chk = mysqli_query($conn , "SELECT uname FROM users WHERE uname = '$uname'");
        if (mysqli_num_rows($email_chk)>0)
        {
            echo "emailError" ;
        }
        else if ( mysqli_num_rows($uname_chk)>0 )
        {
            echo "unameError" ;
        }
        else
        {
            $left_Sid = base64_encode($email.','."left");
            $right_Sid = base64_encode($email.','."right");
            $rawSid = $_POST['sid'];
            $result = mysqli_query($conn , "INSERT INTO users(fname,lname,email,pass,phone,sid , left_Sid , right_Sid , uname , city, country ) VALUES( '$fname' , '$lname' , '$email' , '$pass' , '$phone' , '$rawSid' ,'$left_Sid' ,'$right_Sid' , '$uname' , '$city' , '$country' )");
            if ($sp==1)
            {
                addchield_left( $semail , $email , $conn );
            }
            else
            {
                 addchield_right( $semail , $email , $conn  );
            }
            if ($result)
            {
                CrateWallet( $email , $conn);
                echo "true";
            }
            else
            {
                echo "false";
            }
        }
    }
    
?>