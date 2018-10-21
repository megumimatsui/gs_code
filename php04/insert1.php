<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$company = $_POST["company"];
$depart = $_POST["depart"];
$name = $_POST["name"];
$job = $_POST["job"];
$indate = $_POST["indate"];
$budget = $_POST["budget"];

$date = explode("/",$_POST["indate"]);
$dbdate = $date[2] . "-" . $date[0] . "-" . $date[1];

//2. DB接続します
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
$sql = "INSERT INTO gs_cl_table(company,depart,name,job,indate,budget)VALUES(:company,:depart,:name,:job,:indate,:budget)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':company', $company, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':depart', $depart, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':job', $job, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':indate', $dbdate, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':budget', $budget, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();

var_dump($indate);

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select1.php");
    exit;
}

