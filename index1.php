<?php 
$connect = new mysqli("127.0.0.1", "root", "1234", "Lab_3_Galkina");
if (!$connect) {
  die("Error connection!);
}

session_start();
?>
