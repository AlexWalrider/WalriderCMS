 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP 
$log3 = fopen("../log/iview.php","w"); 
fwrite($log3,"");
fclose($log3); 
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Файл очищен</center></h1>"."\n";
?>