<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Task 1:</h3>";
        if (file_exists("task.txt")) {
            echo "task.txt exists";
            echo "<h3>Task 2:</h3>";
            $arr = file("task.txt");
            for ($i = 0; $i < count($arr); $i++) {
                echo $arr[$i]."</br>";
            }
            echo "<h3>Task 3:</h3>";
            $s = 0;
            for ($i = 0; $i < count($arr); $i++) {
                $s += substr_count($arr[$i], ". ");
            }
            $s++;
            $c = count($arr);
            echo "Число строк - $c, число предложений - $s";
            echo "<h3>Task 4:</h3>";
            for ($i = 0; $i < count($arr); $i++) {
                if ($i % 2 == 1) {
                    echo $arr[$i]."</br>";
                }
            }
            echo "<h3>Task 5:</h3>";
            $t = file("example.txt");
            $t[0] = preg_replace("/123/", "000", $t[0], 1);
            $f = fopen("example.txt", "w");
            for ($i = 0; $i < count($t); $i++) {
                fwrite($f, $t[$i]);
            }
            fclose($f);
            $t = file("example.txt");
            for ($i = 0; $i < count($t); $i++) {
                echo $t[$i]."</br>";
            }
        } else {
            echo "task.txt doesn't exist</br>";
        }
    ?>
</body>
</html>