


<!DOCTYPE html>

<?php session_start();

function get_user($email , $conn)
{
    $result1 = mysqli_query($conn , "SELECT * FROM users WHERE email= '$email' ");
    $data = mysqli_fetch_array($result1);
    return $data; 
}

function get_promotorName($email , $conn)
{
         $result1 = mysqli_query($conn , "SELECT * FROM users WHERE email= '$email' ");
         $data = mysqli_fetch_array($result1);
         $sid = explode(',', base64_decode($data['sid']));
         $semail = $sid[0];
         return get_user($semail , $conn)['uname'];
}
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
function get_ChildNodes( $parent , $conn   )
{
    
    $left = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=1");
    $right = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=2");
    $row_left = mysqli_fetch_array($left);
    $row_right = mysqli_fetch_array($right);
    if (mysqli_num_rows($left)>0 or mysqli_num_rows($right)>0)
    {
        if (mysqli_num_rows($left)>0)
        {
                $nodeData = get_user($row_left['node'] , $conn); 
            ?>
               <tr>
			<td><?php echo $nodeData['uname'] ?></td><td><?php echo $nodeData['fname'].' '. $nodeData['lname']; ?></td><td><?php echo $row_left['date']; ?></td><td><?php echo get_promotorName($row_left['node'] , $conn); ?></td><td> - </td><td><a href="genealogy?id=<?php echo $row_left['node'] ?>" target="_blank" >Show Tree</a></td>
		</tr>
            <?php
          
            get_ChildNodes(  $row_left['node'] , $conn   );
          
        }
       
    
        if (mysqli_num_rows($right)>0)
        {
                 $nodeData = get_user($row_right['node'] , $conn); 
            ?>
               <tr>
			<td><?php echo $nodeData['uname'] ?></td><td><?php echo $nodeData['fname'].' '. $nodeData['lname']; ?></td><td><?php echo $row_right['date']; ?></td><td><?php echo get_promotorName($row_right['node'] , $conn); ?></td><td> - </td><td><a href="genealogy?id=<?php echo $row_right['node'] ?>" target="_blank" >Show Tree</a></td>
		</tr>
            <?php
            get_ChildNodes(  $row_right['node'] , $conn   );
            
        }
    }
}

?>
?>

<html>
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title>
	Left-Right Status
</title><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="userCss/fontawesome-free-all.min.css" /><link rel="stylesheet" href="userCss/ionicons.min.css" /><link rel="stylesheet" href="userCss/tempusdominus-bootstrap-4.min.css" /><link rel="stylesheet" href="userCss/icheck-bootstrap.min.css" /><link rel="stylesheet" href="userCss/jqvmap.min.css" /><link rel="stylesheet" href="userCss/adminlte.min.css" /><link rel="stylesheet" href="userCss/OverlayScrollbars.min.css" /><link rel="stylesheet" href="userCss/daterangepicker.css" /><link rel="stylesheet" href="userCss/summernote-bs4.css" /><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <script src="userJs/jquery.min.js"></script>
    <script src="userJs/jquery-ui.min.js"></script>
<script src="https://use.fontawesome.com/e363e29cbd.js"></script>
    

    <!--Start of Tawk.to Script-->

  
    <!--End of Tawk.to Script-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <form method="post" action="./left-right-list.html" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
</div>


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
                            <div class="alert alert-danger alert-dismissible">This Demo has standard binary plan features. For custom MLM Software development, please <a href="contactus.html" class="btn btn-block btn-primary mt-3">Contact Us</a></div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button> 
                        </div>
                    </div> 
                </div> 
            </div>
            <?php
            
                include "includes/sidebar.php";
            ?>
            <div class="content-wrapper">

            
            
            
            
            
            
            
            
            <?php
            $left = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$email' and positon=1");
            $right = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$email' and positon=2");
            $row_left = mysqli_fetch_array($left);
            $row_right = mysqli_fetch_array($right);
            $left_node = $row_left['node'];
            $right_node = $row_right['node'];
            ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>
                            <?php
                             if (mysqli_num_rows($left)>0)
                            {
                                echo countNodes( $left_node , $conn   )+1; 
                            }    
                            else
                            {
                                echo '0';
                            }
                            ?></h3>
                        <p>Left Side Members</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                      </div>
                      <a href="left-right-list.html" class="small-box-footer"
                        >More info <i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3 style="color: aliceblue;">
                            <?php
                             if (mysqli_num_rows($right)>0)
                            {
                                echo countNodes( $right_node , $conn   )+1; 
                            }    
                            else
                            {
                                echo '0';
                            }
                            ?>
                            </h3>
                        <p style="color: aliceblue;">Rigt Side Members</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                      </div>
                      <a href="left-right-list.html" class="small-box-footer"
                        >More info <i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">My Left Right List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
<!--            <div class="card card-info color-palette-box">-->
<!--                <div class="card-header">-->
<!--                    <h3 class="card-title">My Left Right List</h3>-->
<!--                </div>-->
<!--                <div class="card-body">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-12">-->
<!--                            <div class="row form-group">-->
<!--                                <table id="CPHMain_rdoby">-->
<!--	<tr>-->
<!--		<td><input id="CPHMain_rdoby_0" type="radio" name="ctl00$CPHMain$rdoby" value="1" checked="checked" /><label for="CPHMain_rdoby_0">By DOJ</label></td><td><input id="CPHMain_rdoby_1" type="radio" name="ctl00$CPHMain$rdoby" value="2" /><label for="CPHMain_rdoby_1">By Paid</label></td>-->
<!--	</tr>-->
<!--</table>-->
<!--                            </div>-->

<!--                            <div class="row form-group">-->
<!--                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">-->
<!--                                    <label>From Date</label>-->
<!--                                    <div class="input-group">-->
<!--                                        <input name="ctl00$CPHMain$txtFromdt" type="text" maxlength="10" id="CPHMain_txtFromdt" class="DateCalendar form-control" />-->

<!--                                        <div class="input-group-append">-->
<!--                                            <span class="input-group-text">-->
<!--                                                <span class="form-control-feedback fa fa-1x fa-calendar"></span></span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">-->
<!--                                    <label>To Date</label>-->
<!--                                    <div class="input-group">-->
<!--                                        <input name="ctl00$CPHMain$txttodate" type="text" maxlength="10" id="CPHMain_txttodate" class="DateCalendar form-control" />-->

<!--                                        <div class="input-group-append">-->
<!--                                            <span class="input-group-text">-->
<!--                                                <span class="form-control-feedback fa fa-1x fa-calendar"></span></span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-6 col-md-4">-->
<!--                                    <label>Subscription Type</label><select name="ctl00$CPHMain$ddlProduct" id="CPHMain_ddlProduct" class="form-control">-->
<!--	<option selected="selected" value="0">--Select--</option>-->
<!--	<option value="1">FREE REGISTER</option>-->
<!--	<option value="2">100$</option>-->
<!--	<option value="3">200$</option>-->
<!--	<option value="4">300$</option>-->
<!--	<option value="5">500$</option>-->
<!--	<option value="6">700$</option>-->
<!--	<option value="7">1000$</option>-->
<!--	<option value="8">1500$</option>-->

<!--</select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="card-footer">-->
<!--                    <input type="submit" name="ctl00$CPHMain$btnSearchh" value="Search" id="CPHMain_btnSearchh" class="btn btn-info" />-->
                    
<!--                </div>-->
<!--            </div>-->
            <div class="card card-info color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">Members List</h3>
                </div>
                <div class="card-body">
                    <fieldset>
                        <legend>Left Members</legend>
                        <div class="table-responsive">
                            <div>
                                
        <?php 
        
    $left = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$email' and positon=1");
    $right = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$email' and positon=2");
    $row_left = mysqli_fetch_array($left);
    $row_right = mysqli_fetch_array($right);
        
        ?>
	<table class="table table-bordered" cellspacing="0" rules="all" border="1" id="CPHMain_LeftDisplay" style="width:100%;border-collapse:collapse;">
	<tr>
		
		
		
		
			<th scope="col">User ID</th><th scope="col">User Name</th><th scope="col">Joining Date</th><th scope="col">Reffer ID</th><th scope="col">Package Name</th><th scope="col">Action</th>
		</tr>
		<?php 
                             if (mysqli_num_rows($left)>0)
                            {
		    $nodeData = get_user($row_left['node'] , $conn); 
		?>
		<tr><td><?php echo $nodeData['uname'] ?></td><td><?php echo $nodeData['fname'].' '. $nodeData['lname']; ?></td><td><?php echo $row_left['date']; ?></td><td><?php echo get_promotorName($row_left['node'] , $conn); ?></td><td> - </td><td><a href="genealogy?id=<?php echo $row_left['node'] ?>" target="_blank" >Show Tree</a></td></tr>
		<?php get_ChildNodes( $row_left['node'] , $conn   ); }?>
	</table>
</div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Right Members</legend>
                        <div class="table-responsive">
                            <div>
	<table class="styleGV table table-bordered" cellspacing="0" rules="all" border="1" id="CPHMain_RightDisplay" style="width:100%;border-collapse:collapse;">
		<tr>
			<th scope="col">User ID</th><th scope="col">User Name</th><th scope="col">Joining Date</th><th scope="col">Reffer ID</th><th scope="col">Package Name</th><th scope="col">Action</th>
		</tr>
		<?php 
                             if (mysqli_num_rows($right)>0)
                            {
		    $nodeData = get_user($row_right['node'] , $conn); 
		?>
		<tr><td><?php echo $nodeData['uname'] ?></td><td><?php echo $nodeData['fname'].' '. $nodeData['lname']; ?></td><td><?php echo $row_right['date']; ?></td><td><?php echo get_promotorName($row_right['node'] , $conn); ?></td><td> - </td><td><a href="genealogy?id=<?php echo $row_right['node'] ?>" target="_blank" >Show Tree</a></td></tr>
		<?php get_ChildNodes( $row_right['node'] , $conn   ); } ?>
	</table>
</div>
                        </div>
                    </fieldset>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </section>

            </div>
            <footer class="main-footer">
                <strong>Copyright &copy; 2019 <a href="https://www.realmlmsoftware.com">Real MLM Software</a>.</strong>
                All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        Email - <b>care@realmlmsoftware.com</b>
    </div>
            </footer>
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>My Account</h5>
                    <p><a href="profile.html">My Profile</a></p>
                    <p><a href="logout.html">Logout</a></p>
                </div>
            </aside>
        </div>
    </form>

    <script>
        $('input').parent('.custom-control-input').each(function () {
            var $this = $(this);
            var cssClass = $this.attr("class");
            var targetControl = $(this).parent().find('input');
            $(this).parent().find('label').addClass("custom-control-label");
            $(targetControl).addClass(cssClass).unwrap().parent('label[for],span').first().addClass(cssClass);
        });
    </script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap DatePicker -->
   <script type="text/javascript">
       $(function () {
           $('.DateCalendar').datepicker({
               changeMonth: true,
               changeYear: true,
               format: "dd/mm/yyyy",
               language: "tr"
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
