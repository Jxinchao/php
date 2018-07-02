<?php
  function test(){
    echo '这里是测试得数据';
  }
  test();
  /*
    【作用域】
      定义 ：
        就是一个变量得作用得范围，或者叫生命周期
    【内部变量】
        就是函数体内声明得变量，内部变量得作用域，只在函数体内生效，程序执行完事以后自动销毁(垃圾回收机制)
    【外局变量】
        外局变量就是在函数体外声明变量，不能在函数体内使用
        函数体外得变量名字可以与函数体内得变量名字一样，但是一般不这么做，防止混淆；
    【超全局变量】
        外部变量和内部变量是同一个变量
        $_GET $_POST $_FILE $_COOKIE  $_SESSION  $GLOBALS

    PS： 【静态变量】
        function total(){
        static $num = 2;
        $num +=2;
        echo $num;
      };
      total(); // 4
      total(); // 8
      total();  //16
      这个变量只会初始化一次，在运行得时候会记录上一次得值 static 变量不会有销毁
  */

  function total(){
    static $num = 2;
    $num *=2;
    echo $num;
  };
  total(); // 4
  total(); // 8
  total();  //16
  total();  // 32
?>
