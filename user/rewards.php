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
?>
<!DOCTYPE html>

<html>
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title>
	Rewards
</title><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="userCss/fontawesome-free-all.min.css" /><link rel="stylesheet" href="userCss/ionicons.min.css" /><link rel="stylesheet" href="userCss/tempusdominus-bootstrap-4.min.css" /><link rel="stylesheet" href="userCss/icheck-bootstrap.min.css" /><link rel="stylesheet" href="userCss/jqvmap.min.css" /><link rel="stylesheet" href="userCss/adminlte.min.css" /><link rel="stylesheet" href="userCss/OverlayScrollbars.min.css" /><link rel="stylesheet" href="userCss/daterangepicker.css" /><link rel="stylesheet" href="userCss/summernote-bs4.css" /><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <script src="userJs/jquery.min.js"></script>
    <script src="userJs/jquery-ui.min.js"></script>

      <script src="https://use.fontawesome.com/e363e29cbd.js"></script>


<body class="hold-transition sidebar-mini layout-fixed">
   





<script src="/WebResource.axd?d=rdsIfVOCUX-h4jyhAm_6H0ccUUZSX_gQFbbQuf6BZosKrwfW7U0l483oGd0y0sSDN-QLuHaIoUTIP3QPA2tSLpMbrkETpCk5eob5v-3UafA1&amp;t=637346973180000000" type="text/javascript"></script>


<script src="/WebResource.axd?d=Z3BIEANYM9NXN_lrbj-KBLi8EvEwwkJXWmYbsLSr4YpBguSoGcBaB4mvdjd6-sFRZHsmgqrlSheiQVhZ1izDWvEn6zbq-l6ldkqipxLGZF81&amp;t=637346973180000000" type="text/javascript"></script>


        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                            Important Info
                        </button>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="contactus.html" class="nav-link">Contact Us</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="modal fade" id="modal-warning">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Important Information</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger alert-dismissible">This Demo has standard binary plan features. For custom MLM Software development, please <a href="/contactus.html" class="btn btn-block btn-primary mt-3">Contact Us</a></div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button> 
                        </div>
                    </div> 
                </div> 
            </div>
            <?php 
            include "includes/sidebar.php";
            $result = mysqli_query($conn , "select * from wallet where email = '$email'");
            $wallet = mysqli_fetch_array($result);
            $new_left = 0;
            $new_right = 0 ;
            if ($wallet['points_left']==0 or $wallet['points_right']==0)
            {
                $reward = 0 ;
            }
            else
            {
                if ( $wallet['points_left']>=$wallet['points_right'] )
                {
                    $reward = $wallet['points_right']* 0.1;
                    $new_left = $wallet['points_left'] - $wallet['points_right'];
                    $new_right = 0 ;
                }
                else
                {
                    $reward =$wallet['points_left'] * 0.1;
                    $new_right = $wallet['points_right'] - $wallet['points_left'];
                    $new_left = 0 ;
                }
               
            }
            
           
            
            ?>
            <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Rewards</h1>
                </div>
                <div class="col-sm-6 col-12 ">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Rewards</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="alert alert-success alert-dismissible" id  = "pairbonuas-sussesss-msg" style= "display:none" >
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Rewards collected successfully .
            </div>
            <?php if (isset($_GET['msg']))
            {
                ?>
                <div class="alert alert-success alert-dismissible"  >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Rewards collected successfully .
                </div>
                <?php
            }
            ?>
            <div class="card card-info color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">Pair Bonus</h3>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="col-12 row">
                          
                    <div class="col-lg-4 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 id = "total_pairbonus" >$ <?php echo $wallet['pair_bonus'] ?></h3>
                      <p>Total Pair Bonus </p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                    <div class="col-lg-4 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 id = "left_points" ><?php echo $wallet['points_left']; ?></h3>
                      <p>Left points</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    
                  </div>
                </div>
                    <div class="col-lg-4 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 id = "right_points" ><?php echo $wallet['points_right']; ?></h3>
                      <p>Right points</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                   
                  </div>
                </div>
                <?php
                    if ($reward>0)
                    {
                ?>
                    <div class="" id ="pair_button" style="margin:0px auto;">
                         <center><h4> Rewards :$ <?php echo $reward; ?> </h4><br></center>
                    <button class="btn btn-info" onclick="collect_binary( <?php echo $new_left ?> , <?php echo $new_right ?> , <?php echo $reward ?> )" >Collect Binary Reward</button>
                    </div>
                <?php } ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
     <section class="content">
        <div class="container-fluid">
            <div class="card card-info color-palette-box">
                <div class="card-header">
                    <?php
                        $pkg_result = mysqli_query($conn , "SELECT * FROM pkgs WHERE email = '$email' ");
                        
                    
                    ?>
                    <h3 class="card-title">ROI Bonus</h3>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="col-12 row">
                           
                    <div class="col-lg-8 col-12">
                       
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>$ <?php echo $wallet['rio']; ?></h3>
                      <p>Total Rio Bonus </p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                    <div class="col-lg-4 col-12" >
                               <h3>Active Packages</h3>
                        <ul class="list-group" >
                            <?php
                            $total_rio = 0 ;
                            $last_date = 0 ;
                            $cnt = 0 ;
                            $chk=0;
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
                             ?>
                             <li class="list-group-item list-group-item-success" >
                                 
                             
                                    <?php
                                    
                                     if ($row['rio_date']==0)
                                     {
                                        
                                        
                                        
                                        $amt = rio1( $row['pkg_name'] ,  $row['date']);
                                        
                                     }
                                     else
                                     {
                                        $amt = rio2( $row['pkg_name'] ,  $row['rio_date']); 
                                     }
                                     if ($amt!=0)
                                     {
                                         $chk = 1;
                                     }
                                     $total_rio += $amt ;
                                     echo $cnt.' ) $'.$row['pkg_name'] ;
                                        ?>
                                        <span style= "float:right" >
                                            <?php echo 'Bonus Amount : $' . $amt; ?> 
                                    </span>
                              
                             </li>
                             
                             <?php
                                 
                             }
                            ?>
                        </ul>
                    </div>
                    <?php if ($chk)
                    {
                    ?>
                    <div class="" style="margin:0px auto;">
                        <center><h3 style= "color:green">Bonus : $<?php echo $total_rio; ?></h3></center>
                    <a class="btn btn-info" href="helper/collect_rio.php"  >Collect Your Rio Bonus</a>
                    </div>
                    <?php
                    }
                    ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- <section class="content">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="card card-info color-palette-box">-->
    <!--            <div class="card-header">-->
    <!--                <h3 class="card-title">Rank-up Bonus</h3>-->
    <!--            </div>-->
    <!--            <div class="card-body">-->
    <!--                <div class="">-->
    <!--                    <div class="col-12 row">-->
                          
    <!--                <div class="col-lg-4 col-6">-->
    <!--              <div class="small-box bg-primary">-->
    <!--                <div class="inner">-->
    <!--                  <h3>$ 100</h3>-->
    <!--                  <p>Total Pair Bonus </p>-->
    <!--                </div>-->
    <!--                <div class="icon">-->
    <!--                  <i class="fa fa-money" aria-hidden="true"></i>-->
    <!--                </div>-->
    <!--                <a-->
    <!--                  href="wallet-statement.html?W=A88YABwpQwc=&p=1"-->
    <!--                  class="small-box-footer"-->
    <!--                  >More info <i class="fa fa-arrow-circle-right"></i-->
    <!--                ></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--                <div class="col-lg-6 col-6">-->
    <!--              <div class="small-box bg-success">-->
    <!--                <div class="inner">-->
    <!--                  <h3>0</h3>-->
    <!--                  <p>Left points</p>-->
    <!--                </div>-->
    <!--                <div class="icon">-->
    <!--                  <i class="fa fa-money" aria-hidden="true"></i>-->
    <!--                </div>-->
    <!--                <a-->
    <!--                  href=""-->
    <!--                  class="small-box-footer"-->
    <!--                  >More info <i class="fa fa-arrow-circle-right"></i-->
    <!--                ></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--                <div class="col-lg-6 col-6">-->
    <!--              <div class="small-box bg-info">-->
    <!--                <div class="inner">-->
    <!--                  <h3>0</h3>-->
    <!--                  <p>Right points</p>-->
    <!--                </div>-->
    <!--                <div class="icon">-->
    <!--                  <i class="fa fa-money" aria-hidden="true"></i>-->
    <!--                </div>-->
    <!--                <a-->
    <!--                  href="wallet-statement.html?W=A88YABwpQwc=&p=1"-->
    <!--                  class="small-box-footer"-->
    <!--                  >More info <i class="fa fa-arrow-circle-right"></i-->
    <!--                ></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--                <div class="" style="margin:0px auto;">-->
    <!--                <button class="btn btn-info">Collect Binary Reward</button>-->
    <!--                </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

            </div>
          
            <?php include "includes/min_Sidebar.php" ?>
        </div>
    


  

    <script src="userJs/bootstrap.bundle.min.js"></script>
    <script src="userJs/Chart.min.js"></script>
    <script src="userJs/sparkline.js"></script>
    <script src="userJs/jquery.vmap.min.js"></script>
    <script src="userJs/maps/jquery.vmap.usa.js"></script>
    <script src="userJs/jquery.knob.min.js"></script>
    <script src="userJs/moment.min.js"></script>
    <script src="userJs/daterangepicker.js"></script>
    <script src="userJs/tempusdominus-bootstrap-4.min.js"></script>
    <script src="userJs/summernote-bs4.min.js"></script>
    <script src="userJs/jquery.overlayScrollbars.min.js"></script>
    <script src="userJs/adminlte.js"></script>
    <script src="userJs/dashboard.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap DatePicker -->
    <script>
        function collect_binary( new_left, new_right, amt){
            $.ajax({
                        type: 'POST',
                        url: "helper/generatePoints.php",
                        data : { left:new_left , right:new_right, amt:amt  },
                        success: function(data){
                            console.log( data );
                          if (data!="false")
                          {
                              var parsed = JSON.parse(data);
                              $("#pairbonuas-sussesss-msg").fadeIn();
                              $("#right_points").html(parsed.right);
                              $("#left_points").html(parsed.left);
                              $("#total_pairbonus").html(parsed.tamt);
                              $("#pair_button").hide();
                          }
                        }
                  });
        }
         
    </script>
    <style>
        .datepicker table {
            width: 100%;
        }
    </style>
</body>
</html>
