<?php
    // var_dump($_GET);    // 通过地址传递数据
    // var_dump($_POST);   // 通过数组传递
    // var_dump($_REQIEST);   // 可以接收 get跟post同时传过来的值
    // var_dump($_SERVER);   // 服务信息
    // echo $_SERVER["HTTP_HOST"];  // 获取下面的东西


    // 简单实现一个用户登录

    $username = $_GET['username'];
    $pass     = $_GET['pwd'];

    $user = '张三';
    $pwd  = '123456';

    if($username == $user && $pass == $pwd){
      echo '登录成功';
    }else{
      echo '登录失败';
    }

?>
