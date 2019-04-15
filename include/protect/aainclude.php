    <?php
     
         
    $ussro = file_get_contents ("include/protect/psswd/aussr.php");
	$pswdo = file_get_contents ("include/protect/psswd/apswd.php");
	$ussr = str_replace ("<?php exit(); ?>", "", $ussro);
	$ussru = str_replace ("\n", "", $ussr);
	$pswd = str_replace ("<?php exit(); ?>", "", $pswdo);
	$pswdu = str_replace ("\n", "", $pswd);
    $username="$ussru";
    $password="$pswdu";
     
    /*------------------ Login Data End ----------*/
     
    @error_reporting(4);
     
    /*------------------ Anti Crawler ------------*/
    if(!empty($_SERVER['HTTP_USER_AGENT']))
    {
        $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
        if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT']))
        {
            header('HTTP/1.0 404 Not Found');
            exit;
        }
    }
    echo "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\" />"; //For Ensuring... Fuck all Robots...
    /*------------------ End of Anti Crawler -----*/

        if($_COOKIE["user"] != $username && $_COOKIE["pass"] != md5($password))
        {
            if($_POST["usrname"]==$username && $_POST["passwrd"]==$password)
            {
                print'<script>document.cookie="user='.$_POST["usrname"].';";document.cookie="pass='.md5($_POST["passwrd"]).';";</script>';
            }
            else
            {
                if($_POST['usrname'])
                {
                    print'<script>alert("Sorry... Wrong UserName/PassWord");</script>';
                }
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<style>
   body {
    background: url(index_files/back.jpg);
   }
  </style>
 
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8">
  <title>Ввод пароля</title>
  <script language="javascript" src="index_files/scrypt00.js"></script>
  <script language="javascript" src="index_files/jquery00.js"></script>
  <script language="javascript" src="index_files/highligh.js"></script>
  <script language="javascript" src="index_files/social00.js"></script>
  <script language="javascript" src="index_files/change.js"></script>
  <script language="javascript" src="index_files/spoiler.js"></script>
  <style type="text/css">
   .splCont {display:none; padding:5px 15px;  border:2px solid #FF3300;}
</style>
  <link rel="stylesheet" type="text/css" href="index_files/style000.css">
  <link rel="stylesheet" type="text/css" href="index_files/social00.css">
  <link rel="icon" type="image/x-icon" href="index_files/favicon0.ico">
  <link rel="shortcut icon" type="image/x-icon" href="index_files/favicon0.ico">

</head>


<br>

<div class="container">

<div id="content">
<div align="right"><a href="page"><font color="#C0C0C0">I</font></a></div>
  <a class="headref" href=""><center><img
        src="index_files/pst_logo.png"
        align="absBottom" border="0"></center></a>




<center><h2><? echo (file_get_contents (stat.txt)); ?></h2></center>
<center>
                <div id=loginbox><p><font face="verdana,arial" size=-1><center>
                <tr><td bgcolor="green"><b><font color="white" size=-1 color="white" face="verdana,arial"><b>Entrar contrasena </b></font></th></tr>
                <tr><td bgcolor="black" style="padding:5">
                <form method="post">
                <input type="hidden" name="action" value="login">
                <input type="hidden" name="hide" value="">
                <center><table>
                <tr><td><font color="green" face="verdana,arial" size=-1>Login:</font></td><td><input type="text" size="30" name="usrname" value="username" onfocus="if (this.value == \'username\'){this.value = \'\';}"></td></tr>
                <tr><td><font color="green" face="verdana,arial" size=-1>Password:</font></td><td><input type="password" id="title_input" size="30" name="passwrd" value="password" onfocus="if (this.value == \'password\') this.value = \'\';"><div id="info" style="border: 1px solid #00ff00; width: 245px; height: 20px"></div></td></tr>
                <tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input class="clean-gray" type="submit" value="Enter"></font></td></tr></table>
                </div>
</center>


</div></div>

</div>
</body>
</html>

';
                exit;
            }
        }
		?>