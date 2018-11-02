<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style_03.css" />
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
<title>ユーザー登録</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">ユーザー登録してください。</nav>
</header>


  <!-- <div class="jumbotron">
    <div class="box-title1">
      <legend>ログイン</legend>
    </div>
    <form name="form1" action="login_act1.php" method="post">
      <div class="box-content">
          <div class="cl_info">
            <div class="item">アカウントID<input type="text" name="lid" id="write"></div><br>
            <div class="item">パスワード<input type="password" name="lpw" id="write"></div><br>
          </div>
      </div>
      <input type="submit" value="ログイン" id="btn1">
    </form>
  </div> -->

 <div class="jumbotron">
    <div class="box-title">
      <legend>ユーザー登録</legend>
    </div>
    <form method="post" action="record_insert.php">
      <div class="box-content">
        <div class="item">ユーザー名<input type="text" name="name" id="write"></div><br>
        <div class="item">アカウントID<input type="text" name="lid" id="write"></div><br>
        <div class="item">パスワード<input type="password" name="lpw" id="write"></div><br>
      </div>
      <input type="submit" value="登録" id="btn">
    </form>
  </div>



<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<!-- <form method="post" action="record_insert.php">
ユーザー名:<input type="text" name="name" />
アカウント:<input type="text" name="lid" />
ID:<input type="password" name="lpw" />
<input type="submit" value="登録" />
</form> -->


</body>
</html>