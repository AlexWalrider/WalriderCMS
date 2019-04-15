
<?PHP 
$text = $_POST['Recordtext']; 
$key = $_POST['key']; 
$host = $_SERVER['HTTP_HOST'];
$randus = mt_rand (0,99999999999);
$mdus1 = md5($randus);
$mdus = substr($mdus1, 0, 7);
$main = file_get_contents ("notepad.html");
if ($key == "")
{
	$key = "$mdus";
}
else
{	
}
if ($text == "")
{
echo ("Вы не ввели текст");
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/gserv/notes/notepad'></head></html>";
}
else
{
if (
preg_match("/<\?|script|javascript/uis","$text")
)
{
echo ("Cкрипты запрещены");
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/page'></head></html>";
}
else
{
$log = fopen("notes/$mdus.php","w"); 
fwrite($log,"<?php exit(); ?>$text");
fclose($log); 
//$fagt = file_get_contents ("http://$host/url/npost.php?link=http://$host/notepad/open?note=$mdus&key=x$key");
//echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/short.php?url=http://$host/notepad/open?note=$mdus&keyword=x$key'></head></html>";
//echo "<meta http-equiv='refresh' content='0;url=http://$host/k$key'>";
echo "<meta http-equiv='refresh' content='0;url=http://$host/k$key'>";
//header("Location: http://$host/k$key");
}
}
?>

