<?php
  // 标量
  /*
  标量
    1、整型   （就是整数）
        1  2
    2、浮点型   (就是小数)
        1.3  3.4
    3、布尔类型  (就是boolean  真假)
        true false
    4、字符串
        只要用引号引起来得都为字符串

  混合类型

    1、数组
        Array   $arr = [1,2,3,4]
    2、对象
        object
  特殊类型
    1、空
        null
    2、资源
        resource
    */

    $num = 1;  //整型
    $nums = 1.2;   //浮点数

    // gettype 获取数据类型
    $str    = '1213.abg';
    $strs   = 123;  // integer 整数
    $strss  = 1.2;  // double  双重得，浮点数
    $arr    = [];   // array   数组

    echo gettype($arr);

    echo '<hr>';

    // intval() 把字符串转为整型
    // floatval()  转为浮点数
    // strval()   数字转字符串
    // boolval()   布尔值得类型转换

    $str1 = '14.ddd';

    echo gettype(intval($str1));
    echo '<hr>';
    // null 空值转换  null值为0

    $nulls = null;

    echo intval($nulls);  // 0
    echo floatval($nulls); // 00
    echo strval($nulls); // 没有东西

    var_dump(strval($nulls)); // string '' (length=0)

    // var_dump 类型跟值都会打印出来


    // 系统常量   不能被重复定义，必须再定义之后使用  常量一般用大写，便于识别

    define('ABC','abc');
    echo ABC;

    echo defined(ABC);   // 判断常量是否被定义

    echo '<br>';

    echo __FILE__;   // 获取打开文件得名字  系统给的都是大写得
    echo '<br>';
    echo __LINE__;   // 这段代码再第几行；
    echo '<br>';
    echo PHP_VERSION;  // 获取版本号
    echo '<br>';
    echo __DIR__;  // 当前所在得文件目录
    echo '<br>';
    function test(){
      echo __FUNCTION__;  // 获取方法名
    }
    test();


    // 算术运算符  + - * / %

    $x = 5;
    $t = 0;
    $z = $x - $t;

    echo $z;

    // 自增  ++ --
    $k = 1;
    $k ++;

    echo $k;

    // 比较运算符  < > >= <=  == ===   true  false

    $st = '123';
    $n  =  123;

    $str  ===  $n;  // 判断值 类型

    // 逻辑运算符
    //   !    !true  false   !false true
    //   &&  只要一个为假就是假得，如果两个都是真得就是真的
    //   ||  只要有一个为真就为真 ，如果两个都为假就是假的

    $a = 12;
    $c = '12';

    ($a == $c) || false;  //真的意思

    ($a === $c) || false;  //假的意思

    ($a == $c) && ($a === $c);  // 假 false



    // 流程控制

    /*
      if(条件){
      真区间
      }
    */

    $b = 1;
    if($b){
      echo '<br>';
      echo '我得真区间';
    }

    echo '<br>';

    echo  '我是后续代码';


  ?>
