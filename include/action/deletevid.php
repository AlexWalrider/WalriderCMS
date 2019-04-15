 <?PHP include ("../protect/vainclude.php"); ?>
<?PHP 
$password = "amorfink96"; 
$host = $_SERVER['HTTP_HOST'];
if ($password == "amorfink96")
{
////////////////////////////////////////////
$imago = $_POST['vidhost']; 
$imag = str_replace (" ", "", $imago);
$image = ("$imag.mp4");
////////////////////////////////////////////
if ($image =="")
{
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
<center><h1>Вы не ввели имя картинки</center></h1>"."\n";
}
else
{
$imgname = "../../uvid/$image";
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
}
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