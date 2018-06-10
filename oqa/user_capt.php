<?php
session_start();
$x=150;
$y=30;
$f=15;
$n1= rand(1,9);
$n2=rand(1,9);
$ca=array("A","R","T","B","M","I","P");
$sa=array("t","y","b","f","d","p","e");
//$sc=array("@","%","!","$","^","+","*");
$n=$n1.' '.$sc[rand(0,6)].' '.$ca[rand(0,6)].' '.$n2.' '.$n1.' '.$sa[rand(0,6)];
$txt=str_replace(" ","",$n);
$_SESSION['cap']=$txt;
header("content-type:image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,255,0,0);
$wh=imagecolorallocate($img,255,255,255);
$b2=imagecolorallocate($img,100,100,0);
$line=rand(10,20);
for($x=5;$x<$line;$x++)
{
$x1=rand(50,100);
$x2=rand(20,50);
$y1=rand(20,30);
$y2=rand(10,15);
imageline($img,$x1,$y1,$x2,$y2,$b2);
}

imagefttext($img,$f,5,5,28,$wh,"LHANDW.ttf",$n);
imagejpeg($img,null,80);
?>
