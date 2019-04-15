<?php
    $ussro = file_get_contents ("../protect/psswd/aussr.php");
	$pswdo = file_get_contents ("../protect/psswd/apswd.php");
	$ussr = str_replace ("<?php exit(); ?>", "", $ussro);
	$ussru = str_replace ("\n", "", $ussr);
	$pswd = str_replace ("<?php exit(); ?>", "", $pswdo);
	$pswdu = str_replace ("\n", "", $pswd);
    $username="$ussru";
    $password="$pswdu";
    $host = $_SERVER['HTTP_HOST'];
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
                echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/'></head></html>";
                exit;
            }
        }
		?>