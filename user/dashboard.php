<!DOCTYPE html>
<?php 
session_start();
function countNodes( $parent , $conn , $count=0   )
{
    
    $left = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=1");
    $right = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=2");
    $row_left = mysqli_fetch_array($left);
    $row_right = mysqli_fetch_array($right);
    if (mysqli_num_rows($left)>0 or mysqli_num_rows($right)>0)
    {
        if (mysqli_num_rows($left)>0)
        {
           $count +=1;
            $count = countNodes(  $row_left['node'] , $conn , $count  );
          
        }
       
    
        if (mysqli_num_rows($right)>0)
        {
            $count +=1;
            $count = countNodes(  $row_right['node'] , $conn , $count  );
            
        }
    }
     return $count;
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Binary Plan Software Demo - Member Panel - Real MLM Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://use.fontawesome.com/e363e29cbd.js"></script>
   
    <link rel="stylesheet" href="userCss/ionicons.min.css" />
    <link rel="stylesheet" href="userCss/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="userCss/icheck-bootstrap.min.css" />
    <link rel="stylesheet" href="userCss/jqvmap.min.css" />
    <link rel="stylesheet" href="userCss/adminlte.min.css" />
    <link rel="stylesheet" href="userCss/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="userCss/daterangepicker.css" />
    <link rel="stylesheet" href="userCss/summernote-bs4.css" />

    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
      type="text/css" />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"/>-->
    <script src="userJs/jquery.min.js"></script> 
    <script src="userJs/jquery-ui.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"
      type="text/javascript"
    ></script>
    <style>
      .Protfolio{justify-content: space-evenly;}
      </style>
    <!--Start of Tawk.to Script-->

    <!-- <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function () {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/5dea25f4d96992700fcb0d75/default";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
      })();
    </script> -->
    <!--End of Tawk.to Script-->
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <form method="post" action="dashboard.html" id="form1">
      <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"
                ><i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <button
                type="button"
                class="btn btn-warning"
                data-toggle="modal"
                data-target="#modal-warning"
              >
                Important Info
              </button>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="contactus.html" class="nav-link">Contact Us</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a
                class="nav-link"
                data-widget="control-sidebar"
                data-slide="true"
                href="#"
              >
                <i class="fa fa-th-large"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="modal fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content bg-default">
              <div class="modal-header">
                <h4 class="modal-title">Important Information</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="alert alert-danger alert-dismissible">
                  This Demo has standard binary plan features. For custom MLM
                  Software development, please
                  <a
                    href="contactus.html"
                    class="btn btn-block btn-primary mt-3"
                    >Contact Us</a
                  >
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button
                  type="button"
                  class="btn btn-outline-dark"
                  data-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      <?php 
          include "includes/sidebar.php";
          $result = mysqli_query($conn , "SELECT * FROM wallet WHERE email = '$email'");
          $wallet_data = mysqli_fetch_array($result);
      ?>
        <div class="content-wrapper">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                      <a href="dashboard.tml">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 col-6">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3><?php 
                      echo countNodes( $email, $conn , $count=0   ); ?></h3>
                      <p>Members</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <a href="left-right-list.php" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                <!--<div class="col-lg-3 col-6">-->
                <!--  <div class="small-box bg-success">-->
                <!--    <div class="inner">-->
                <!--      <h3>51</h3>-->
                <!--      <p>Today Join Left Side Members</p>-->
                <!--    </div>-->
                <!--    <div class="icon">-->
                <!--      <i class="fa fa-users" aria-hidden="true"></i>-->
                <!--    </div>-->
                <!--    <a href="left-right-list.html" class="small-box-footer"-->
                <!--      >More info <i class="fa fa-arrow-circle-right"></i-->
                <!--    ></a>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-6">-->
                <!--  <div class="small-box bg-dark">-->
                <!--    <div class="inner">-->
                <!--      <h3 style="color: aliceblue;">10</h3>-->
                <!--      <p style="color: aliceblue;">Today Join Rigt Side Members</p>-->
                <!--    </div>-->
                <!--    <div class="icon">-->
                <!--      <i class="fa fa-users" aria-hidden="true"></i>-->
                <!--    </div>-->
                <!--    <a href="left-right-list.html" class="small-box-footer"-->
                <!--      >More info <i class="fa fa-arrow-circle-right"></i-->
                <!--    ></a>-->
                <!--  </div>-->
                <!--</div>-->
              
                <!--<div class="col-lg-3 col-6">-->
                <!--  <div class="small-box bg-danger">-->
                <!--    <div class="inner">-->
                <!--      <h3>10</h3>-->
                <!--      <p>Today Referrals</p>-->
                <!--    </div>-->
                <!--    <div class="icon">-->
                <!--      <i class="fa fa-user-plus" aria-hidden="true"></i>-->
                <!--    </div>-->
                <!--    <a href="referrals_all.html" class="small-box-footer"-->
                <!--      >More info <i class="fa fa-arrow-circle-right"></i-->
                <!--    ></a>-->
                <!--  </div>-->
                <!--</div>-->
              
                <div class="col-lg-4 col-6">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['amt']; ?></h3>
                      <p>Current Wallet Balance</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a
                      href="e-wallet"
                      class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                
                    <div class="col-lg-4 col-6">
                  <div class="small-box bg-secondary">
                    <div class="inner">
                      <h3>1st</h3>
                      <p>Current Rank Name</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <a href="referrals_all.html" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                
                 <div class="col-lg-6 col-6">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3><?php echo $wallet_data['points_left']; ?></h3>
                      <p>Current Left-Side Points </p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a
                      href="rewards"
                      class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                 <div class="col-lg-6 col-6">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3><?php echo $wallet_data['points_right']; ?></h3>
                      <p>Current Right-Side Points</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a
                      href="rewards"
                      class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['pair_bonus']; ?></h3>
                      <p>Pair Bonus</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <a
                      href="rewards"
                      class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['rio']; ?></h3>
                      <p>RIO Bonus</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <a href="rewards" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-4 col-12">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['direct_bonus']; ?></h3>
                      <p>Direct Bonus</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <a
                      href="rewards"
                      class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
               
                <!-- <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>10</h3>

                      <p>Panding Request</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </div>
                    <a href="referrals_all.html" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3>$ 10</h3>
                      <p>Widthdraw Request</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-gg-circle"></i>
                    </div>
                    <a href="referrals_all.html" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>   -->
              
                <!-- <div class="col-lg-3 col-6">
                  <div class="small-box bg-gradient-indigo">
                    <div class="inner">
                      <h3 style="color: aliceblue;">10</h3>
                      <p style="color: aliceblue;">No of Total Widthdraws</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-balance-scale"></i>
                    </div>
                    <a href="left-right-list.html" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div> -->
              
                <!-- <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>10</h3>
                      <p>Users</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <a href="referrals_all.html" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div> -->
                <!-- <div class="col-lg-3 col-6">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>10</h3>
                      <p>Unactive Users</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <a href="referrals_all.html" class="small-box-footer"
                      >More info <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div> -->
              </div>
              <div class="row">
         <!--    <section class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                       Protfolio
                      </h3>
                    </div>
                    <div class="card-body row Protfolio">
                      <ul class="todo-list col-lg-3 col-md-3 col-sm-12 col-xs-12" data-widget="todo-list">
                      <center><h5>Downline Details</h5></center> 
                        <li>
                         
                          <span class="text">Downline/Members: </span>
                          
                          <span class="text"> 60 </span>

                        </li>
                        <li>
                         
                          <span class="text">Total Direct Referrals : </span>
                          
                          <span class="text"> 10 </span>

                        </li>
                        <li>
                         
                          <span class="text">Active Members : </span>
                          
                          <span class="text"> 10 </span>
                        </li>
                        <li>
                         
                          <span class="text">Unactive Members : </span>
                          
                          <span class="text"> 10 </span>
                        </li>
                        <li>
                         
                          <span class="text">Total Left Members : </span>
                          
                          <span class="text"> 30 </span>
                      
                          
                        </li>
                        <li>
                         
                          <span class="text">Total Right Members : </span>
                          
                          <span class="text"> 30 </span>
                        </li>
                        <li>
                         
                          <span class="text">Total Completed Pairs : </span>
                          
                          <span class="text"> 15 </span>
                        </li>
                        
                        <li>
                         
                          <span class="text">Current Rank : </span>
                          
                          <span class="text"> Silver </span> <small class="badge badge-success"
                          ><i class="fa fa-clock"></i>Rank</small
                        >
                        </li>
                      </ul>
                      <ul class="todo-list col-lg-3 col-md-3 col-sm-12 col-xs-12" data-widget="todo-list">
                        <center><h5>Wallet Details</h5></center> 
                          <li>
                           
                            <span class="text">Total E-Wallet: </span>
                            
                            <span class="text"> 600$ </span>
  
                          </li>
                          <li>
                           
                            <span class="text">Total Widthdraw : </span>
                            
                            <span class="text"> 300$ </span>
                          </li>
                          <li>
                           
                            <span class="text">Total ROI Bonus : </span>
                            
                            <span class="text"> 10$ </span>
                          </li>
                          <li>
                           
                            <span class="text">Total Direct Referral Bonus : </span>
                            
                            <span class="text"> 50$ </span>
                        
                            
                          </li>
                          <li>
                           
                            <span class="text">Total Pair Bonus : </span>
                            
                            <span class="text"> 100$ </span>
                          
                          </li>
                          <li>
                           
                            <span class="text">Current Left side points : </span>
                            
                            <span class="text"> 100 P </span>
                          
                          </li>
                          <li>
                           
                            <span class="text">Current Right Side Points : </span>
                            
                            <span class="text"> 100 P </span>
                          
                          </li>
                         <li>
                              <span class="text">No of Total Widthraws: </span>                              
                              <span class="text"> 60 </span>
                            </li>
                            <li>
                              <span class="text">No of Completed Widthdraws : </span>
                              <span class="text"> 10 </span>
                            </li> 
                            <li>
                             
                              <span class="text">No of Pending Request : </span>
                              
                              <span class="text"> 10 </span>
                            </li>
                            
                          <div class="card-footer clearfix">
                            <a
                              href=""
                              class="btn btn-info float-right"
                              >Check More</a
                            >
                          </div>
                        </ul>  
                         <ul class="todo-list col-lg-3 col-md-3 col-sm-12 col-xs-12" data-widget="todo-list">
                          <center><h5>Active Package Details</h5></center> 
                            <li>
                              <span class="text">Package Amount: </span>                              
                              <span class="text">$ 50 </span>
                            </li>
                            <li>
                              <span class="text">Package Name : </span>
                              <span class="text"> Silver </span>
                            </li>
                            <div class="card-footer clearfix">
                              <a
                                href="wallet-statement.html?W=A88YABwpQwc=&p=1"
                                class="btn btn-info float-right"
                                >Check More</a
                              >
                            </div>
                            
                          </ul>
                          
                    </div>
                    <div class="card-footer clearfix">
                      <a
                        href="wallet-statement.html?W=A88YABwpQwc=&p=1"
                        class="btn btn-info float-right"
                        >Check More</a
                      >
                    </div>
                  </div>
                  
                  
                 
                </section>> -->
                <section class="col-lg-6 col-12 ">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        New Downline Members
                      </h3>
                    </div>
                    <div class="card-body">
                      <ul class="todo-list" data-widget="todo-list">
                        <li>
                         
                          <span class="text">Name ( id )</span>
                          
                          <span class="text"> downline of </span>
                      
                          <span class="text">ropnser name ( id ) </span>
                          <small class="badge badge-danger"
                            ><i class="fa fa-clock"></i>new</small
                          >
                        </li>
                        <li>
                         
                          <span class="text">Name ( id )</span>
                          
                          <span class="text"> downline of </span>
                      
                          <span class="text">ropnser name ( id ) </span>
                          <small class="badge badge-danger"
                            ><i class="fa fa-clock"></i>new</small
                          >
                        </li>
                        <li>
                         
                          <span class="text">Name ( id )</span>
                          
                          <span class="text"> downline of </span>
                      
                          <span class="text">ropnser name ( id ) </span>
                          <small class="badge badge-danger"
                            ><i class="fa fa-clock"></i>new</small
                          >
                        </li>
                        <li>
                         
                          <span class="text">Name ( id )</span>
                          
                          <span class="text"> downline of </span>
                      
                          <span class="text">ropnser name ( id ) </span>
                          <small class="badge badge-danger"
                            ><i class="fa fa-clock"></i>new</small
                          >
                        </li>
                        <li>
                         
                          <span class="text">Name ( id )</span>
                          
                          <span class="text"> downline of </span>
                      
                          <span class="text">ropnser name ( id ) </span>
                          <small class="badge badge-danger"
                            ><i class="fa fa-clock"></i>new</small
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer clearfix">
                      <a
                        href="wallet-statement.html?W=A88YABwpQwc=&p=1"
                        class="btn btn-info float-right"
                        >Check More</a
                      >
                    </div>
                  </div>
              <!--    <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        Deposit Notification
                      </h3>
                    </div>
                    <div class="card-body">
                      <ul class="todo-list" data-widget="todo-list">
                        <li>
                          <small class="badge badge-danger"
                          ><i class="fa fa-dollar"></i></small
                        >
                          <span class="text"> $100 deposit from BTC</span>

                         
                        </li>
                        <li>
                          <small class="badge badge-danger"
                          ><i class="fa fa-dollar"></i></small
                        >
                          <span class="text"> $100 deposit from Perfect Money</span>

                         
                        </li>
                        <li>
                          <small class="badge badge-danger"
                          ><i class="fa fa-dollar"></i></small
                        >
                          <span class="text"> $100 deposit from ETh</span>

                         
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer clearfix">
                      <a
                        href="wallet-statement.html?W=A88YABwpQwc=&p=2"
                        class="btn btn-info float-right"
                        >Go to Report</a
                      >
                    </div>
                  </div>  -->
                  
                 
                </section>
                <section class="col-lg-6 col-12 ">
                    <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        Important Notification From Admin   
                      </h3>
                    </div>
                    <div class="card-body">
                      <ul class="todo-list" data-widget="todo-list">
                        <li>
                          <small class="badge badge-danger"
                          ><i class="fa fa-bell"></i>19-May-2021</small>
                   
                          <span class="text">Admin add money in your account </span>


                        <li>
                          <small class="badge badge-danger"
                          ><i class="fa fa-bell"></i> 02-May-2021</small>
                      
                          <span class="text">Admin Stop RIO of your account </span>

                         

                        <li>
                          <small class="badge badge-danger"
                          ><i class="fa fa-bell"></i>9-May-2021</small>
                      
                          <span class="text">Admin detect money in your account </span>

                        </li>
                      </ul>
                    </div>
                    <div class="card-footer clearfix">
                      <a
                        href="wallet-statement.html?W=aH3V9G1+PNU=&p=3"
                        class="btn btn-info float-right"
                        >Go to Report</a
                      >
                    </div>
                  </div>
               <!--   <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        Withdrawal Report
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <div>
                          <table
                            class="styleGV table table-bordered"
                            cellspacing="0"
                            rules="all"
                            border="1"
                            id="CPHMain_GrddisplayWithdrawl"
                            style="width: 100%; border-collapse: collapse"
                          >
                            <tr>
                              <th scope="col">Request Date</th>
                              <th scope="col">Amount</th>
                              <th scope="col">Tax</th>
                              <th scope="col">Total Amount</th>
                              <th scope="col">Status</th>
                            </tr>
                            <tr>
                              <td>Nov 6 2020 12:00AM</td>
                              <td>45&nbsp;$</td>
                              <td>45&nbsp;$</td>
                              <td>&nbsp;</td>
                              <td>Pending</td>
                            </tr>
                            <tr class="styleAlternateRow">
                              <td>Nov 5 2020 12:00AM</td>
                              <td>45&nbsp;$</td>
                              <td>45&nbsp;$</td>
                              <td>&nbsp;</td>
                              <td>Pending</td>
                            </tr>
                            <tr>
                              <td>Nov 4 2020 12:00AM</td>
                              <td>45&nbsp;$</td>
                              <td>45&nbsp;$</td>
                              <td>&nbsp;</td>
                              <td>Pending</td>
                            </tr>
                           
                           
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer clearfix">
                      <a
                        href="wallet-statement.html?W=aH3V9G1+PNU=&p=3"
                        class="btn btn-info float-right"
                        >Go to Report</a
                      >
                    </div>
                  </div> -->
                 
                  
                </section>
              </div>
            </div>
          </section>
        </div>
        <footer class="main-footer">
          <strong
            >Copyright &copy; 2021
            MLM Software .</strong
          >
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            Developed By <a href="http://mojodynamics.site/" target="_blank" >MojoDynamics
          </div>
        </footer>
       <?php include "includes/min_Sidebar.php" ?>
      </div>
    </form>

    <script>
      $("input")
        .parent(".custom-control-input")
        .each(function () {
          var $this = $(this);
          var cssClass = $this.attr("class");
          var targetControl = $(this).parent().find("input");
          $(this).parent().find("label").addClass("custom-control-label");
          $(targetControl)
            .addClass(cssClass)
            .unwrap()
            .parent("label[for],span")
            .first()
            .addClass(cssClass);
        });
    </script>
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap DatePicker -->
    <script type="text/javascript">
      $(function () {
        $(".DateCalendar").datepicker({
          changeMonth: true,
          changeYear: true,
          format: "dd/mm/yyyy",
          language: "tr",
        });
      });
      $(document).ready(function () {
        $("input").attr("autocomplete", "off");
        //$(".has-treeview").addClass("menu-open");

        var currentURL = window.location.href.toLowerCase();
        $(".nav-sidebar li a").each(function () {
          if (currentURL.indexOf($(this).attr("href").toLowerCase()) > 0) {
            $(this).addClass("active");
            $(this).parent().parent().parent().addClass("menu-open");
          }
        });
      });
    </script>
    <style>
      .datepicker table {
        width: 100%;
      }
    </style>
  </body>
</html>
