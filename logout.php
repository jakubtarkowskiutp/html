<?php
session_start();
$_SESSION['login'] = '';
echo "<script type='text/javascript'>alert(\"Wylogowano\");</script>";
echo("<script>location.href = 'index.php';</script>");
?>
