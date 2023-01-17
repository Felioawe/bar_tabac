<?php 
require_once "./config.php";
session_start();
session_destroy();
header('location: ../index.php?mod=2&success=5');
?>