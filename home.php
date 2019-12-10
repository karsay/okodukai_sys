<?php

require_once "function.php";

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
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>Home</title>
</head>

<body>
  <header class="header">
    <a href="#"><img src="images/home/logo.png" width="150px"></a>
    <ul class="header-ul">
      <li><a href="#" class="btn2">Home</a></li>
      <li><a href="budget.php" class="btn4">Budget</a></li>
      <li><a href="shopping.php" class="btn4">Enter shopping information</a></li>
      <li><a href="coupon.php" class="btn4">Coupon</a></li>
      <li><a href="r_budget" class="btn4">Remaining Budget</a></li>
      <li><a href="setting.php" class="btn4">User Setting</a></li>
      <li><a href="logout.php" class="btn4">Logout</a></li>
    </ul>
  </header>
  <main>
    <div class="content">
      <div class="content-wrap">
        <ul class="content-ul">
          <li>
            <figure class="snip1397">
              <img src="images/haru.jpg" alt="sample86" />
              <div class="image">
                <img src="images/haru.jpg" alt="sample86" />
                <div class="img-cap">
                  <p>Budget</p>
                  <p>You can enter a budget</p>
                </div>
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="#"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/haru.jpg" alt="sample86" />
              <div class="image">
                <img src="images/haru.jpg" alt="sample86" />
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="#"></a>
            </figure>
          </li>
        </ul>
        <ul class="content-ul">
          <li>
            <figure class="snip1397">
              <img src="images/haru.jpg" alt="sample86" />
              <div class="image">
                <img src="images/haru.jpg" alt="sample86" />
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="#"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/haru.jpg" alt="sample86" />
              <div class="image">
                <img src="images/haru.jpg" alt="sample86" />
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="#"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/haru.jpg" alt="sample86" />
              <div class="image">
                <img src="images/haru.jpg" alt="sample86" />
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="#"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/haru.jpg" alt="sample86" />
              <div class="image">
                <img src="images/haru.jpg" alt="sample86" />
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="#"></a>
            </figure>
          </li>
        </ul>
      </div>
    </div>
    <div class="localNavigation">
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
      <p>ローカルナビゲーション</p>
    </div>
  </main>
  <footer class="footer">
    <p>フッター</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/glottologist"></script>
  <script src="js/script.js"></script>
</body>

</html>