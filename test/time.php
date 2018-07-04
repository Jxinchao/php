<?php
  echo time();

  echo '<hr>';

  $time = time();



  echo date('Y-m-d H:i:s',$time);

  echo '<hr>';

  date_default_timezone_set('PRC');  // 时间中国的   各个时间区的都可以通过手册区差
  $times = time();
  echo date('Y-m-d H:i:s',$times);

  // 时间也可以通过配置文件修改时间差     date.timezone  = 'UTC';
?>
