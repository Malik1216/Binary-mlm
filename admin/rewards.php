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
    <title>Rewards</title>
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
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <style>
    .shadow_block{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .shadow_block:hover{
        box-shadow: rgba(0, 0, 0, 0.6) 0px 7px 20px; !important;
    }
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

      <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"
                ><i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block mx-auto" style = "margin-top:10px; color:green; width:100%;" >
             Only administration can have access to this page
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
                  <h1 class="m-0 text-dark">Rewards</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                      <a href="dashboard.tml">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Rewards</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                       
                <div class="col-lg-12 col-12">
                  <div class="small-box bg-secondry shadow_block" style = " height: auto; width: 100%;" >
                    <div class="inner">
                        <h4 style="mx-auto" >
                        Rewards
                    </h4>
                    <div class="alert alert-success alert-dismissible" id="error1" style="width:100%; display:none; " >
  					       
  					        <strong>Success!</strong> Rewares were given successfully.
				        </div>
                    <div class="col-md-12  " style="display: flex; justify-content: center; align-items: center;" >
                    <div class="btn-group" onclick style = "width:auto; margin-top:30px; margin-bottom:50px;" >
  <button type="button" class="btn btn-success" onclick="rio()"  ><i style="margin-right:5px;" class="fa fa-gift"></i>  Give Rio</button>
  <button type="button" class="btn btn-warning" onclick="pair()" > <i style="margin-right:5px;" class="fa fa-trophy"></i> Give Pair Bonus</button>

</div>
                    </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            
            </div>
          </section>
        </div>
        <script>
            function rio()
            {
                var r = confirm("Are you sure you want to Give Rio Bonus to all users?");
                if (r == true) {
                    $.ajax({
                        url: "helper/collect_rio.php",
                        type: "Post",
                        async: true,
                        data: {dat:"rio" },
                        success: function (dat) {
                                $("#error1").fadeIn();
                              $(window).scrollTop(0);
                              setTimeout(
                                function()
                                {
                                  $("#error1").fadeOut();     
                                }
                              , 3000);
                          }
                    });
                } 
                
            }
            function pair()
            {
                var r = confirm("Are you sure you want to Give Rio Bonus to all users?");
                if (r == true) {
                    $.ajax({
                        url: "helper/collect_rio.php",
                        type: "Post",
                        async: true,
                        data: {dat:"pair" },
                        success: function (dat) {
                              $("#error1").fadeIn();
                              $(window).scrollTop(0);
                              setTimeout(
                                function()
                                {
                                  $("#error1").fadeOut();     
                                }
                              , 3000);
                        }
                    });
                        }
                  
            }
        </script>
        
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
    <style>
      .datepicker table {
        width: 100%;
      }
    </style>
  </body>
</html>
