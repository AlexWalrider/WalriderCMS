<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?PHP include ("../include/log/iwrite.php"); ?>
<?php 
$host = $_SERVER['HTTP_HOST'];
$vid = $_GET ['vid'];
if ($vid == "")
{
$vid = "";
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
  <title><?php echo ucfirst($host); ?> - Просмотр видео</title>
  <script language="javascript" src="../index_files/scrypt00.js"></script>
  <script language="javascript" src="../index_files/jquery00.js"></script>
  <script language="javascript" src="../index_files/highligh.js"></script>
  <script language="javascript" src="../index_files/social00.js"></script>

 
  <link rel="stylesheet" type="text/css" href="../index_files/style000.css">
  <link rel="stylesheet" type="text/css" href="../index_files/social00.css">
  <link rel="icon" type="image/x-icon" href="../index_files/favicon0.ico">
  <link rel="shortcut icon" type="image/x-icon" href="../index_files/favicon0.ico">
  <link href="http://vjs.zencdn.net/6.2.7/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>


<br>

<div class="container">

<div id="content">
 <?PHP include ("../include/page/headwa.txt"); ?><br>

<body>
  <video id="my-video" class="video-js" controls preload="auto" width="700" height="550"
  poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
    <source src="<?PHP echo "http://$host/gserv/uvid/$vid.mp4"?>" type='video/mp4'>
  </video>

  <script src="http://vjs.zencdn.net/6.2.7/video.js"></script>
</body>
</div>
</body>
</html>

