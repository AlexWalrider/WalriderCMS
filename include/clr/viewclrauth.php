 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP 
$log2 = fopen("../log/xview.php","w"); 
fwrite($log2,"");
fclose($log2); 
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Файл очищен</center></h1>"."\n";
?>