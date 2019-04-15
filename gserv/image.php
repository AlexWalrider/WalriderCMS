<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?PHP include ("../include/log/zwrite.php"); ?>
<?php 
$host = $_SERVER['HTTP_HOST'];
$imag = $_GET ['img'];
if ($imag == "")
{
$image = "http://$host/../index_files/back.jpg";
}
else
{
if (file_exists("../img/$imag.jpg")) 
{
$image = "../img/$imag.jpg";
$imagefull = "../img/full/$imag.jpg";
}
else
{
$image = "http://$host/../index_files/notfoundimg.jpg";
}
}
?>
<html>
<style>
   body {
    background: url(../index_files/back.jpg);
   }
  </style>
 
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8">
  <title><?php echo ucfirst($host); ?> - Просмотр изображения</title>
  <script language="javascript" src="../index_files/scrypt00.js"></script>
  <script language="javascript" src="../index_files/jquery00.js"></script>
  <script language="javascript" src="../index_files/highligh.js"></script>
  <script language="javascript" src="../index_files/social00.js"></script>

 
  <link rel="stylesheet" type="text/css" href="../index_files/style000.css">
  <link rel="stylesheet" type="text/css" href="../index_files/social00.css">
  <link rel="icon" type="image/x-icon" href="../index_files/favicon0.ico">
  <link rel="shortcut icon" type="image/x-icon" href="../index_files/favicon0.ico">

</head>


<br>

<div class="container">

<div id="content">
 <?PHP include ("../include/page/headwa.txt"); ?><br>
<center><img src = "<?php echo ($image); ?>"></center><br>
<br>
<center><a href="<?php echo ($imagefull); ?>">Source size</a></center>
</div>
</body>
</html>

