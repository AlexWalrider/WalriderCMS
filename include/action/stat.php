 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP 
$password = "amorfink96"; 
$host = $_SERVER['HTTP_HOST'];
if ($password == "amorfink96")
{
////////////////////////////////////////////
$imago = $_POST['status']; 
$image = strip_tags ($imago);
////////////////////////////////////////////
if ($image =="")
{
echo "
<style>
body {
background: url(http://$host/index_files/1.jpg);
}
</style>
<center><h1>Вы не ввели статус</center></h1>"."\n";
}
else
{
if (
preg_match("/<\?|script|javascript/uis","$text")
)
{
echo ("Cкрипты запрещены");
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/adminplace'></head></html>";
}
else
{
$log = fopen("../stat.txt","w"); 
fwrite($log,"$image");
fclose($log); 
echo "
<style>
body {
background: url(http://$host/index_files/1.jpg);
}
</style>
<center><h1>Статус изменен</center></h1>"."\n";
}
}
}
else
{
echo "
<style>
body {
background: url(http://$host/index_files/1.jpg);
}
</style>
<center><h1>Введен неверный пароль</center></h1>"."\n";
}
?>