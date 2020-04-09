<?php

require_once(__DIR__ . '/config.php'); //ファイルの設定
require_once(__DIR__ . '/Bingo.php'); //ビンゴに関するクラス

$bingo = new \MyApp\Bingo(); //インスタンス  名前空間MyApp
$row = $bingo->create();

// echo "表示$row[1][2]";
// echo "表示{$row[1][2]}";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>BINGO!</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <table>
      <tr>
        <th>B</th>
        <th>I</th>
        <th>N</th>
        <th>G</th>
        <th>O</th>
      </tr>
      <?php for ($i = 0; $i < 5; $i++) : ?>
      <tr>
        <?php for ($j = 0; $j < 5; $j++) : ?>
        <td><?= $row[$i][$j]; ?></td>
        <?php endfor; ?>
      </tr>
      <?php endfor; ?>
    </table>
  </div>
</body>

</html>