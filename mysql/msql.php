<?php
  // 1.链接数据库
  $link = mysqli_connect('118.89.101.176','root','root');
  // 2. 判断是否链接成功
  if(!$link){
    exit("数据库链接失败");
  }
  // 3.设置字符集
  mysqli_set_charset($link,'utf8');
  // 4.选中数据库
  mysqli_select_db($link,'node');
  // 5.准备sql语句    // select update insert delete bbs_user
  $sql = "select * from login";
  // 6.发送sql语句
  $res = mysqli_query($link,$sql);
  // var_dump($res);
  // 7.处理结果集
  $result = mysqli_fetch_assoc($res);   // 这里只能传一个参数
  $result = mysqli_fetch_assoc($res);    // 写一个往下读一条
  var_dump($result);
  // 8.关闭数据库（释放资源）
  mysqli_close($link);

  // var_dump($link);
?>
