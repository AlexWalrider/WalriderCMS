<?PHP
$host = $_SERVER['HTTP_HOST'];
$hourse = date("H"); // ×àñû
$minut = date("i"); // Ìèíóòû
$seconds = date("s"); // ñåêóíäû
$month = date("m"); // Ìåñÿö
$day = date("d"); // day
$week = date("W"); // íåäåëÿ
$year = date("Y"); //ãîä
$date = "$day-$month-$year|$hourse-$minut-$seconds";
$urlo = $_SERVER['REQUEST_URI']; 
$url = str_replace ("/", "", $urlo);
$ip = $_SERVER ['REMOTE_ADDR'];
$log = fopen("include/log/iview.php","a+"); 
fwrite($log,"<a href='http://$host/$url.html'>$url</a> - $ip - $date<br>");
fclose($log); 
?>
