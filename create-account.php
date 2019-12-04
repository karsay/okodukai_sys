<?php
session_start();

$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "root";  // ユーザー名
$db['pass'] = "root";  // ユーザー名のパスワード
$db['dbname'] = "haldb";  // データベース名
// エラーメッセージ, 登録完了メッセージの初期化
$errorMessage = "";
?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/create-account.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>ログイン</title>
</head>

<body>
  <form action="login.php" method="GET">
    <div id="login-wrap">
      <div class="input-wrap">
        <p class="login-text">Create a New Account</p>
        <div class="sub-text">It’s quick and easy.</div>
        <input type="username" class="login-username" required="true" placeholder="User Name" />
        <input type="password" class="login-password" required="true" placeholder="Password" />
        <input type="submit" name="Sign_Up" value="Sign Up" class="login-submit" />
      </div>
    </div>
    <div id="particles-js"></div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/setting.js"></script>
  <!-- <script src="js/traslate.js"></script> -->
  <script src="js/script.js"></script>
</body>

</html>