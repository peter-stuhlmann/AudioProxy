<?php 
  header('Content-Type: audio/mpeg');
  $url = $_GET['url'];
  $f=fopen($url,'r');
  if(!$f) exit;
  while(!feof($f)) {
    echo fread($f,128);  
    flush();
  }
  fclose($f);
?>