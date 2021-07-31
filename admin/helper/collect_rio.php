<?php
    session_start();
     date_default_timezone_set("Asia/Karachi");
     function rio( $pkg  )
     {
         return  $pkg * 0.01;
     }
     function give_pair( $email )
     {
        include "../../includes/db_config.php";
        $result = mysqli_query($conn , "select * from wallet where email = '$email'");
        $wallet = mysqli_fetch_array($result);
        $left = 0;
        $right = 0 ;
        if ($wallet['points_left']==0 or $wallet['points_right']==0)
        {
            $reward = 0 ;
        }
        else
        {
            if ( $wallet['points_left']>=$wallet['points_right'] )
            {
                $reward = $wallet['points_right']* 0.1;
                $left = $wallet['points_left'] - $wallet['points_right'];
                $right = 0 ;
            }
            else
            {
                $reward =$wallet['points_left'] * 0.1;
                $right = $wallet['points_right'] - $wallet['points_left'];
                $left = 0 ;
            }
           
        }
        if ($reward>0)
        {
            $amt = $reward;
            $aamt = $amt ;
            $result = mysqli_query($conn , "select amt , pair_bonus from wallet where email = '$email' ");
            $row = mysqli_fetch_array($result);
            $Old_amt = $row['amt'];
            $Old_pairbonus = $row['pair_bonus'];
            $parbonus = $Old_pairbonus + $amt;
            $amt = $Old_amt + $amt;
            $date = date("Y-m-d h:i:sa");
            $result = mysqli_query($conn , "INSERT INTO history (email , date , detail , amt , wallet_amt ) values( '$email', '$date' , 'Pair Bonus' , '$aamt' , '$amt' ) ");
            $result = mysqli_query($conn , "UPDATE wallet SET points_left = '$left' , points_right='$right' , amt = '$amt' , pair_bonus='$parbonus' where email = '$email' ");
        }
    }
     function give_rio( $email )
     {
        include "../../includes/db_config.php";
            $wallet_result = mysqli_query($conn , "SELECT * FROM wallet WHERE email = '$email' ");
            $wallet  = mysqli_fetch_array($wallet_result);
            $wallet_amt = $wallet['amt']; 
            $pkg_result = mysqli_query($conn , "SELECT * FROM pkgs WHERE email = '$email' ");
                $total_rio = 0 ;
                $new_Wallet_amt=0;
                $date = date("Y-m-d h:i:sa") ;
                                    $cnt = 0 ;
                                    while ($row = mysqli_fetch_array($pkg_result))
                                    {

                                        $amt = rio( $row['pkg_name']);
                                                
                                         
                                            $total_rio += $amt ;
                                            $new_Wallet_amt = $wallet_amt+$total_rio ;
                                        
                                            if ($amt>0)
                                            {
                                            mysqli_query($conn , "INSERT INTO history (email , amt , wallet_amt , detail , date ) values('$email' , '$amt' , '".$new_Wallet_amt."' ,'RIO Bonus form ".$row['pkg_name']." Package' , '$date' )");
                                            
                                            mysqli_query($conn , " update pkgs set rio_date = '$date'  where id = '".$row['id']."' ");
                                            }
                                    }
                                    if ($total_rio>0)
                                    {
                                    $new_rio = $wallet['rio']+$total_rio ;
                                    $result  = mysqli_query($conn , " update wallet set amt = '".$new_Wallet_amt."' , rio  = '".$new_rio."' where email = '$email' ");
                                    }
                }
                include "../../includes/db_config.php";
                $result = mysqli_query($conn , "SELECT * FROM users");
                while( $row = mysqli_fetch_array($result) )
                {
                    if ( $_POST['dat']=='rio')
                    {
                        give_rio( $row['email']);
                    }
                    else
                    {
                        give_pair(  $row['email'] );
                    }
                }
                            
?>