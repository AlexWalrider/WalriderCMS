 <?PHP include ("../protect/upinclude.php"); ?>
<?php
$host = $_SERVER['HTTP_HOST'];
$resolution = "700"; 
$uploaddir = '../../img/'; // Relative path under webroot
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if 
(
preg_match("/jpg|jpeg|png|gif/uis","$uploadfile")
)
{
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
/////////////////////rand//////////////////////////////
$md6 = md5(md5($uploadfile));
$md5 = substr($md6, 0, 6);
////////////////randoff//////////////////////////////////////
rename ("$uploadfile", "$uploaddir$md5.jpg");
$newfile = "$uploaddir/full/$md5.jpg";
copy("$uploaddir$md5.jpg", $newfile);
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
$kf=$iw/$resolution;
$new_h=ceil ($ih/$kf);
$dst=ImageCreateTrueColor ($resolution, $new_h);
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, $resolution, $new_h, $iw, $ih);
ImageJPEG ($dst, "$file", 80);
imagedestroy($src);
}
elseif ($size[2] == 3)
{
$src=ImageCreateFromPNG ("$file");
$iw=$size[0];
$ih=$size[1];
$kf=$iw/$resolution;
$new_h=ceil ($ih/$kf);
$dst=ImageCreateTrueColor ($resolution, $new_h);
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, $resolution, $new_h, $iw, $ih);
ImagePNG ($dst, "$file", 9);
imagedestroy($src);
}
else {
$src=ImageCreateFromJPG ("$file");
$iw=$size[0];
$ih=$size[1];
$kf=$iw/$resolution;
$new_h=ceil ($ih/$kf);
$dst=ImageCreateTrueColor ($resolution, $new_h);
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, $resolution, $new_h, $iw, $ih);
ImageJPG ($dst, "$file", 80);
imagedestroy($src);
}
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://$host/z$md5'></head></html>"."\n";
} 
else {
echo "
<style>
body {
background: url(../index_files/1.jpg);
}
</style>
Не удалось загрузить файл. Попробуйте загрузить снова."."\n";
}
}
else
{
echo "
<style>
body {
background: url(../index_files/1.jpg);
}
</style>
Не удалось загрузить файл. Попробуйте загрузить снова."."\n";
}
?>