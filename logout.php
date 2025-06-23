<?php
include __DIR__ . '/db.php';
session_start();

$_SESSION["user_id"] = "";
unset($_SESSION["user_id"]);
session_destroy();
header("location:login.php");

?>