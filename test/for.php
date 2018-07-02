<?php
  for($i=0;$i<5;$i++){
    echo $i.'<br>';
  }
  echo '<hr>';

  $j = 0;
  while ($j < 5) {
    echo $j.'<br>';
    $j++;
  }
  echo '<hr>';

  $k = 0;
  do{
    echo $k.'<br>';   // 0
    $k++;   // 1
  } while ($k < 5); // 1  条件不满足得时候循环结束
  echo '<hr>';

  // break

  for($i =0; $i<5;$i++){
    if($i == 2){
      break;   // 条件满足得时候终止循环
    };
    echo $i.'<br>';
  }
  echo '<hr>';

  // continue
  for($i =0; $i<5;$i++){
    if($i == 3){
      continue;   // 终止此次循环，继续后面得循环
    };
    echo $i.'<br>';
  };



  




?>
