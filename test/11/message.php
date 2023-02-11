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
    <div id="logout">
     <form action="logout.php" method="POST">
          <input type="submit" value="Выйти"><br/>
     </form>
     </div>
     <div id="send_msg">
     <form action="send_msg.php" method="POST">
          <input type="submit" value="Написать"><br/>
     </form>
     </div>
<?php
require_once("connect.php");
if(!mysqli_ping($connect)) die("Ошибка соединения с базой данных");
$command = "select * from message";     //выводим все сообщения форума
$query = mysqli_query($connect, $command);
if($query) {
    echo "<table>";
    while($row = mysqli_fetch_array($query)) {
        echo "<h3>" . $row['title'] . "</h3>";
        echo $row['msg'];
    }
    echo "</table>";
}
else echo "Ошибка выполнения запроса";
mysqli_close($connect);
?>
</body>
</html>