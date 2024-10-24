<?php
session_start();
$des = session_destroy();
if ($des) {
    echo "<script> alert('Berhasil Logout');
			window.location.replace('index.php');</script>";
  }
?>