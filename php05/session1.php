<?php
session_start();

$_SESSION["name"]="matsui";
$_SESSION["count"] += 1;
echo $_SESSION["count"];


?>