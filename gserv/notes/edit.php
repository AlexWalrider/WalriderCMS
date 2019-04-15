<?PHP 
$text = $_POST['Recordtext']; 
$key = $_POST['key']; 
$host = $_SERVER['HTTP_HOST'];
if ($text == "")
{
echo ("Вы не ввели текст");
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://$host/k$key'></head></html>";
}
else
{
if (
preg_match("/<\?|script|javascript/uis","$text")
)
{
echo ("Cкрипты запрещены");
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/k$key'></head></html>";
}
else
{
$log = fopen("notes/$key.php","w"); 
fwrite($log,"<?php exit(); ?>$text");
fclose($log); 
//header("Location: http://$host/k$key");
//echo "<meta http-equiv='refresh' content='0;url=http://$host/k$key'>";
echo "<meta http-equiv='refresh' content='0;url=http://$host/k$key'>";
}
}

?>

