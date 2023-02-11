<!DOCTYPE HTML>
<html>
<head>
     <meta charset=“UTF-8” >
     <title>Shop Market</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <div id="logout">
     <form action="logout.php" method="POST">
          <input type="submit" value="Выйти"><br/>
     </form>
     </div>
     <?php
     session_start();
     if (isset($_COOKIE["UserName"])) {
          if (isset($_SESSION["k"])) {
               $_SESSION["k"]++;
          } else {
               $_SESSION["k"] = 0;
          }
          if(!isset($_SESSION["i1"])){
               $_SESSION["i1"] = 0;
          }
          if(!isset($_SESSION["i2"])){
               $_SESSION["i2"] = 0;
          }
          if(!isset($_SESSION["i3"])){
               $_SESSION["i3"] = 0;
          }
          $c = $_SESSION["k"];
          echo "<div class=\"right\">Страница была обновлена $c раз(-а)</div>";
          $user = $_COOKIE["UserName"];
          echo "Добро пожаловать, $user";
          if(isset($_POST["item1"])){
               $_SESSION["i1"]++;
          }
          if(isset($_POST["item2"])){
               $_SESSION["i2"]++;
          }
          if(isset($_POST["item3"])){
               $_SESSION["i3"]++;
          }
          if(isset($_POST["basket"])){
               header("Location:basket.php");
          }
     }
     ?>
     <form action="basket.php" method="POST">
          <input type="submit" name="basket" value="Открыть корзину">
     </form>
          <form action="purchase.php" method="POST">
               <div class="main mom">
               <div class="child">
                    <img src="img/lays.jfif" width="150px" alt="1"></br>
                    <input type="submit" name="item1" value="Добавить в корзину">
               </div>
               <div class="child">
                    <img src="img/bacon.jfif" width="150px" alt="2"></br>
                    <input type="submit" name="item2" value="Добавить в корзину">
               </div>
               <div class="child">
                    <img src="img/cheese.jpg" width="150px" alt="3"></br>
                    <input type="submit" name="item3" value="Добавить в корзину">
               </div>
               </div>
          </form>
     
</body>
</html>