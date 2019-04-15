
<?PHP 
$key = $_GET['link']; 
$fag = file_get_contents ("links/$key.txt");
$str1 = str_replace ("http://", "", $fag);
$str = str_replace ("https://", "", $str1);
//echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$str'></head></html>";


header("Location: http://$str");
exit;
?>

