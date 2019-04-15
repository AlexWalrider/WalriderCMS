 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP 
$log = fopen("../log/pview.php","w"); 
fwrite($log,"");
fclose($log); 
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Файл очищен</center></h1>"."\n";
?>