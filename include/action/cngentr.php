﻿ <?PHP include ("../protect/vainclude.php"); ?>
<?PHP
$user = $_POST['logino']; 
$password = $_POST['passworda']; 

$log = fopen("../protect/psswd/ussr.php","w"); 
fwrite($log,"<?php exit(); ?>\n$user");
fclose($log); 

$logo = fopen("../protect/psswd/pswd.php","w"); 
fwrite($logo,"<?php exit(); ?>\n$password");
fclose($logo);
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Логин и пароль изменены</center></h1>"."\n";
?>
