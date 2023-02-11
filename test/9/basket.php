<!DOCTYPE HTML>
<html>
<head>
     <meta charset=“UTF-8” >
     <title>Shop Basket</title>
</head>
<body>
     <form action="purchase.php" method="POST">
          <input type="submit" name="bts" value="Вернуться в магазин">
     </form>
     <?php
          session_start();
          if (isset($_COOKIE["UserName"])) {
               $user = $_COOKIE["UserName"];
               echo "Корзина $user:";
               echo "<div class=\"mom\">";
               if ($_SESSION["i1"]>0) {
                    echo "<div class=\"child\"><img src=\"img/lays.jfif\" width=\"100px\" alt=\"1\">".$_SESSION["i1"]."</div>";
               }
               if ($_SESSION["i2"]>0) {
                    echo "<img src=\"img/bacon.jfif\" width=\"100px\" alt=\"2\">".$_SESSION["i2"];
               }
               if ($_SESSION["i3"]>0) {
                    echo "<img src=\"img/cheese.jpg\" width=\"100px\" alt=\"3\">".$_SESSION["i3"];
               }
               echo "</div>";
          }
     ?>
</body>
</html>