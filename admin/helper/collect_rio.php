<?php
    session_start();
     date_default_timezone_set("Asia/Karachi");
     function rio1( $pkg , $date )
     {
         $now = time(); 
         $your_date = strtotime($date);
         $datediff = $now - $your_date;
         return  $pkg * round ($datediff / (60 * 60 * 24))*0.01;
     }
     function rio2($pkg ,  $date )
     {
         $now = time(); 
         $your_date = strtotime($date);
         $datediff = $now - $your_date;
         $days = round ($datediff / (60 * 60 * 24));
         if ($days>0)
         {
             $days -=1 ;
         }
         else
         {
             $days=0 ;
         }
         return  $pkg * round ($datediff / (60 * 60 * 24))*0.01;
     }
     include "../../includes/db_config.php";
     $email = $_SESSION['email'];
      $wallet_result = mysqli_query($conn , "SELECT * FROM wallet WHERE email = '$email' ");
      $wallet  = mysqli_fetch_array($wallet_result);
      $wallet_amt = $wallet['amt']; 
     $pkg_result = mysqli_query($conn , "SELECT * FROM pkgs WHERE email = '$email' ");
        $total_rio = 0 ;
        $new_Wallet_amt=0;
        $date = date("Y-m-d h:i:sa") ;
                            $last_date = 0 ;
                            $cnt = 0 ;
                              while ($row = mysqli_fetch_array($pkg_result))
                             {
                                 if ($row['rio_date']==0)
                                 {
                                     $last_date = $row['date'];
                                 }
                                 else
                                 {
                                     $last_date = $row['rio_date'];
                                 }
                                 $cnt +=1;
                                 $amt = 0;
                           
                                    
                                     if ($row['rio_date']==0)
                                     {
                                        
                                        
                                        
                                        $amt = rio1( $row['pkg_name'] ,  $row['date']);
                                        
                                     }
                                     else
                                     {
                                        $amt = rio2( $row['pkg_name'] ,  $row['rio_date']); 
                                     }
                                     
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
                             header('Location:../rewards?msg=1');
?>