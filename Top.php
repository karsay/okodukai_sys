<?php

require_once "function.php";

session_start();

if(!isset($_SESSION["NAME"])){
  header("Location: Logout");
  exit;
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
  <title>Top</title>
</head>

<body>
  <h1>Top</h1>
  <p>Welcome <?php h($_SESSION["NAME"]); ?></p>
  <a href="Logout.php">ログアウト</a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/glottologist"></script>
  <script src="js/script.js"></script>
</body>

</html>