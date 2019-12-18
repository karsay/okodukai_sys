<?php
session_start();

if (!isset($_SESSION["NAME"])) {
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
  <link rel="stylesheet" type="text/css" href="css/coupon.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>coupon</title>
</head>

<body>
  <header class="header">
    <a href="home.php"><img src="images/home/logo.png" width="120px"></a>
    <ul class="header-ul">
      <li><a href="budget.php" class="btn4">Budget</a></li>
      <li><a href="shopping.php" class="btn4">Enter shopping information</a></li>
      <li><a href="#" class="btn2">Coupon</a></li>
      <li><a href="r_budget.php" class="btn4">Remaining Budget</a></li>
      <li><a href="setting.php" class="btn4">User Setting</a></li>
      <li><a href="logout.php" class="btn4">Logout</a></li>
    </ul>
  </header>
  <main>
  <div class="mainwrap">
    
  </div>
  <div class="localNavigation">
    <div class="coupon">
      <a href="#">
        <img src="images/coupon/coupon2.jpg">
      </a>
    </div>
    <div class="coupon">
      <a href="#">
      <img src="images/coupon/coupon1.jpg">
      </a>
    </div>
    <div class="coupon">
      <a href="#">
      <img src="images/coupon/coupon3.jpg">
      </a>
    </div>
    <div class="coupon">
      <a href="#">
      <img src="images/coupon/coupon4.jpg">
      </a>
    </div>
    <div class="coupon">
      <a href="#">
      <img src="images/coupon/coupon5.jpg">
      </a>
    </div>
    <div class="coupon">
      <a href="#">
      <img src="images/coupon/coupon6.jpg">
      </a>
    </div>
  </main>
  <footer class="footer">
    <p><small>© 2019 r_kashiwagi inc.</small></p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>