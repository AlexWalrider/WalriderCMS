 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP 
$password = "amorfink96"; 
$host = $_SERVER['HTTP_HOST'];
if ($password == "amorfink96")
{
////////////////////////////////////////////
$imago = $_POST['imagejpg']; 
$image = str_replace (" ", "", $imago);
$pago = $_POST['pagehtml']; 
$page = str_replace (" ", "", $pago);
////////////////////////////////////////////
if ($image =="")
{
$cont = file_get_contents ("../text/data.php");
$new = preg_replace("#(\[$pago\](.*?)\[\/$pago\])#is", '', $cont);
$log = fopen("../text/data.php","w"); 
fwrite($log,"$new");
fclose($log); 
/////////////////////////////////
$get = file_get_contents ("pages.php");
$storing = str_replace ("<a href='http://$host/v$pago'>$pago</a><br>", "", $get);
$log2 = fopen("../view/pages.php","w"); 
fwrite($log2,"");
fclose($log2);
//////////////////////////////
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Текст удален</center></h1>"."\n";
}
/////////////////////////////////////////////////////
if ($page =="")
{
$imgname = "../../img/uploads/$image";
if (file_exists($imgname)) 
{
unlink ("$imgname");
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Файл удален</center></h1>"."\n";
}
else
{
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Файл не найден</center></h1>"."\n";
}
}
///////////////////////////////////////////////////////
else
{
if ($page ==""){}
if ($image ==""){}
else
{
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Вы ввели данные в оба поля</center></h1>"."\n";
}
}
}
////////////////////////////////////////////
else
{
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Введен неверный пароль</center></h1>"."\n";
}
?>