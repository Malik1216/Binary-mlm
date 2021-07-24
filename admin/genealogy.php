
<?php
session_start();
 include "../includes/db_config.php";
 
function get_username($email , $conn)
{
    $result1 = mysqli_query($conn , "SELECT * FROM users WHERE email= '$email' ");
    $data = mysqli_fetch_array($result1);
    return $data['fname']. " " . $data['lname']; 
}
function get_fname($email , $conn)
{
    $result1 = mysqli_query($conn , "SELECT * FROM users WHERE email= '$email' ");
    $data = mysqli_fetch_array($result1);
    return $data['fname']; 
}
function get_promotorName($email , $conn)
{
         $result1 = mysqli_query($conn , "SELECT * FROM users WHERE email= '$email' ");
         $data = mysqli_fetch_array($result1);
         $sid = explode(',', base64_decode($data['sid']));
         $semail = $sid[0];
         return get_username($semail , $conn);
}
function generateTree( $parent , $conn , $count=0 )
{
    if ($count>2)
    {
        return;
    }
    $count +=1;
    $left = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=1");
    $right = mysqli_query($conn , "SELECT * FROM tree WHERE parent = '$parent' and positon=2");
    $row_left = mysqli_fetch_array($left);
    $row_right = mysqli_fetch_array($right);
    if (mysqli_num_rows($left)>0 or mysqli_num_rows($right)>0)
    {
        echo "<ul>";
        echo "<li>";
    if (mysqli_num_rows($left)>0)
    {
        ?>
         <div class="node"><a href="genealogy?id=<?php echo $row_left['node'] ?>" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    
        <span><?php echo get_fname($row_left['node'] , $conn); ?></span></a>    
  
        <div class="tooltip">    
  
        <table>    
        
        <tr><th>Full Name</th><td><?php echo get_username($row_left['node'] , $conn) ?></td></tr>   
        <tr><th>Promoter name</th><td><?php echo get_promotorName($row_left['node'] , $conn) ?></td></tr>   
        <tr><th>Joning date</th><td><?php echo $row_left['date']?></td></tr>   
  
        </table>    
  
        </div>    
  
        </div>      
                      
        <?php
        generateTree(  $row_left['node'] , $conn , $count  );
    }
     echo "</li>";
     echo "<li>";
    if (mysqli_num_rows($right)>0)
    {
         ?>
         <div class="node"><a href="genealogy?id=<?php echo $row_right['node'] ?>" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    

        <span><?php echo get_fname($row_right['node'] , $conn); ?></span></a>    
  
        <div class="tooltip">    
  
        <table>    
      
            
        <tr><th>Full Name</th><td><?php echo get_username($row_right['node'] , $conn) ?></td></tr>   
        <tr><th>Promoter name</th><td><?php echo get_promotorName($row_right['node'] , $conn) ?></td></tr>   
        <tr><th>Joning date</th><td><?php echo $row_right['date']?></td></tr>  
  
          
  
        </table>    
  
        </div>    
  
        </div>      
                      
        <?php
        generateTree(  $row_right['node'] , $conn , $count  );
        
    }
    echo "</li>";
    echo "</ul>";
    }
}


?>

<!DOCTYPE html>

<html>
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title>
	Genealogy
</title><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="userCss/fontawesome-free-all.min.css" /><link rel="stylesheet" href="userCss/ionicons.min.css" /><link rel="stylesheet" href="userCss/tempusdominus-bootstrap-4.min.css" /><link rel="stylesheet" href="userCss/icheck-bootstrap.min.css" /><link rel="stylesheet" href="userCss/jqvmap.min.css" /><link rel="stylesheet" href="userCss/adminlte.min.css" /><link rel="stylesheet" href="userCss/OverlayScrollbars.min.css" /><link rel="stylesheet" href="userCss/daterangepicker.css" /><link rel="stylesheet" href="userCss/summernote-bs4.css" /><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <script src="userJs/jquery.min.js"></script>
    <script src="userJs/jquery-ui.min.js"></script>
    <script src="https://use.fontawesome.com/e363e29cbd.js"></script>

    <style>
        .treeWrapper { text-align: center; font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif; overflow-x: auto; -webkit-overflow-scrolling: touch }
        .tree { text-align: center; width: auto; display: inline-block; margin: 0px auto; min-width: 1000px; }
        * { margin: 0; padding: 0; }
        .tree .node { position: relative; }
        .tree .tooltip { position: absolute; top: 120%; left: 50%; z-index: 1; background: #ffffff; border: solid 12px #ffffff; box-shadow: 0px 0px 5px #cccccc; border-radius: 6px; margin-left: -152px; width: 300px; white-space: nowrap; font-size: .8rem; }
        .tree .tooltip::before { content: " "; position: absolute; background: #ffffff; width: 10px; height: 10px; top: -16px; left: 50%; margin-left: -3px; border: solid 1px #e2e2e2; transform: rotate(45deg); z-index: 2; }
        .tree .tooltip::after { content: " "; position: absolute; background: #ffffff; width: 50px; height: 11px; top: -12px; left: 50%; margin-left: -28px; z-index: 3; }
        .tree .tooltip table { width: 100%; }
        .tree .tooltip table th { background: #ebebeb; text-align: left; padding: 5px 12px; width: 50%; }
        .tree .tooltip table td { background: #fafafa; text-align: left; padding: 5px 12px; width: 50%; }
        .tree .mImg { display: block; text-align: center; position: relative; z-index: 2; }
        .tree .person img { overflow: hidden; border-radius: 50%; border: solid 3px #ffffff; box-shadow: 0px 0px 3px #000000; height: 26px; width: 26px; margin-top: -20px; background: #ffffff; }
        .tree ul { padding-top: 35px; position: relative; transition: all 0.5s; -webkit-transition: all 0.5s; -moz-transition: all 0.5s; overflow: visible; }
        .tree li { float: left; text-align: center; list-style-type: none; position: relative; padding: 35px 5px 0 5px; transition: all 0.5s; -webkit-transition: all 0.5s; -moz-transition: all 0.5s; min-width: 100px; width: 50%; }
        .tree li::before, .tree li::after { content: ''; position: absolute; top: 0; right: 50%; border-top: 1px solid #ccc; width: 50%; height: 35px; }
        .tree li::after { right: auto; left: 50%; border-left: 1px solid #ccc; }
        .tree li:only-child::after, .tree li:only-child::before { display: none; }
        .tree li:only-child { padding-top: 0; width: 100%; }
        .tree li:first-child::before, .tree li:last-child::after { border: 0 none; }
        .tree li:last-child::before { border-right: 1px solid #ccc; border-radius: 0 5px 0 0; -webkit-border-radius: 0 5px 0 0; -moz-border-radius: 0 5px 0 0; }
        .tree li:first-child::after { border-radius: 5px 0 0 0; -webkit-border-radius: 5px 0 0 0; -moz-border-radius: 5px 0 0 0; }
        .tree ul ul::before { content: ''; position: absolute; top: 0; left: 50%; border-left: 1px solid #ccc; width: 1px; height: 35px; }
        .tree li a { border: 1px solid #ccc; padding: 5px 10px; text-decoration: none; color: #666; font-family: arial, verdana, tahoma; font-size: 11px; display: inline-block; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; transition: all 0.5s; -webkit-transition: all 0.5s; -moz-transition: all 0.5s; }
        .tree li a:hover, .tree li a:hover + ul li a { background: #c8e4f8; color: #000; border: 1px solid #94a0b4; }
        .tree li a:hover + ul li::after, .tree li a:hover + ul li::before, .tree li a:hover + ul::before, .tree li a:hover + ul ul::before { border-color: #94a0b4; }
        a.person:hover ~ .tooltip { opacity: 1; transition: ease-in; transition-duration: .3s; z-index: 3; }
    </style>

    <!--Start of Tawk.to Script-->


    <!--End of Tawk.to Script-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <form method="post" action="./genealogy.html" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">


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
            <?php include "includes/sidebar.php" ?>
            <div class="content-wrapper">

                
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">My Geneology</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">My Geneology</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">My Geneology</h3>
                </div>
                <!--<div class="card-body">-->
                <!--    <div class="row">-->
                <!--        <div class="col-sm-6">-->
                <!--            <label>-->
                <!--                <span id="CPHMain_Label1">Search by Promoter ID :</span></label>-->
                <!--            <div class="input-group">-->
                <!--                <input name="ctl00$CPHMain$txtPromoterid" type="text" id="CPHMain_txtPromoterid" class="form-control" />-->
                <!--                <span id="CPHMain_RQ1" style="display:none;">*</span>-->
                                
                <!--            </div>-->
                <!--        </div>-->

                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div id="CPHMain_GenealogySection" class="main-card mb-3 card">
                <div class="card-body">
                    <div class="treeWrapper">
                        <div class="tree">
 <ul>      
         <li>      
         <?php if (isset($_GET['id'])) 
                {
                    $tree_email  = $_GET['id'];
                }
                else
                {
                    $tree_email  = $user_data['email'] ;
                }
         ?>
            <div class="node"><a class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    
  
    <span><?php echo get_fname($tree_email , $conn) ?></span></a>    
  
    <div class="tooltip">    
  
    <table>    
  
    <tr><th>Name</th><td><?php echo get_username($tree_email , $conn) ?></td></tr>    
  
  
    </table>    
  
    </div>    
  
        </div>   
        <?php
        generateTree( $tree_email , $conn , 0 );
                
        ?>
    <!--        <ul>      -->
    <!--            <li>      -->
    <!--                <div class="node"><a href="genealogy.html?PID=Amin" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>Amin</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Mohammed</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>Amin</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                <ul>      -->
    <!--                    <li>      -->
    <!--                        <div class="node"><a href="genealogy.html?PID=YUNUS" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>YUNUS</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Mohd Yunus</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>YUNUS</td></tr>    -->
  
    <!--<tr><th>Package</th><td>3</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                        <ul>      -->
    <!--                            <li>      -->
    <!--                                <div class="node"><a href="genealogy.html?PID=chandu" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>chandu</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Chandra Kant</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>chandu</td></tr>    -->
  
    <!--<tr><th>Package</th><td>3</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                            </li>      -->
    <!--                            <li>      -->
    <!--                                <div class="node"><a href="genealogy.html?PID=tabassum" class="person"><span class="mImg"><img src="userImages/Paid_F.png" /></span>    -->
  
    <!--<span>tabassum</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Tabassum</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>tabassum</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>F</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                            </li>       -->
    <!--                        </ul>      -->
    <!--                    </li>    <li>      -->
    <!--                        <div class="node"><a href="genealogy.html?PID=budania" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>budania</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>sahab</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>budania</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                        <ul>      -->
    <!--                            <li>      -->
    <!--                                <div class="node"><a href="/QuickJoin.html?parentpromoter=budania&Leg=L"><span class="person"><span class="mImg"><img src="userImages/add-new.png" /></span></span>Add New</a></div>      -->
    <!--                            </li>      -->
    <!--                            <li>      -->
    <!--                                <div class="node"><a href="/QuickJoin.html?parentpromoter=budania&Leg=R"><span class="person"><span class="mImg"><img src="userImages/add-new.png" /></span></span>Add New</a></div>      -->
    <!--                            </li>       -->
    <!--                        </ul>      -->
    <!--                    </li>      -->
    <!--                </ul>      -->
    <!--            </li>      -->
    <!--<li>      -->
    <!--                <div class="node"><a href="genealogy.html?PID=sameer17" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>sameer17</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Sameer</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>sameer17</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                <ul>      -->
    <!--      <li>      -->
    <!--                        <div class="node"><a href="genealogy.html?PID=kalpana" class="person"><span class="mImg"><img src="userImages/Paid_F.png" /></span>    -->
  
    <!--<span>kalpana</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Kalpana</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>kalpana</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>F</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                        <ul>      -->
    <!--                            <li>      -->
    <!--                                <div class="node"><a href="/QuickJoin.html?parentpromoter=kalpana&Leg=L"><span class="person"><span class="mImg"><img src="userImages/add-new.png" /></span></span>Add New</a></div>      -->
    <!--                            </li>      -->
    <!--                            <li>      -->
    <!--                                <div class="node"><a href="/QuickJoin.html?parentpromoter=kalpana&Leg=R"><span class="person"><span class="mImg"><img src="userImages/add-new.png" /></span></span>Add New</a></div>      -->
    <!--                            </li>       -->
    <!--                        </ul>      -->
    <!--                    </li> <li>      -->
    <!--                        <div class="node"><a href="genealogy.html?PID=HABIB123" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>HABIB123</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>SK RAHAMAN</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>HABIB123</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                        <ul>      -->
    <!--                            <li>      -->
    <!--                              <div class="node"><a href="genealogy.html?PID=AJIJUL123" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>AJIJUL123</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Sk AJIJUL</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>AJIJUL123</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                            </li>      -->
    <!--                            <li>      -->
    <!--                   <div class="node"><a href="genealogy.html?PID=743373" class="person"><span class="mImg"><img src="userImages/Paid_M.png" /></span>    -->
  
    <!--<span>743373</span></a>    -->
  
    <!--<div class="tooltip">    -->
  
    <!--<table>    -->
  
    <!--<tr><th>Promoter Name</th><td>Habib</td></tr>    -->
  
    <!--<tr><th>Promoter ID</th><td>743373</td></tr>    -->
  
    <!--<tr><th>Package</th><td>1</td></tr>    -->
  
    <!--<tr><th>Sex</th><td>M</td></tr>    -->
  
    <!--</table>    -->
  
    <!--</div>    -->
  
    <!--    </div>      -->
    <!--                            </li>      -->
    <!--                        </ul>      -->
    <!--                    </li>      -->
    <!--                </ul>      -->
    <!--            </li>       -->
    <!--        </ul>      -->
        </li>      
    </ul>
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
            <?php
             include "includes/min_Sidebar.php" ;
            ?>
        </div>
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("CPHMain_RQ1"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var CPHMain_RQ1 = document.all ? document.all["CPHMain_RQ1"] : document.getElementById("CPHMain_RQ1");
CPHMain_RQ1.controltovalidate = "CPHMain_txtPromoterid";
CPHMain_RQ1.focusOnError = "t";
CPHMain_RQ1.errormessage = "Promoter ID field can\\\'t be empty";
CPHMain_RQ1.display = "Dynamic";
CPHMain_RQ1.validationGroup = "genealogy";
CPHMain_RQ1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
CPHMain_RQ1.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
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
