<?PHP
$data = file_get_contents ("history.php");
$tag = "page";
$ishodnaya_stroka = "$data";
$resultat = explode("[$tag]", $ishodnaya_stroka);
$ishodnaya_stroka = $resultat[1];
$resultat = explode("[end$tag]", $ishodnaya_stroka);
$resultat = $resultat[0];
$tag2 = "image";
$ishodnaya_stroka2 = "$data";
$resultat2 = explode("[$tag2]", $ishodnaya_stroka2);
$ishodnaya_stroka2 = $resultat2[1];
$resultat2 = explode("[end$tag2]", $ishodnaya_stroka2);
$resultat2 = $resultat2[0];
$tag3 = "enter";
$ishodnaya_stroka3 = "$data";
$resultat3 = explode("[$tag3]", $ishodnaya_stroka3);
$ishodnaya_stroka3 = $resultat3[1];
$resultat3 = explode("[end$tag3]", $ishodnaya_stroka3);
$resultat3 = $resultat3[0];
?>