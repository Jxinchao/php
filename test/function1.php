<?php
  function sum($num1 , $num2)
  {
    return $num1 + $num2;
  };
  var_dump(sum(1,2));



  function test(...$arr){
    var_dump($arr);
  };

  test(1,2,3,4,5,'fff','对方是否');

  echo '<br>';

  function test1($a,$b,$c,$d){
    var_dump($a,$b,$c,$d);
  };
  $arr = [1,2,3,'s'];
  test1(...$arr);

  echo '<br>';

  // 匿名函数

  $test2 = function(){
    echo '我是匿名函数';
  };
  $test2();

?>
