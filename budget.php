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
  <link rel="stylesheet" type="text/css" href="css/budget.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>budget</title>
</head>

<body>
  <header class="header">
    <a href="home.php"><img src="images/home/logo.png" width="120px"></a>
    <ul class="header-ul">
      <li><a href="#" class="btn2">Budget</a></li>
      <li><a href="shopping.php" class="btn4">Enter shopping information</a></li>
      <li><a href="coupon.php" class="btn4">Coupon</a></li>
      <li><a href="r_budget.php" class="btn4">Remaining Budget</a></li>
      <li><a href="setting.php" class="btn4">User Setting</a></li>
      <li><a href="logout.php" class="btn4">Logout</a></li>
    </ul>
  </header>
  <main>
    <div id="input-wrap">
      <form action="r_budget.php" method="POST">
        <div id="input-box">
          <div class="currentbudget">
            <p>Current Budget</p>
            <p style="font-family: sans">JPY 150,000</p>
          </div>
          <div class="addbudget button">
            <p>Add budget</p>
            <label class="ef">
            <input type="text" placeholder="0.0" name="budget">
          </div>
          <input type="submit" class="btn-border" value="SUBMIT">
        </div>
      </form>
    </div>
    <div id="output-wrap">
      <img src="images/budget/en.png" width="225px">
      <p>JPY 150,000</p>
      <img src="images/budget/en.png" width="225px">
      <p>USD 1,374.58</p>
    </div>
  </main>
  <footer class="footer">
    <p><small>© 2019 r_kashiwagi inc.</small></p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>