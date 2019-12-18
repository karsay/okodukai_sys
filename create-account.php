<?php
session_start();

include("db_ini.php");

$errorMessage = "";
$signMessage = "";

// ログインボタンが押された場合
if (isset($_POST["Sign_Up"])) {
  // ユーザidの入力チェック
  if (empty($_POST["username"])) {
    $errorMessage = "User ID is not entered";
  } else if (empty($_POST["password"])) {
    $errorMessage = "Password is not entered";
  }

  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $dsn = sprintf("mysql: host=%s; dbname=%s; charset=utf8", $db["host"], $db["dbname"]);

    try {
      $pdo = new PDO($dsn, $db["user"], $db["pass"], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $stmt = $pdo->prepare("INSERT INTO userData(name, password) VALUES (?, ?)");
      // ハッシュ化してインサート
      $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));
      header("Location: home.php");
    } catch (PDOException $e) {
      $errorMessage = "Database error";
      // $e->getMessage();
      // echo $e->getMessage();
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
  <link rel="stylesheet" type="text/css" href="css/log-common.css">
  <link rel="stylesheet" type="text/css" href="css/create-account.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>ログイン</title>
</head>

<body>
  <form action="" method="POST">
    <div id="login-wrap">
      <div class="input-wrap">
        <p class="login-text">Create a New Account</p>
        <div class="sub-text">It’s quick and easy.</div>
        <div class="error-message translate"><?php echo $errorMessage; ?></div>
        <input type="username" name="username" class="login-username" required="true" placeholder="User Name" />
        <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
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