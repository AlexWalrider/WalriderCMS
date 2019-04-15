 <?PHP include ("../protect/upinclude.php"); ?>
<?php
$host = $_SERVER['HTTP_HOST'];
$resolution = $_POST['resolution']; 
$uploaddir = '../../gserv/uvid/'; // Relative path under webroot
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$md6 = md5(md5($uploadfile));
$md5 = substr($md6, 0, 6);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	rename ("$uploadfile", "$uploaddir$md5.mp4");
		header("Location: http://$host/m$md5");
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}


?>