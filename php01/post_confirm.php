<?php

include("func.php");
$name = $_POST["name"];
$mail = $_POST["mail"];
$mail2 = $_POST["mail2"];


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?=h($name)?>
EMAIL：<?=h($mail)?>
EMAIL(確認)：<?=h($mail2)?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>