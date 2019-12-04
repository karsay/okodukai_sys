<?php
session_start();

if (!isset($_SESSION["NAME"])) {
  $erorrMessage = "Logout";
} else {
  $erorrMessage = "Session Timeout";
}

// セッション変数のクリア
$_SESSION = array();
session_destroy();

?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/logout.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>logout</title>
</head>

<body>
  <div id="login-wrap">
    <div class="input-wrap">
      <p class="login-text">Logout</p>
      <a href="login.php"><input type="submit" value="Return to Login Page" class="login-submit" /></a>
    </div>
  </div>
  <div id="particles-js"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/setting.js"></script>
  <script src="js/traslate.js"></script>
  <script src="js/script.js"></script>
</body>

</html>