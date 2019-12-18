<?php

?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/setting.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>setting</title>
</head>

<body>
  <header class="header">
    <a href="home.php"><img src="images/home/logo.png" width="120px"></a>
    <ul class="header-ul">
      <li><a href="budget.php" class="btn4">Budget</a></li>
      <li><a href="shopping.php" class="btn4">Enter shopping information</a></li>
      <li><a href="coupon.php" class="btn4">Coupon</a></li>
      <li><a href="r_budget.php" class="btn4">Remaining Budget</a></li>
      <li><a href="#" class="btn2">User Setting</a></li>
      <li><a href="logout.php" class="btn4">Logout</a></li>
    </ul>
  </header>
  <main>
    <div class="icon-wrap">
      <div class="icon">
        <img src="images/setting/icon.png" height="200px">
      </div>
    </div>
    <div class="input-wrap">
      <form action="setting.php" method="post">
        <div class="wrap">
          <p>Name</p>
          <input type="text" name="name" placeholder="Joe Rondon">
          <p>NewPassword</p>
          <input type="text" name="newPassword" placeholder="******">
          <p>Language</p>
          <div class="cp_ipselect">
          <select class="cp_sl06" name="language">
            <!-- <option value="" hidden disabled selected></option> -->
            <option value="1">English</option>
            <option value="2">Japanese</option>
            <option value="3">Chinese</option>
            </select>
            <span class="cp_sl06_highlight"></span>
            <span class="cp_sl06_selectbar"></span>
          </div>
          <p>Currency</p>
          <div class="cp_ipselect">
          <select class="cp_sl06" name="currncy">
            <!-- <option value="" hidden disabled selected></option> -->
            <option value="1">USD</option>
            <option value="2">JPY</option>
            <option value="3">CNY</option>
          </select>
          <span class="cp_sl06_highlight"></span>
          <span class="cp_sl06_selectbar"></span>
          </div>
          <input type="image" src="images/setting/Change.png" id="btn">
      </form>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
  <footer class="footer">
    <p><small>© 2019 r_kashiwagi inc.</small></p>
  </footer>
</body>

</html>