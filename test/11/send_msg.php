<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="message.php" method="POST">
        <input type="submit" value="Вернуться на форум">
    </form>
    <div class="center">
    <form action="send_msg.php" method="POST">
            Введите тему:
            <input type="text" name="title"><br/>
            Наберите сообщение:
            <input type="text" name="desc"><br/>
            <input type="submit" value="Отправить">
    </form>
    </div>
    <?php
    require_once("connect.php");
    if(isset($_POST["desc"]) and $_POST["title"]) {
        if(!mysqli_ping($connect)) die("Ошибка соединения с базой данных");
        $command = "insert into message(msg, title) values('".$_POST["desc"]."','".$_POST["title"]."')";
        $query = mysqli_query($connect, $command);
        if($query) {
            echo "Сообщение отправлено";
        }
        else echo "Ошибка выполнения запроса";
        mysqli_close($connect);
    }
    ?>
</body>
</html>