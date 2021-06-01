<?php
  header("Content-Type: text/plain; charset=UTF-8");
  $fp = fopen($_GET['fname'],"a");
  fwrite($fp, $_GET['dat']."¥r¥n");
  fclose($fp);
?>
