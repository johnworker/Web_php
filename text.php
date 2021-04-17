<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php text</title>
</head>
<body>
    <h1>Title</h1>
    <?php echo "I\'m Leo";?>

    <?php print "hello world";?>

    <?php echo "<h2 style='color:red;'>I'm Leo</h2>";?>
    <?php
    $car = "Honda";
    $yeah = "!";
    // echo "I have a $car"
    echo 'I have a ' . $car . $yeah . '<br>';
    ?>

    <?php
    $x = "5" ;
    $y = 2 ;
    // echo $x + $y; 運算
    // 連續字串
    echo $x . $y;
    ?>

    <!-- 字串中加上「\n」代表程式碼換行。 -->
    <?php
    echo "<h2>\nsubtitle\n</h2>\n"
    ?>

    <!-- strlen()字元數 -->
    <?php
    echo strlen("Hello world") . "<br>";
    ?>

    <!-- str_word_count()字母數 -->
    <?php
    echo str_word_count("Hello world") . "<br>"; 
    ?>

    <!-- strpos()尋找字元 -->
    <?php
    echo strpos("Hello world!", "H") . "<br>";//0
    ?>

    <!-- str_replace()取代字元 -->
    <?php
    echo str_replace("world", "Misa", "Hello world") ."<br>";; // Hello Misa
    ?>

    <?php
    echo 2**3 ."<br>";
    ?>

    <?php
    $x = 10;
    echo $x %= 2;
    ?>

    <?php
    $money = 100;
    if ($money > 50) {
        echo 'I am rich';
      }
    ?>

    <?php
    $money = "50";
    if ($money > 50) {
        echo 'I am rich';
      }
      else {
        echo 'I am poor';
      }
    ?>

    <?php
    $money = "50";
    echo $money <=> 50;
    ?>

    <?php
    $x = 20;
    $y = 100;
    if ($x == 50 || $y == 101) {
        echo 'I am rich';
      }
      else {
        echo 'I am poor';
      }
    ?>

</body>
</html>