 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP
$php = "<?php exit(); ?>";
///////////////////////////////////////////////
$fgcpgo = file_get_contents ("../log/pview.php");
$fgcent = file_get_contents ("../log/xview.php");
$fgcimg = file_get_contents ("../log/iview.php");
///////////////////////////////////////////////
$arcpag = str_replace ("$php", "", $fgcpgo);
$arcent = str_replace ("$php", "", $fgcent);
$arcimg = str_replace ("$php", "", $fgcimg);
///////////////////////////////////////////////
include ("take.php");
////////////////////////////////////////////////////////
$logo = fopen("history.php","w"); 
fwrite($logo,"$php \n[page] $resultat $arcpag [endpage] \n [image] $resultat2 $arcimg [endimage] \n [enter] $resultat3 $arcent [endenter]");
fclose($logo); 

$log = fopen("../log/pview.php","w"); 
fwrite($log,"");
fclose($log); 
$log2 = fopen("../log/xview.php","w"); 
fwrite($log2,"");
fclose($log2); 
$log3 = fopen("../log/iview.php","w"); 
fwrite($log3,"");
fclose($log3); 
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Файлы очищены и занесены в архив</center></h1>"."\n";
?>