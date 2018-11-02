<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$title = $_POST["title"];
$summary = $_POST["summary"];
$client = $_POST["client"];
$date = $_POST["date"];
$genre = $_POST["genre"];
$industry = $_POST["industry"];
$occupation = $_POST["occupation"];

// $date = explode("/",$_POST["sche"]);
// $dbdate = $date[2] . "-" . $date[0] . "-" . $date[1];

//2. DB接続します
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
$sql = "INSERT INTO portfolio(title,summary,client,date,genre,industry,occupation)VALUES(:title,:summary,:client,:date,:genre,:industry,:occupation)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':summary', $summary, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':client', $client, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':date', $date, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':industry', $industry, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':occupation', $occupation, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();


//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select3.php");
    exit;
}

