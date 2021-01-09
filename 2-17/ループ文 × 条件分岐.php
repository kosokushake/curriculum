<?php

$num = 0;
$i=0;
while ($num <= 40) {
  $rand=rand(1,6);
  $i++;
  echo $i."回目=".$rand;
  echo "<br>";
  $num += $rand;
  }

  echo "合計".$i."回でゴールしました";


?>