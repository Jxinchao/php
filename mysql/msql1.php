<?php
  $link = mysqli_connect('118.89.101.176','root','root');

  if(!$link){
    exit('数据库链接失败');
  }

  mysqli_set_charset($link,'utf8');

  mysqli_select_db($link, 'node');

  $sql = 'select * from login';

  $obj = mysqli_query($link,$sql);

  while ($rows = mysqli_fetch_assoc($obj)){
    var_dump($rows);
  }

  mysqli_close($link);
?>
