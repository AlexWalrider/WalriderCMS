 <?PHP include ("../protect/upinclude.php"); ?>
<?php
$uploaddir = '../../img/uploads/'; // Relative path under webroot
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if 
(
preg_match("/jpg|jpeg|png|gif/uis","$uploadfile")
)
{
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
$md5 = md5(md5($uploadfile));
rename ("$uploadfile", "$uploaddir$md5.jpg");
$file = "$uploaddir$md5.jpg";
$size = GetImageSize ("$file");
if ($size[2] == 1)
{
}
elseif ($size[2] == 2)
{
$src=ImageCreateFromJPEG ("$file");
$iw=$size[0];
$ih=$size[1];
$kf=$iw/400;
$new_h=ceil ($ih/$kf);
$dst=ImageCreateTrueColor (400, $new_h);
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, 400, $new_h, $iw, $ih);
ImageJPEG ($dst, "$file", 80);
imagedestroy($src);
}
elseif ($size[2] == 3)
{
$src=ImageCreateFromPNG ("$file");
$iw=$size[0];
$ih=$size[1];
$kf=$iw/400;
$new_h=ceil ($ih/$kf);
$dst=ImageCreateTrueColor (400, $new_h);
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, 400, $new_h, $iw, $ih);
ImagePNG ($dst, "$file", 9);
imagedestroy($src);
}
else {
$src=ImageCreateFromJPG ("$file");
$iw=$size[0];
$ih=$size[1];
$kf=$iw/400;
$new_h=ceil ($ih/$kf);
$dst=ImageCreateTrueColor (400, $new_h);
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, 400, $new_h, $iw, $ih);
ImageJPG ($dst, "$file", 80);
imagedestroy($src);
}
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
File uploaded, copy this md5-hash and paste into the field - $md5"."\n";
} 
else {
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
Не удалось загрузить файл. Попробуйте перезагрузить страницу и попробовать снова."."\n";
}
}
else
{
echo "
<style>
body {
background: url(../../index_files/1.jpg);
}
</style>
Не удалось загрузить файл. Попробуйте перезагрузить страницу и попробовать снова."."\n";
}
?>