<?php

  $x = 3.2*7.7;
  echo ceil($x);
  echo "<br>";

  $x = 3.3*7.9;
  echo floor($x);
  echo "<br>";

  echo pi();
  echo "<br>";

  function circleArea ($r) {
    $circleArea = $r*$r*pi();
    echo ceil($circleArea);
  }

  circleArea(5);
  echo "<br>";

  echo "今日の打順は".mt_rand(1,9)."番です。";
  echo "<br>";

  $str = "heigth";
  echo strlen($str);
  echo "<br>";

  $str = "yokohama";
  echo strpos($str,"k");
  echo "<br>";

  echo substr($str,4,4);
  echo "<br>";

  echo str_replace("hama","suka",$str);
  echo "<br>";

  $name = "田中さん";
  $age = 55;
  
  $name = "太田さん";
  
  printf("%sは%03d歳です",$name,$age);
  echo "<br>";

  $profile=sprintf("%sは%03d歳です。",$name,$age);
  echo $profile;

  ?>