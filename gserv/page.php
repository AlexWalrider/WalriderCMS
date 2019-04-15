<?php  include ("../include/text/result.php"); ?>
<?php  include ("../include/log/pwrite.php"); ?>
<?php  
if (file_exists("../img/uploads/$resultat.jpg")) 
{
$resultat1 = "../img/uploads/$resultat.jpg";
}
else
{
$resultat1 = "../index_files/back.jpg";
}
?>
<?php  
$host = $_SERVER['HTTP_HOST'];
if ($resultat4 =="")
{
$resultat2 = "404 Not Found";
$resultat4 = '<center><img src="../index_files/404.jpg"></center>';
}
else
{
}
if ($resultat3 =="")
{
$resultat3 = "zero";
}

?>
<!DOCTYPE html>
<html>
 <head>
<style>
   body {
    background: url(<?php echo $resultat1 ?>);
   }
  </style>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8">
  <title><?php echo $resultat2 ?></title>
  <script language="javascript" src="../index_files/scrypt00.js"></script>
  <script language="javascript" src="../index_files/jquery00.js"></script>
  <script language="javascript" src="../index_files/highligh.js"></script>
  <script language="javascript" src="../index_files/social00.js"></script>
  <script language="javascript" src="../index_files/bb.js"></script>
  <script type="text/javascript" src="../index_files/vbulleti.js"></script>
  <link rel="stylesheet" type="text/css" href="../index_files/style500.css">
  <link rel="stylesheet" type="text/css" href="../index_files/style000.css">
  <link rel="stylesheet" type="text/css" href="../index_files/social00.css">
  <link rel="icon" type="image/x-icon" href="../index_files/favicon0.ico">
  <link rel="shortcut icon" type="image/x-icon" href="../index_files/favicon0.ico">
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?78"></script>
  <script type="text/javascript">
  VK.init({apiId: 6015294, onlyWidgets: true});
</script>
</head>
<div id="get_back_for_window" class="get_overlay" style="display:none;z-index:10;"></div>
<div id="get_modal_window" class="modal_window" style="display:none;z-index:100;"></div>
    <script>var _gaq=[['_setAccount','UA-20257902-1'],['_trackPageview']];(function(d,t){ var g=d.createElement(t),s=d.getElementsByTagName(t)[0]; g.async=1;g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
    <script src="demo1_files/audiojs/audio.min.js"></script>
   <script>
      audiojs.events.ready(function() {
        audiojs.createAll();
      });
    </script>


<div class="container">
<div id="content">
 <?php  include ("../include/page/headwa.txt"); ?>
  <a class="headref" href=""><center><img
        src="../img/uploads/<?php echo $resultat3 ?>.jpg"
        align="absBottom" border="0"></center></a>
<br>
<br>
<div class="full">
<center><span style="font-family: 'monotype corsiva', 'Bookman Old Style', 'Book Antiqua', serif;"><span style="text-shadow: black 1px 1px 2px;"><h1><?php echo $resultat2 ?></h1></span></center>
<br /><br />
</div>
<br>
<div class="text"><span style="font-family: 'monotype corsiva', 'Bookman Old Style', 'Book Antiqua', serif;"><span style="text-shadow: black 0px 0px 0px;"><h2><?php echo $resultat4 ?></h2></span></div>
<br />
<br />
<hr>
<form id="record-form" action="post.php" method="post">

  <br>
    <div class="full">
<input type="hidden" name="pagelink" value="<?php  echo $_SERVER['REQUEST_URI']; ?>" readonly>


    </div>
	   </div>
  </div>
 </div>
 <br>
 </html>
 <!--
 <div class="container">
<div id="content">
<center><div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 20, width: "700", attach: "*"});
</script></center>
<br>
*Если вы не хотите, чтобы комментарий отобразился на вашей странице, то нажмите на кнопку <img src="../index_files/vkbutton.jpg">, которая расположена возле кнопки "Отправить"
</div>
	   </div>
 


