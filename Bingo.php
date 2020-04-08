<?php

namespace MyApp;

class Bingo
{
  //メソッド
  public function create()
  {
    $row = [];

    for ($a = 0; $a < 5; $a++) :
      for ($b = 0; $b < 5; $b++) :
        $row[$b][$a] = mt_rand($a * 15 + 1, ($a + 1) * 15);
      endfor;
    endfor;

    $row[2][2] = "⭐️";

    return $row; //最終的に返す関数
  }
}