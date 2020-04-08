<?php

require_once(__DIR__ .);

$row = [];

for ($a = 0; $a < 5; $a++) :
  for ($b = 0; $b < 5; $b++) :
    $row[$b][$a] = mt_rand($a * 15 + 1, ($a + 1) * 15);
  endfor;
endfor;

// 解答例  非効率じゃね

// $nums = [];

// for ($i = 0; $i < 5; $i++) {
//   $col = range($i * 15 + 1, $i * 15 + 15);
//   shuffle($col);
//   $nums[$i] = array_slice($col, 0, 5);
// }


$row[2][2] = "⭐️";

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