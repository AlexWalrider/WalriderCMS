<?PHP
$host = $_SERVER['HTTP_HOST'];
$hourse = date("H"); // ����
$minut = date("i"); // ������
$seconds = date("s"); // �������
$month = date("m"); // �����
$day = date("d"); // day
$week = date("W"); // ������
$year = date("Y"); //���
$date = "$day-$month-$year|$hourse-$minut-$seconds";
$urlo = $_SERVER['REQUEST_URI']; 
$url = str_replace ("/", "", $urlo);
$ip = $_SERVER ['REMOTE_ADDR'];
$log = fopen("include/log/iview.php","a+"); 
fwrite($log,"<a href='http://$host/$url.html'>$url</a> - $ip - $date<br>");
fclose($log); 
?>
