<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    $score1 = 80 . PHP_EOL;
    $score2 = 60 . PHP_EOL;
    $score3 = 55 . PHP_EOL;
    $score4 = 40 . PHP_EOL;
    $score5 = 100 . PHP_EOL;
    $score6 = 25 . PHP_EOL;
    $score7 = 80 . PHP_EOL;
    $score8 = 95 . PHP_EOL;
    $score9 = 30 . PHP_EOL;
    $score10 = 60 . PHP_EOL;

    $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7
          + $score8 + $score9 + $score10;
    $avg = $sum / 10;

    echo $avg;
    ?>
  </p>
</body>
</html>