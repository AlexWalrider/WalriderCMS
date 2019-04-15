
<?PHP 
$text = $_POST['link']; 
$key = $_POST['key']; 
$host = $_SERVER['HTTP_HOST'];
$randus = mt_rand (0,99999999999);
$mdus1 = md5($randus);
$mdus = substr($mdus1, 0, 7);
if ($key == "")
{
	$key = "$mdus";
}
else
{	
}
if ($text == "")
{
echo ("Вы не ввели ссылку");
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/gserv/url/'></head></html>";
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
$lux = "links/$key.txt";
$gettinger = file_get_contents ("$lux");
if ($gettinger !="")
{
	header("Location: http://$host/gserv/url/reg");
}
else{
$log = fopen("$lux","w"); 
fwrite($log,"$text");
fclose($log); 
header("Location: http://$host/gserv/url/link.html?link=http://$host/s$key");
exit;
}	

}
}
?>

