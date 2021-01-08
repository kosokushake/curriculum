<?php

$numbers = [12,22,13,4,5];
echo count($numbers);
echo "<br>";

sort($numbers);
var_dump($numbers);
echo "<br>";

if(in_array(5,$numbers)) {
  echo "番号が一致しました。";
  echo "<br>";
}else {
  echo "番号が一致しませんでした。";
  echo "<br>";
}


$atstr = implode("番",$numbers);
var_dump($atstr);
echo "<br>";

$re_numbers = explode("番",$atstr);
var_dump($re_numbers);
echo "<br>";

?>