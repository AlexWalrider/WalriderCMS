<?PHP
$data = file_get_contents ("../include/text/data.php");
$tago = $_GET['txt'];
$tag = "bg$tago";
$ishodnaya_stroka = "$data";
$resultat = explode("[$tag]", $ishodnaya_stroka);
$ishodnaya_stroka = $resultat[1];
$resultat = explode("[/$tag]", $ishodnaya_stroka);
$resultat = $resultat[0];
///////////////////////////////////////////////////////
$tag2 = "ttl$tago";
$ishodnaya_stroka2 = "$data";
$resultat2 = explode("[$tag2]", $ishodnaya_stroka2);
$ishodnaya_stroka2 = $resultat2[1];
$resultat2 = explode("[/$tag2]", $ishodnaya_stroka2);
$resultat2 = $resultat2[0];
///////////////////////////////////////////////////////
$tag3 = "lg$tago";
$ishodnaya_stroka3 = "$data";
$resultat3 = explode("[$tag3]", $ishodnaya_stroka3);
$ishodnaya_stroka3 = $resultat3[1];
$resultat3 = explode("[/$tag3]", $ishodnaya_stroka3);
$resultat3 = $resultat3[0];
///////////////////////////////////////////////////////
$tag4 = "txt$tago";
$ishodnaya_stroka4 = "$data";
$resultat4 = explode("[$tag4]", $ishodnaya_stroka4);
$ishodnaya_stroka4 = $resultat4[1];
$resultat4 = explode("[/$tag4]", $ishodnaya_stroka4);
$resultat4 = $resultat4[0];
?>