 <?PHP include ("../protect/upinclude.php"); ?>
<?php
$host = $_SERVER['HTTP_HOST'];
$link = $_POST['link']; 
$resolution = "700";
$md6 = md5(md5($link));
$md5 = substr($md6, 0, 6);
$fgt = file_get_contents ("$link");
$file = "../../img/$md5.jpg";
file_put_contents ($file, $fgt);
$newfile = "../../img/full/$md5.jpg";
copy("$file", $newfile);
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


header ("Location: http://$host/z$md5");

?>