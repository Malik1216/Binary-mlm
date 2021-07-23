


<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title>
	Change Password
</title><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="userCss/fontawesome-free-all.min.css" /><link rel="stylesheet" href="userCss/ionicons.min.css" /><link rel="stylesheet" href="userCss/tempusdominus-bootstrap-4.min.css" /><link rel="stylesheet" href="userCss/icheck-bootstrap.min.css" /><link rel="stylesheet" href="userCss/jqvmap.min.css" /><link rel="stylesheet" href="userCss/adminlte.min.css" /><link rel="stylesheet" href="userCss/OverlayScrollbars.min.css" /><link rel="stylesheet" href="userCss/daterangepicker.css" /><link rel="stylesheet" href="userCss/summernote-bs4.css" /><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <script src="userJs/jquery.min.js"></script>
    <script src="userJs/jquery-ui.min.js"></script>

    

    <!--Start of Tawk.to Script-->

   
    <!--End of Tawk.to Script-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  


<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>



<script src="/WebResource.axd?d=Z3BIEANYM9NXN_lrbj-KBLi8EvEwwkJXWmYbsLSr4YpBguSoGcBaB4mvdjd6-sFRZHsmgqrlSheiQVhZ1izDWvEn6zbq-l6ldkqipxLGZF81&amp;t=637346973180000000" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E071A369" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAWjH2Y6kVeEgr+xe6mWBhwGQsrb3JnNjqT49byrz2gHxByx8//t5iuTAXPcyh6yIRujZi60iT+fYUH01sGeMbjDcnw4ptoTEt06amaOc+0qIIjypqVNHhjDkUKG/fiwxuc4kL8yMIsLMMWMttBo24he" />
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
                        <a href="/contactus.html" class="nav-link">Contact Us</a>
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
                
            ?>
            <div class="content-wrapper">

                
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Change Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.tml">Home</a></li>
                        <li class="breadcrumb-item active">Change Login Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="alert alert-danger" id="error1" role="alert" style = "display:none" >
                Failed ! incorrect old password.
            </div>
            <div class="alert alert-danger" id="error2" role="alert" style = "display:none" >
                Failed ! Please enter all the reqired data.
            </div>
            <div class="alert alert-danger" id="error3" role="alert" style = "display:none" >
                Failed ! Password and confirm password didn't match.
            </div>
            <div class="alert alert-success" id="success" role="alert" style = "display:none" >
                Success ! Password changed successfully.
            </div>
            <div class="card card-info color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">Change Login Password</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
<div>
                            <div id="CPHMain_vs1" class="alert alert-danger" style="display:none;">

</div>
</div>
                            <div class="row form-group">
                                <label for="">Current Password</label>

                                <input name="ctl00$CPHMain$txtPassword" type="password" maxlength="20" id="oldpass" class="form-control" />
                                <span id="CPHMain_RQ1" style="display:none;">*</span>
                            </div>



                            <div class="row form-group">
                                <label for="">New Password</label>
                                <input name="ctl00$CPHMain$txtNewPassword1" type="password" maxlength="20" id="pass" class="form-control" />
                                <span id="CPHMain_RQ2" style="display:none;">*</span>
                                <span id="CPHMain_Compv1" style="display:none;">*</span>
                            </div>

                            <div class="row form-group">
                                <label for="">Confirm Password</label>
                                <input name="ctl00$CPHMain$txtNewPassword2" type="password" maxlength="20" id="cpass" class="form-control" />
                                <span id="CPHMain_RQ3" style="display:none;">*</span>
                            </div>

                            <div class="">
                                <button  name="ctl00$CPHMain$butSave" onclick="updatepass()" id="CPHMain_butSave" class="btn btn-info" > Change Password </button>                            </div>
                            
                        </div>
                    </div>
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
            <?php include "includes/min_Sidebar.php"; ?>
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
    <!-- Bootstrap DatePicker -->
    <style>
        .datepicker table {
            width: 100%;
        }
    </style>
    <script>
        function show_alert( ele )
        {
            $(window).scrollTop(0);
             ele.fadeIn()
                  setTimeout(
                      function()
                      {
                        ele.fadeOut();     
                      }
                     , 3000);
        }
        function updatepass()
        {
            $("#error1").fadeOut()
            $("#error2").fadeOut()
            $("#error3").fadeOut()
            $("#success").fadeOut()
            var oldpass = $("#oldpass").val();
            var pass = $("#pass").val();
            var cpass = $("#cpass").val();
            if ( pass=='' || cpass=='' || oldpass=='' )
            {
                show_alert( $("#error2") );
            }
            else if ( pass != cpass )
            {
               show_alert( $("#error3") );
            }
            else
            {
                $.ajax({
            
            url: "helper/changepass.php",
            type: 'post',
            data:{ pass : pass , oldpass : oldpass  },
            success: function( data ){
                console.log(data);
                if (data=='true')
                {
                    show_alert( $("#success") );
                }
                else
                {
                    show_alert( $("#error1") );
                }
           
            }
});
            }
        }
        
    </script>
</body>
</html>
