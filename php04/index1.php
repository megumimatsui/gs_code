<?php
session_start();

include "funcs.php";
chkSsid();
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_cl_table");
$status = $stmt->execute();

//３．データ表示
// $view = "";
// if ($status == false) {
//     sqlError($stmt);
// } else {
//     //Selectデータの数だけ自動でループしてくれる
//     //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
//     while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         $view .= '<p>';
//         $view .= '<a href="delete.php?id=' . $result["id"] . '">';
//         $view .= "[☓]";
//         $view .= '</a>';

//         $view .= '<a href="detail.php?id=' . $result["id"] . '">';
//         $view .= $result["name"] . "," . $result["email"] . "<br>";
//         $view .= '</a>';
//         $view .= '</p>';
//     }
// }
?>





<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500&amp;subset=japanese" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  //デフォルトの動作を少し変える
//前の月へ、次の月へのボタンを <, > に
//表示のとき一番外側にBootstrapのpanelを適用
$.datepicker.setDefaults({
	"prevText" : '&#x3c;',
	"nextText" : '&#x3e;',
	"beforeShow": function(i, o){
		$(o.dpDiv).addClass('panel panel-default');
	}
});
//オリジナルの_generateHTMLをコピーしておいて
$.datepicker.__generateHTML = $.datepicker._generateHTML;

//独自の処理を加えた_generateHTMLで上書きする
//_generateHTMLはHTMLの文字列を作っているので、文字列の置換でカレンダーのHTMLを書き換え可能
$.datepicker._generateHTML = function(inst){
	return '<div class="panel-body">'
		+ $.datepicker.__generateHTML(inst)
			//幅を200pxぐらいにしたい
			.replace('<table', '<table style="width:200px;"')
			//前の月へのボタン
			.replace('ui-datepicker-prev', 'pull-left btn btn-default btn-sm')
			//次の月への簿他
			.replace('ui-datepicker-next', 'pull-right btn btn-default btn-sm')
			//上部の年月の表示部分を中央に
			.replace('ui-datepicker-title', 'text-center')
			//アクティブな日を.btn-primaryに
			.replace('ui-state-default ui-state-active', 'btn btn-primary btn-block btn-xs')
			//当月でない日を.btn-infoで違う色に
			.replace(/ui-state-default ui-priority-secondary/g, 'btn btn-info btn-block btn-xs')
			//当月のその他の日を.btn-linkに
			.replace(/ui-state-default/g, 'btn btn-link btn-block btn-xs')
		+ '</div>';
}

  </script>
</head>
<body>

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
<form method="post" action="insert1.php">
  <div class="jumbotron">
   <div class="box-title">
    <legend>顧客データ</legend>
    </div>
    <div class="box-content">
      <div class="cl_info">
     <div class="item">クライアント<input type="text" name="company" id="write"></div><br>
     <div class="item">部署<input type="text" name="depart" id="write"></div><br>
     <div class="item">担当者<input type="text" name="name" id="write"></div><br>
     </div>
     <div class="item">案件名<textArea name="job" rows="4" cols="40" id="write"></textArea></div><br>
     <div class="job_info">
     <div class="item">期日<input type="text" name="indate" id="datepicker" ></div><br>
     <div class="item">予算 ¥<input type="text" name="budget" id="write"></div><br>
    </div>
     <input type="submit" value="送信" id="btn">
     </div>
  </div>
</form>
<!-- Main[End] -->
</body>

</html>
