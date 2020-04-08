<?php

function h($s)
{
  //表示する時には必ずエスケープ
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); //エスケープ
}