<?php
session_start();
include('backend.php');
$fri=$_POST['id'];
$online=on_off($fri);
echo $online;
?>