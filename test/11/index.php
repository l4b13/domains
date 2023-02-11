<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My forum</title>
</head>
<body>
<div id="reg" class="main">
          <div class="right">
               есть аккаунт?
               <input type="button" onclick="showLogin()" value="войти">
          </div>
          <h3>Регистрация</h3>
          <form action="index.php" method="POST">
               Имя пользователя: <input type="text" name="RegName"><br/>
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
     require_once("connect.php");
          if(isset($_POST["RegName"])) {
               if(!mysqli_ping($connect)) die("Ошибка соединения с базой данных");
               $command = "insert into user(name, password) values('".$_POST["RegName"]."','".$_POST["Password"]."')";
               $query = mysqli_query($connect, $command);
               if($query) {
                    echo "Пользователь зарегистрирован";
                    $_POST["UserName"] = $_POST["RegName"];
                    setcookie("UserName", $_POST["UserName"], time()+180);
                    header("Location: message.php");
               }
               else echo "Ошибка выполнения запроса";
          } else if (isset($_POST["UserName"])) {
               if(!mysqli_ping($connect)) die("Ошибка соединения с базой данных");
               $command = "select * from user where name = '".$_POST["UserName"]."'";
               $query = mysqli_query($connect, $command);
               if($query) {
                    $row = mysqli_fetch_array($query);
                    if ($row["password"] == $_POST["Password"]) {
                         echo "Вы авторизовались";
                         setcookie("UserName", $_POST["UserName"], time()+180);
                         header("Location: message.php");
                    }
                    echo "Ошибка выполнения запроса";
               }
               else echo "Ошибка выполнения запроса";
          }
     ?>
     <script src="script.js"></script>
</body>
</html>