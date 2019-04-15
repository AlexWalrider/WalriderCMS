<?PHP include ("include/protect/uinclude.php"); ?>
<?PHP 
$password = "fink96";
$host = $_SERVER['HTTP_HOST'];
$slash = "/";
$back = "]";
$front = "[";
$bg = "bg";
$ttl = "ttl";
$lg = "lg";
$txt = "txt";
$kavo = '"';
$text = $_POST['Recordtext']; 
////////////////////////////////////////////////////
$titled = $_POST['Recordtitle']; 
$pagetype = $_POST['typeofpage']; 
$title = strip_tags ($titled);
$headd = $_POST['head'];
$heado = strip_tags ($headd);
$head = str_replace (" ", "", $heado);
$backgrounda = $_POST['background'];
$backgroundo = strip_tags ($backgrounda);
$background = str_replace(" ", "", $backgroundo);
$customo = $_POST['custom'];
$customa = strip_tags ($customo);
$custom = str_replace (" ", "_", $customa);
$plebe = file_get_contents ("index_files/player_begin.txt");
$plend = file_get_contents ("index_files/player_end.txt");
$md6 = md5(md5($title));
$rand = substr($md6, 0, 6);
///////////////////////////////////////////////////////////////////
$text2 = preg_replace("(\r\n|\n|\r)", "<br>", $text);
$store = strip_tags ($text2, '<b></b><i></i><u></u><s></s><h1></h1><h2></h2><h3></h3><h4></h4><h5></h5><h6></h6><center></center><br>');
$st8 = str_replace ("[url=", "<a href=", $store);
$st9 = str_replace ("[/url]", "</a>", $st8);
$st12 = str_replace ("[img]", "<img src=", $st9);
$st13 = str_replace ("[/img]", ">", $st12);
$st14 = str_replace ("[right]", "<div align=right>", $st13);
$st15 = str_replace ("[/right]", "</div>", $st14);
$st16 = str_replace ("[audio]", "<audio src=", $st15);
$st17 = str_replace ("[/audio]", "></audio>", $st16);
$st32 = str_replace ("[imgu]", "<img src=img/uploads/", $st17);
$st33 = str_replace ("[/imgu]", ".jpg>", $st32);
$st34 = str_replace ("[video]", "$plebe", $st33);
$st35 = str_replace ("[/video]", "$plend", $st34);
$store = str_replace ("|", ">", $st35);
$store2 = str_replace ("[youtube]", "<span style='cursor:pointer' onclick='show_youtube_window($kavo", $store);
$stored = str_replace ("[/youtube]", "$kavo)' title='Play record'>Play video from youtube [►]</span>", $store2);
if($custom == "")
{
///////////////////////////////
$get = file_get_contents ("pages.php");
$storing = str_replace ("<a href='http://$host/v$rand'>$rand</a><br>", "", $get);
$log4 = fopen("include/view/pages.php","a+"); 
fwrite($log4,"");
fclose($log4);
//////////////////////////////////
$cont = file_get_contents ("include/text/data.php");
$new = preg_replace("#(\[$rand\](.*?)\[\/$rand\])#is", '', $cont);
$tango = "[$rand]";
$tanga = "[/$rand]";
$log = fopen("include/text/data.php","w"); 
fwrite($log,"$new$tango$front$bg$rand$back$background$front$slash$bg$rand$back\n $front$ttl$rand$back$title$front$slash$ttl$rand$back\n $front$lg$rand$back$head$front$slash$lg$rand$back\n $front$txt$rand$back$stored$front$slash$txt$rand$back$tanga\n");
fclose($log);
//////////////////////////////////////////
$log2 = fopen("include/view/pages.php","a+"); 
fwrite($log2,"<a href='http://$host/v$rand'>$rand</a><br>");
fclose($log2); 
////////////////////////////////////////////
header("Location: http://$host/v$rand");
}
else
{
////////////////////////////////////
$get2 = file_get_contents ("pages.php");
$storing2 = str_replace ("<a href='http://$host/v$custom'>$custom</a><br>", "", $get);
$log7 = fopen("include/view/pages.php","a+"); 
fwrite($log7,"");
fclose($log7);
////////////////////////////////////
$cont = file_get_contents ("include/text/data.php");
$new = preg_replace("#(\[$custom\](.*?)\[\/$custom\])#is", '', $cont);
$tang = "[$custom]";
$tangi = "[/$custom]";
$log = fopen("include/text/data.php","w"); 
fwrite($log,"$new$tang$front$bg$custom$back$background$front$slash$bg$custom$back\n $front$ttl$custom$back$title$front$slash$ttl$custom$back\n $front$lg$custom$back$head$front$slash$lg$custom$back\n $front$txt$custom$back$stored$front$slash$txt$custom$back$tangi\n");
fclose($log);
///////////////////////////////////////////
$log2 = fopen("include/view/pages.php","a+"); 
fwrite($log2,"<a href='http://$host/v$custom'>$custom</a><br>");
fclose($log2); 
//////////////////////////////////////////
header("Location: http://$host/v$custom");
}
?>

