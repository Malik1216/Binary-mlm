<!DOCTYPE html>
<?php
session_start();
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>E-wallet</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />

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
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript"></script>
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
        ?>
        <div class="content-wrapper">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">E-Wallet</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                      <a href="dashboard.tml">Home</a>
                    </li>
                    <li class="breadcrumb-item active">E-Wallet</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <?php
            $result = mysqli_query($conn , "SELECT * FROM wallet WHERE email = '$email'" );
            $wallet_data = mysqli_fetch_array($result);
            
          ?>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>$ -</h3>

                      <p>Total E-wallet</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                   
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['amt']; ?></h3>
                      <p>Current Wallet Balance</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-gradient-indigo">
                    <div class="inner">
                      <h3>$ -</h3>
                      <p>Today Widthdraw Amount</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-pie-chart" aria-hidden="true"></i>
                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3><?php echo $wallet_data['points_left']; ?></h3>
                      <p>Remaining Left Side Points</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    
                  </div>
                </div>
               
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-dark">
                    <div class="inner">
                      <h3 style="color: aliceblue;"><?php echo $wallet_data['points_right']; ?></h3>
                      <p style="color: aliceblue;">Remaining Right Side Points</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                   
                  </div>
                </div>
              
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['direct_bonus']; ?></h3>
                      <p>Total Referrals Bonus</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    
                  </div>
                </div>
              
                

                

                <div class="col-lg-3 col-6">
                  <div class="small-box bg-gradient-danger">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['pair_bonus']; ?></h3>
                      <p>Today Pair Matching Bonus</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    
                  </div>
                </div>
               
                <div class="col-lg-3 col-6">
                  <div class="small-box bg-gradient-fuchsia">
                    <div class="inner">
                      <h3>$ <?php echo $wallet_data['rio']; ?></h3>
                      <p>Total RIO Bonus</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                   
                  </div>
                </div>

               
              
              </div>
              <div class="row">
                
              
                <section class="col-lg-12 ">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        E-Wallet Report
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
                            id="#myTable"
                            style="width: 100%; border-collapse: collapse"
                          >
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Wallte Amount</th>  
                                  <th scope="col">Source</th>
                              </tr>
                              <?php
                                $result = mysqli_query($conn , "SELECT * FROM history WHERE email ='$email' Order by id DESC");
                                $cnt = 0 ;
                                while($row = mysqli_fetch_array($result))
                                {
                                    $cnt +=1;
                              ?>
                            
                            <tr>
                              <td><?php echo $cnt; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['amt']; ?></td>
                              <td><?php echo $row['wallet_amt']; ?></td>
                              <td><?php echo $row['detail']; ?></td>
                            </tr>
                            <?php } ?>
                           
                           
                          </table>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                 
                  <!-- <div class="card">
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
                  </div> -->
                </section>
              </div>
            </div>
          </section>
        </div>
        <footer class="main-footer">
          <strong
            >Copyright &copy; 2019
            <a href="https://www.realmlmsoftware.com">Real MLM Software</a
            >.</strong
          >
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            Email - <b>care@realmlmsoftware.com</b>
          </div>
        </footer>
       <?php
        include "includes/min_Sidebar.php";
       ?>
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
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <style>
      .datepicker table {
        width: 100%;
      }
    </style>
  </body>
</html>
