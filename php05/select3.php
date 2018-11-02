<?php
session_start();

include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM portfolio");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .='<div class="box">';

        $view .='<div class="title">';

        $view .='<p>';
        $view .='<a href="delete1.php?id='. $result["id"] .'" class="del_btn">';
        $view .="削除";
        $view .='</a>';

        $view .='<div class="job_title">';
        $view .='<a href="detail1.php?id='. $result["id"] .'" class="job_title">';
        $view .=$result["title"]."<br>";
        $view .='</div>';

        $view .='</div>';


        $view .='<div class="items">';

        $view .='<div class="item">';
        $view .='<a href="detail1.php?id='. $result["id"] .'">';
        // $view .=$result["company"] . "," . $result["depart"] . "," . $result["name"].','.$result['indate']."<br>";
        $view .=$result["client"];
        $view .='</div>';

        $view .='<div class="item">';
        $view .='<a href="detail1.php?id='. $result["id"] .'">';
        $view .=$result["genre"];
        $view .='</div>';

        $view .='<div class="item">';
        $view .='<a href="detail1.php?id='. $result["id"] .'">';
        $view .=$result["industry"];
        $view .='</div>';

        $view .='<div class="item">';
        $view .='<a href="detail1.php?id='. $result["id"] .'">';
        $view .=$result["occupation"];
        $view .='</div>';

        $view .='</a>';
        $view .='</p>';
        $view .='</div>';

        $view .='</div>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<!-- <link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="css/style_02.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500&amp;subset=japanese" rel="stylesheet">

<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <?=$_SESSION["name"]?>さん、こんにちは。
    <div class="navbar-header">
      <a class="navbar-brand" href="select1.php">データ一覧</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>