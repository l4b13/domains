<!DOCTYPE HTML>
<html >
<head>
     <meta charset=“UTF-8” >
     <title>Начало работы с PHP</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <p>lab 8</p>
     <?php
          $t1 = 34;
          echo "Task 1: Дано двузначное число $t1. Определить, кратна ли 3 сумма его цифр.<br/>";
          if ($t1 > 9 && $t1 < 100) {
               $ans1 = 0;
               while ($t1 > 0) {
                    $ans1 += $t1 % 10;
                    $t1 = intdiv($t1, 10);
               }
               if ($ans1 % 3 == 0) {
                    echo "Число $ans1 кратно 3<br/><br/>";
               } else {
                    echo "Число $ans1 не кратно 3<br/><br/>";
               }
          } else {
               echo "Число не 2-значное<br/><br/>";
          }

          $t2 = 214;
          echo "Task 2: Дано трехзначное число $t2. Определить, равен ли квадрат этого числа сумме кубов его цифр.<br/>";
          if ($t2 < 1000) {
               $temp1 = $t2**2;
               $temp2 = 0;
               while ($t2 > 0) {
                    $temp2 += ($t2 % 10)**3;
                    $t2 = intdiv($t2, 10);
               }
               if ($temp1 == $temp2) {
                    echo "$temp1 равно $temp2<br/><br/>";
               } else {
                    echo "$temp1 не равно $temp2<br/><br/>";
               }
          } else {
               echo "Число не 3-значное<br/><br/>";
          }

          $t3a = 4;
          $t3b = 6;
          $t3c = 4;
          echo "Task 3: Даны три числа a = $t3a, b = $t3b, c = $t3c. Определить, имеется ли среди них хотя бы одна пара равных между собой чисел.<br/>";
          if ($t3a == $t3b) {
               echo "Число a равно b.<br/><br/>";
          } else if ($t3a == $t3c) {
               echo "Число a равно c.<br/><br/>";
          } else if ($t3b == $t3c) {
               echo "Число b равно c.<br/><br/>";
          } else {
               echo "Все числа разные.<br/><br/>";
          }

          $t4 = [5, 7, 8, -4, -6, 3, 0, -5];
          $emp = true;
          echo "Task 4: Дана последовательность чисел ";
          foreach ($t4 as $tt4) {
               echo "$tt4 ";
          }
          echo ". Определить, есть ли в последовательности отрицательные числа и вывести их порядковые номера.<br/>";
          for ($i = 0; $i < count($t4); $i++) {
               if ($t4[$i] < 0) {
                    echo "$i ";
                    $emp = false;
               }
          }
          if ($emp) {
               echo "В массиве нет отрицательных чисел.<br/><br/>";
          } else {
               echo "<br/><br/>";
          }

          $t5 = "123 34 sdfsdf sdfdw 34 123 123";
          $t5new = explode(" ", $t5);
          $ar5 = array();
          echo "Task 5: Дано предложение $t5. Найти количество одинаковых слов в предложении.<br/>";
          foreach ($t5new as $tt5) {
               $ar5[$tt5]=0;
          }
          foreach ($t5new as $tt5) {
               $ar5[$tt5]++;
          }
          foreach ($ar5 as $key => $tar5) {
               echo "$key: $tar5; ";
          }
          echo "<br/><br/>";
     ?>
</body>
</html>
