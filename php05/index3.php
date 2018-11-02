<?php
session_start();

include "funcs.php";
chkSsid();
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM portfolio");
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
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500&amp;subset=japanese" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    WORKS
    <div class="navbar-header">
      <a class="navbar-brand" href="select3.php">データ一覧</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert3.php">
  <div class="jumbotron">
   <div class="box-title">
    <legend>WORKS</legend>
    </div>
    <div class="box-content">
      <!-- タイトル -->
    <div class="item">
      <div class="menu">
        <h2>タイトル</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn1">編集する</button>
          </div>
      </div>
    <input type="text" name="titleResult" id="titleResult">
      <div id="write1">
        <input type="text" name="title" id="title"  placeholder="キャンペーンLPサイト"  class="write">
        <button type="button" id="btn1">更新</button>
      </div>
    </div>
    <!-- 仕事の内容 -->
    <div class="item">
      <div class="menu">
        <h2>仕事の内容</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn2">編集する</button>
          </div>
      </div>
    <input type="text" name="sumResult" id="sumResult">
      <div id="write2">
        <input type="text" name="summary" id="summary"  placeholder="サービスリニューアルのタイミングでwebサイトを刷新されることになりました。"  class="write">
        <button type="button" id="btn2">更新</button>
      </div>
    </div>

      <!-- クライアント write3 -->
      <div class="item">
      <div class="menu">
        <h2>クライアント</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn3">編集する</button>
          </div>
      </div>
    <input type="text" name="clResult" id="clResult">
      <div id="write3">
        <input type="text" name="client" id="client"  placeholder="株式会社△△△△△"  class="write">
        <button type="button" id="btn3">更新</button>
      </div>
    </div>

       <!-- 時期 write4-->
      <div class="item">
      <div class="menu">
        <h2>時期</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn4">編集する</button>
          </div>
      </div>
    <input type="text" name="dtResult" id="dtResult">
      <div id="write4">
        <input type="text" name="date" id="date" class="write">
        <button type="button" id="btn4">更新</button>
      </div>
    </div>
        <!-- 時期 write5-->
      <div class="item">
      <div class="menu">
        <h2>ジャンル</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn5">編集する</button>
          </div>
      </div>
    <input type="text" name="geResult" id="geResult">
      <div id="write5">
        <input type="text" name="genre" id="genre" class="write">
        <button type="button" id="btn5">更新</button>
      </div>
    </div>

        <!-- 業界 write6-->
      <div class="item">
      <div class="menu">
        <h2>業界</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn6">編集する</button>
          </div>
      </div>
    <input type="text" name="inResult" id="inResult">
      <div id="write6">
        <input type="text" name="industry" id="industry" class="write">
        <button type="button" id="btn6">更新</button>
      </div>
    </div>
        <!-- 業界 write7-->
      <div class="item">
      <div class="menu">
        <h2>発生工数</h2>
          <div class="ttl_btn">
            <button type="button" class="edit_btn7">編集する</button>
          </div>
      </div>
    <input type="text" name="inOccu" id="inOccu">
      <div id="write7">
        <input type="text" name="occupation" id="occupation" class="write">
        <button type="button" id="btn7">更新</button>
      </div>
    </div>

    </div>
     <input type="submit" value="送信" id="btn">
     </div>
</form>
<!-- Main[End] -->
<script>


// write1
    $('.edit_btn1').click(function() {  
  $("#write1").show();
})

  $('#btn1').click(function() {  
  $("#titleResult").show();
  var title = $('#title').val();
  console.log(title);
  $('#titleResult').val(title);
  $("#write1").hide();
})
// write2
$('.edit_btn2').click(function() {  
  $("#write2").show();
})

  $('#btn2').click(function() {  
  $("#sumResult").show();
  var summary = $('#summary').val();
  $('#sumResult').val(summary);
  $("#write2").hide();
})
// write3
$('.edit_btn3').click(function() {  
  $("#write3").show();
})

  $('#btn3').click(function() {  
  $("#clResult").show();
  var client = $('#client').val();
  console.log(title);
  $('#clResult').val(client);
  $("#write3").hide();
})
// write4
$('.edit_btn4').click(function() {  
  $("#write4").show();
})

  $('#btn4').click(function() {  
  $("#dtResult").show();
  var date = $('#date').val();
  $('#dtResult').val(date);
  $("#write4").hide();
})
// write5
$('.edit_btn5').click(function() {  
  $("#write5").show();
})

  $('#btn５').click(function() {  
  $("#geResult").show();
  var genre = $('#genre').val();
  $('#geResult').val(genre);
  $("#write5").hide();
})

// write6
$('.edit_btn6').click(function() {  
  $("#write6").show();
})

  $('#btn6').click(function() {  
  $("#inResult").show();
  var industry = $('#industry').val();
  $('#inResult').val(industry);
  $("#write6").hide();
})
// write7
$('.edit_btn7').click(function() {  
  $("#write7").show();
})

  $('#btn7').click(function() {  
  $("#inOccu").show();
  var occupation = $('#occupation').val();
  $('#inOccu').val(occupation);
  $("#write7").hide();
})


  </script>

</body>

</html>
