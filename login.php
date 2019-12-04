<?php
session_start();

// $db["host"] = "localhost";
// $db["user"];
header("Access-Control-Allow-Origin: https://unpkg.com/glottologist");

// ドライバ呼び出しを使用して MySQL データベースに接続します
$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "root";  // ユーザー名
$db['pass'] = "root";  // ユーザー名のパスワード
$db['dbname'] = "haldb";  // データベース名
// エラーメッセージの初期化
$errorMessage = "";

// ログインボタンが押された時
if (isset($_POST["login"])) {
  // ユーザーIDの入力チェック
  if (empty($_POST["username"])) {
    $errorMessage = "User Name is not entered";
  } else if (empty($_POST["password"])) {
    $errorMessage = "Password is not entered";
  }

  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    // 入力したユーザーネームを格納
    $userName = $_POST["username"];
    // 入力が確認されたら認証
    $dsn = sprintf("mysql: host=%s; dbname=%s;", $db["host"], $db["dbname"]);

    try {
      $pdo = new PDO($dsn, $db["user"], $db["pass"], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $stmt = $pdo->prepare("select * from userData Where name = ?");
      $stmt->execute(array($userName));

      // パスワードを格納
      $password = $_POST["password"];

      if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // if (password_verify($password, $row["password"])) {
          if($password == $row["password"]) {
            session_regenerate_id(true);

            // 入力したIDのユーザ名を取得
            $id = $row["id"];
            $sql = "select * from userData where id = $id";
            $stmt = $pdo->query($sql);
            foreach ($stmt as $row) {
              $row["name"]; //ユーザ名
            }
            $_SESSION["NAME"] = $row["name"];
            header("Location: Top.php");
            exit(); //処理終了
        } else {
          echo $row["password"], $password;
          // 認証失敗
          $errorMessage = "Incorrect user name or password 1";
        }
      } else {
        // 認証成功ならセッションIDを新規に発行する
        // 該当なし
        $errorMessage = "Incorrect user name or password 2";
      }
    } catch (PDOException $e) {
      $errorMessage = "Detabase Error";
      //$errorMessage = $sql;
      //$e->getMessage(); //でエラー内容を参照可能（デバッグ時のみ表示）
      //echo $e->getMessage();
    }
  }
}

?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>ログイン</title>
</head>

<body>
  <form action="" method="POST">
    <div class="wrap">
      <div class="select-wrap">
        <div class="language">
          <span class="choose translate">Select Language</span>
          <div class="dropdown">
            <div class="select">
              <span>Select Language</span>
              <i class="fa fa-chevron-left"></i>
            </div>
            <input type="hidden" name="language">
            <ul class="dropdown-menu">
              <li id="en">English</li>
              <li id="ja">Japanese</li>
              <li id="zh">Chinese</li>
            </ul>
          </div>
        </div>
        <div class="currency">
          <span class="choose translate">Select Currency</span>
          <div class="dropdown">
            <div class="select">
              <span>Select Currency</span>
              <i class="fa fa-chevron-left"></i>
            </div>
            <input type="hidden" name="currency">
            <ul class="dropdown-menu">
              <li id="usd">USD</li>
              <li id="jpy">JPY</li>
              <li id="cny">CNY</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="login-wrap">
        <div class="input-wrap">
          <p class="login-text translate">Login</p>
          <div class="sub-text">Okodzukai System</div>
          <div class="error-message translate"><?php echo $errorMessage; ?></div>
          <input type="username" name="username" class="login-username" required="true" placeholder="User Name" />
          <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
          <input type="submit" name="login" value="Login" class="login-submit" />
          <a href="create-account.php" class="create-account">Create a New Account</a>
        </div>
        <div id="particles-js"></div>
      </div>
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/glottologist"></script>
  <script src="js/translate.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/setting.js"></script>
  <script src="js/script.js"></script>
</body>

</html>