<!DOCTYPE HTML>
<html>
<head>
     <meta charset=“UTF-8” >
     <title>Shop Auth</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <div id="reg" class="main">
          <div class="right">
               есть аккаунт?
               <input type="button" onclick="showLogin()" value="войти">
          </div>
          <h3>Регистрация</h3>
          <form action="index.php" method="POST">
               Имя пользователя: <input type="text" name="UserName"><br/>
               Пароль: <input type="password" name="Password"><br/>
               <!-- Повторите пароль: <input type="password" name="PasswordConf"><br/> -->
               <input type="submit" value="Зарегистрироваться"><br/>
          </form>
     </div>
     <div id="login" class="main">
          <div class="right">
               нет аккаунта?
               <input type="button" onclick="showReg()" value="создать">
          </div>
          <h3>Авторизация</h3>
          <form action="index.php" method="POST">
               Имя пользователя: <input type="text" name="UserName"><br/>
               Пароль: <input type="password" name="Password"><br/>
               <input type="submit" value="Войти"><br/>
          </form>
     </div>

     <?php
          if(isset($_POST["UserName"])) {
               setcookie("UserName", $_POST["UserName"], time()+180);
               header("Location: purchase.php");
          }
     ?>
     <script src="script.js"></script>
</body>
</html>