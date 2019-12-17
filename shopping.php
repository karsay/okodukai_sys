<?php
session_start();
?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/shopping.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <title>shoping</title>
</head>

<body>
  <header class="header">
    <a href="home.php"><img src="images/home/logo.png" width="120px"></a>
    <ul class="header-ul">
      <li><a href="budget.php" class="btn4">Budget</a></li>
      <li><a href="#" class="btn2">Enter shopping information</a></li>
      <li><a href="coupon.php" class="btn4">Coupon</a></li>
      <li><a href="r_budget.php" class="btn4">Remaining Budget</a></li>
      <li><a href="setting.php" class="btn4">User Setting</a></li>
      <li><a href="logout.php" class="btn4">Logout</a></li>
    </ul>
  </header>
  <main>
    <div id="input-wrap">
      <div id="input-box">
        <form action="r_budget.php" method="POST">
        <ul>
          <li class="inp">
            <label class="ef">
            <input type="text" placeholder="Bought Item">
            <div class="sel sel--black-panther">
              <select name="select-profession" id="select-profession">
                <option value="" disabled>Choose Genre</option>
                <option value="Book">Book</option>
                <option value="Game">Game</option>
                <option value="Appliances">Appliances</option>
                <option value="PC">PC</option>
                <option value="Drink">Drink</option>
                <option value="Drag">Drag</option>
                <option value="Toy">Toy</option>
                <option value="Fashion">Fashion</option>
                <option value="Outdoor">Outdoor</option>
              </select>
            </div>
            <label class="ef">
            <input type="text" placeholder="JPY 0.0">
          </li>
          <li class="inp">
            <label class="ef">
            <input type="text" placeholder="Bought Item">
            <div class="sel sel--black-panther">
              <select name="select-profession" id="select-profession">
                <option value="" disabled>Choose Genre</option>
                <option value="Book">Book</option>
                <option value="Game">Game</option>
                <option value="Appliances">Appliances</option>
                <option value="PC">PC</option>
                <option value="Drink">Drink</option>
                <option value="Drag">Drag</option>
                <option value="Toy">Toy</option>
                <option value="Fashion">Fashion</option>
                <option value="Outdoor">Outdoor</option>
              </select>
            </div>
            <label class="ef">
            <input type="text" placeholder="JPY 0.0">
          </li>
          <li class="inp">
            <label class="ef">
            <input type="text" placeholder="Bought Item">
            <div class="sel sel--black-panther">
              <select name="select-profession" id="select-profession">
                <option value="" disabled>Choose Genre</option>
                <option value="Book">Book</option>
                <option value="Game">Game</option>
                <option value="Appliances">Appliances</option>
                <option value="PC">PC</option>
                <option value="Drink">Drink</option>
                <option value="Drag">Drag</option>
                <option value="Toy">Toy</option>
                <option value="Fashion">Fashion</option>
                <option value="Outdoor">Outdoor</option>
              </select>
            </div>
            <label class="ef">
            <input type="text" placeholder="JPY 0.0">
          </li>          <li class="inp">
            <label class="ef">
            <input type="text" placeholder="Bought Item">
            <div class="sel sel--black-panther">
              <select name="select-profession" id="select-profession">
                <option value="" disabled>Choose Genre</option>
                <option value="Book">Book</option>
                <option value="Game">Game</option>
                <option value="Appliances">Appliances</option>
                <option value="PC">PC</option>
                <option value="Drink">Drink</option>
                <option value="Drag">Drag</option>
                <option value="Toy">Toy</option>
                <option value="Fashion">Fashion</option>
                <option value="Outdoor">Outdoor</option>
              </select>
            </div>
            <label class="ef">
            <input type="text" placeholder="JPY 0.0">
          </li>          <li class="inp">
            <label class="ef">
            <input type="text" placeholder="Bought Item">
            <div class="sel sel--black-panther">
              <select name="select-profession" id="select-profession">
                <option value="" disabled>Choose Genre</option>
                <option value="Book">Book</option>
                <option value="Game">Game</option>
                <option value="Appliances">Appliances</option>
                <option value="PC">PC</option>
                <option value="Drink">Drink</option>
                <option value="Drag">Drag</option>
                <option value="Toy">Toy</option>
                <option value="Fashion">Fashion</option>
                <option value="Outdoor">Outdoor</option>
              </select>
            </div>
            <label class="ef">
            <input type="text" placeholder="JPY 0.0">
          </li>
        </ul>
        <input type="submit" class="btn-border" value="SUBMIT">
        </form>
      </div>
    </div>
    <div id="img-wrap">
    </div>
  </main>
  <footer class="footer">
    <p><small>© 2019 r_kashiwagi inc.</small></p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>