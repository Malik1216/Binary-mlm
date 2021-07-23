<?php 
session_start();
?>
<!DOCTYPE html>

<html>
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title>
	User Profile
</title><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="userCss/fontawesome-free-all.min.css" /><link rel="stylesheet" href="userCss/ionicons.min.css" /><link rel="stylesheet" href="userCss/tempusdominus-bootstrap-4.min.css" /><link rel="stylesheet" href="userCss/icheck-bootstrap.min.css" /><link rel="stylesheet" href="userCss/jqvmap.min.css" /><link rel="stylesheet" href="userCss/adminlte.min.css" /><link rel="stylesheet" href="userCss/OverlayScrollbars.min.css" /><link rel="stylesheet" href="userCss/daterangepicker.css" /><link rel="stylesheet" href="userCss/summernote-bs4.css" /><link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <script src="userJs/jquery.min.js"></script>
    <script src="userJs/jquery-ui.min.js"></script>

      <script src="https://use.fontawesome.com/e363e29cbd.js"></script>


<body class="hold-transition sidebar-mini layout-fixed">
    <form method="post" action="./profile.html" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">





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
            include "includes/sidebar.php" ?>
            <div class="content-wrapper">

                
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">My Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">My Profile</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div>

                              

                                <div id="CPHMain_vs1" class="alert alert-danger" style="display:none;">

</div>
                            </div>
                            

                               <div class="row form-group">
                                <label for="" class="col-sm-2">Name</label>
                                <div class="col-sm-10">
                                    <?php echo $user_name; ?>
                                </div>
                            </div>
                            <!-- <div class="row form-group">
                                <label for="" class="col-sm-2">Gender</label>
                                <div class="col-sm-10">
                                    <table>
                                        <tr>
                                            <td><div class="custom-control custom-radio">
                                                <span class="custom-control-input"><input id="rdoMale" type="radio" name="ctl00$CPHMain$Sex" value="rdoMale" checked="checked" /><label for="rdoMale">Male</label></span>
                                                </div>
                                            </td>
                                            <td style="width:60px;">&nbsp;</td>
                                            <td><div class="custom-control custom-radio">
                                                <span class="custom-control-input"><input id="rdoFeMale" type="radio" name="ctl00$CPHMain$Sex" value="rdoFeMale" /><label for="rdoFeMale">Female</label></span></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div> -->

                            <div class="row form-group">
                                <label for="" class="col-sm-2">Mobile</label>
                                <div class="col-sm-10">
                                    <?php echo $user_data['phone']; ?>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-sm-2">Email</label>
                                <div class="col-sm-10">
                                    <?php echo $user_data['email']; ?>
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-sm-2">Sponsor id( Left )</label>
                                <div class="col-sm-10">
                                    <?php echo $user_data['left_Sid']; ?>
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-sm-2">Sponsor id( Right )</label>
                                <div class="col-sm-10">
                                    <?php echo $user_data['right_Sid']; ?>
                                    
                                </div>
                            </div>
                              <div class="row form-group">
                                <label for="" class="col-sm-2">invite link ( Left )</label>
                                <div class="col-sm-10">
                                    <?php echo $base_url."signup?id=".$user_data['left_Sid']; ?>
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-sm-2">invite link ( Right )</label>
                                <div class="col-sm-10">
                                    <?php echo $base_url."signup?id=".$user_data['right_Sid']; ?>
                                    
                                </div>
                            </div>


                            <!-- <div class="row form-group">
                                <label for="" class="col-sm-2">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="ctl00$CPHMain$txtAddress" rows="2" cols="20" id="CPHMain_txtAddress" class="form-control">
a 241, sector pi</textarea>
                                    <span id="CPHMain_RQ5" class="alertInline" style="display:none;">*</span>
                                </div>
                            </div> -->

                            <!--<div class="row form-group">-->
                            <!--    <label for="" class="col-sm-2">City</label>-->
                            <!--    <div class="col-sm-10">-->
                            <!--        <input name="ctl00$CPHMain$txtCity" type="text" value="Gautam Budh Nagar" maxlength="50" id="CPHMain_txtCity" class="form-control" />-->
                            <!--        <span id="CPHMain_RQ7" class="alertInline" style="display:none;">*</span>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!-- <div class="row form-group">
                                <label for="" class="col-sm-2">State</label>
                                <div class="col-sm-10">
                                    <input name="ctl00$CPHMain$txtState" type="text" value="Uttar Pradesh" maxlength="50" id="CPHMain_txtState" class="form-control" />
                                    <span id="CPHMain_RQ6" class="alertInline" style="display:none;">*</span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-sm-2">Zip Code</label>
                                <div class="col-sm-10">
                                    <input name="ctl00$CPHMain$txtZipNo" type="text" value="201306" maxlength="8" id="CPHMain_txtZipNo" class="form-control" />
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-sm-2">Country</label>
                                <div class="col-sm-10">
                                    <select name="ctl00$CPHMain$ddlCountry" id="CPHMain_ddlCountry" class="form-control">
	<option value="0">--Select--</option>
	<option value="Albania">Albania</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia">Bosnia</option>
	<option value="Botswana">Botswana</option>
	<option value="Brazil">Brazil</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde Islands">Cape Verde Islands</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central Africa Republic">Central Africa Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Columbia">Columbia</option>
	<option value="Comoros Island">Comoros Island</option>
	<option value="Congo">Congo</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Democratic Republic of Congo (Zaire)">Democratic Republic of Congo (Zaire)</option>
	<option value="Denmark">Denmark</option>
	<option value="Diego Garcia">Diego Garcia</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica Islands">Dominica Islands</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands</option>
	<option value="Fiji Islands">Fiji Islands</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana ">French Guiana&#160;</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="Gabon">Gabon</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea Bissau">Guinea Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option selected="selected" value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea, North">Korea, North</option>
	<option value="Korea, South">Korea, South</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Laos">Laos</option>
	<option value="latvia">latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau">Macau</option>
	<option value="Macedonia (Fyrom)">Macedonia (Fyrom)</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives Republic">Maldives Republic</option>
	<option value="Malta">Malta</option>
	<option value="Mariana Islands">Mariana Islands</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte Islands">Mayotte Islands</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar (Burma)">Myanmar (Burma)</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue Island">Niue Island</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Palestine">Palestine</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion Island">Reunion Island</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Samoa (American)">Samoa (American)</option>
	<option value="Samoa (Western)">Samoa (Western)</option>
	<option value="San Marino">San Marino</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovak Republic">Slovak Republic</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="St Kitts &amp; Nevia">St Kitts &amp; Nevia</option>
	<option value="St Lucia">St Lucia</option>
	<option value="Sudan">Sudan</option>
	<option value="Surinam">Surinam</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="Uruguay">Uruguay</option>
	<option value="USA">USA</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Vietnam</option>
	<option value="Wallis &amp; Futuna Islands">Wallis &amp; Futuna Islands</option>
	<option value="Yemen Arab Republic">Yemen Arab Republic</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select>
                                </div>
                            </div> -->


                            <!--<div class="row form-group">-->
                            <!--    <label for="" class="col-sm-2">BTC Address</label>-->
                            <!--    <div class="col-sm-10">-->
                            <!--        <input name="ctl00$CPHMain$txtCity" type="text" value="Gautam Budh Nagar" maxlength="50" id="CPHMain_txtCity" class="form-control" />-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="row form-group">-->
                            <!--    <label for="" class="col-sm-2">Perfect Money Address</label>-->
                            <!--    <div class="col-sm-10">-->
                            <!--        <input name="ctl00$CPHMain$txtCity" type="text" value="Gautam Budh Nagar" maxlength="50" id="CPHMain_txtCity" class="form-control" />-->
                            <!--    </div>-->
                            <!--</div>-->


                            



                          
                            <!--<div class="">-->
                            <!--    <input type="submit" name="ctl00$CPHMain$butSave" value="Widthdraw   Request" onclick="" id="CPHMain_butSave" class="btn btn-info" />-->
                            <!--</div>-->
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
    <!-- Bootstrap DatePicker -->

    <style>
        .datepicker table {
            width: 100%;
        }
    </style>
</body>
</html>
