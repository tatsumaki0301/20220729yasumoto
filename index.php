<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問題①</title>
  <style>
    table,td {
      border: solid 1px black;
      border-collapse: collapse;
    }
    td {
      text-align:center;
    }
  </style>
</head>

<table>
<?php

  for($i = 1; $i <= 9; $i++) {
    echo '<tr>';

    for($s = 1; $s <= 9; $s++) {
      echo '<td>' . $i * $s . '</td>';
    }
    echo '</tr>';
  }

  ?>
</table>
</html>