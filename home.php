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
    <a href="#"><img src="images/home/logo.png" width="120px"></a>
    <ul class="header-ul">
      <li><a href="#" class="btn2">Home</a></li>
      <li><a href="budget.php" class="btn4">Budget</a></li>
      <li><a href="shopping.php" class="btn4">Enter shopping information</a></li>
      <li><a href="coupon.php" class="btn4">Coupon</a></li>
      <li><a href="r_budget.php" class="btn4">Remaining Budget</a></li>
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
              <img src="images/home/budget.jpg" alt="sample86" class="top"/>
              <div class="filter">
                <div class="image">
                  <img src="images/home/budget.jpg" alt="sample86" class="top"/>
                  <div class="img-cap">
                    <p>Budget</p>
                    <p>You can enter a budget</p>
                  </div>
                </div>
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="budget.php"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/home/shopping.jpg" alt="sample86" class="top"/>
              <div class="image">
                <img src="images/home/shopping.jpg" alt="sample86" class="top"/>
                <div class="img-cap">
                  <p>Enter shopping information</p>
                  <p>You can enter a budget</p>
                </div>
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="shopping.php"></a>
            </figure>
          </li>
        </ul>
        <ul class="content-ul">
          <li>
            <figure class="snip1397">
              <img src="images/home/coupon.jpg" alt="sample86" />
              <div class="image">
                <img src="images/home/coupon.jpg" alt="sample86" />
                <div class="img-cap row">
                  <p>Coupon</p>
                  <p>You can enter a budget</p>
                </div>
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="coupon.php"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/home/ramune.jpg" alt="sample86" />
              <div class="image">
                <img src="images/home/ramune.jpg" alt="sample86" />
                <div class="img-cap row">
                  <p>Remainder<br> Budget</p>
                  <p>You can enter a budget</p>
                </div>
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="r_budget.php"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/home/setting.jpg" alt="sample86" />
              <div class="image">
                <img src="images/home/setting.jpg" alt="sample86" />
                <div class="img-cap row">
                  <p>User Setting</p>
                  <p>You can enter a budget</p>
                </div>
              </div>
              <span class="read-more">
                Next<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="setting.php"></a>
            </figure>
          </li>
          <li>
            <figure class="snip1397">
              <img src="images/home/logout.jpg" alt="sample86" />
              <div class="image">
                <img src="images/home/logout.jpg" alt="sample86" />
                <div class="img-cap row">
                  <p>Logout</p>
                  <p>You can enter a budget</p>
                </div>
              </div>
              <span class="read-more">
                Logout<i class="ion-android-arrow-forward"></i>
              </span>
              <a href="logout.php"></a>
            </figure>
          </li>
        </ul>
      </div>
    </div>
    <div class="localNavigation">
      <p>
        Available Coupon
      </p>
      <div class="coupon">
        <a href="#">
          <p>Coupon Name</p>
          <p>Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.</p>
          <img src="images/home/use.png" width="15px">USE
        </a>
      </div>
      <div class="coupon">
        <a href="#">
          <p>Coupon Name</p>
          <p>Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.</p>
          <img src="images/home/use.png" width="15px">USE
        </a>
      </div>
      <div class="coupon">
        <a href="#">
          <p>Coupon Name</p>
          <p>Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.</p>
          <img src="images/home/use.png" width="15px">USE
        </a>
      </div>
      <div class="coupon">
        <a href="#">
          <p>Coupon Name</p>
          <p>Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.</p>
          <img src="images/home/use.png" width="15px">USE
        </a>
      </div>
      <div class="coupon">
        <a href="#">
          <p>Coupon Name</p>
          <p>Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.</p>
          <img src="images/home/use.png" width="15px">USE
        </a>
      </div>
      <div class="coupon">
        <a href="#">
          <p>Coupon Name</p>
          <p>Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.Counpon Section.</p>
          <img src="images/home/use.png" width="15px">USE
        </a>
      </div>
    </div>
  </main>
  <footer class="footer">
    <p><small>© 2019 r_kashiwagi inc.</small></p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/glottologist"></script>
  <script src="js/script.js"></script>
</body>

</html>