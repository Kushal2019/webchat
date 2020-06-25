<?php
session_start();
session_destroy();
header('location:New folder/index.php');
?>