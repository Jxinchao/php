<?php
  // echo mt_rand(1,6);  // >= 1   <=6

  $griddle = mt_rand(1,7);

  echo $griddle.'<br>';

  switch ($griddle) {
    case 1:
    case 2:
      echo '老婆拖地<br>';
      echo '老婆洗衣服';
      break;
    case 3:
      echo '老婆洗锅碗瓢盆<br>';
      echo '看孩子';
      break;
    case 4:
      echo '老婆做饭<br>';
      break;
    case 5:
    case 6:
    case 7:
      echo '老婆都干了<br>';
      break;
    default:
      echo '你的内容朝纲了你老婆不会<br>';
      break;
  }

?>
