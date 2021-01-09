<?php
  
  $date = date("H",time());
  $hour = intval($date);

  if ($hour <=10) {
    echo "おはようございます";
  }elseif ($hour<=18) {
    echo "こんにちは";
  }else {
    echo "こんばんは";
  }
  
  ?>