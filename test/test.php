<?
  // $a = 10;
  // $b = $a;
  // $a++;
  // echo $b;
  //
  //
  // echo '<hr>';
  //
  // $a = 10;
  // $b = &$a;  // 将A的地址赋给b
  // $a++;
  // echo $b;


  // $v = 10;
  // unset($v);   //  Notice: Undefined variable: v in F:\wamp\www\test\test.php on line 18   销毁变量
  // echo $v;

  $a = '锄禾日当午';
  $b = 'a';
  echo $$b;

  function($type){

  };

  echo '<hr>';

  define('name','我要学李白',false);   // true 不区分大小写，false 区分大小写
  echo name;

  echo '<hr>';
  // 判断常量是否被定义
  define('a','我要李白');
  if(!defined('a')){
    define('a','libai');
  }
  echo a;

  echo '<hr>';

  echo PHP_INT_MAX;  // 2147483647

  echo '<hr>';

  $name = '111'; //双引号解析转义字符，单引号不解析；
  echo '$name';
  echo $name.'222';   // 变量跟字符串使用得时候通过点 . 来拼接

  echo '<hr>';

  $test = '锄禾日当午， 汗滴禾下土。 谁知盘中餐， 粒粒皆辛苦。';

  echo "{$name}锄禾日当午， 汗滴禾下土。 谁知盘中餐， 粒粒皆辛苦。";

  echo '<hr>';

  echo "$name 锄禾日当午， 汗滴禾下土。 谁知盘中餐， 粒粒皆辛苦。55";

  echo '<hr>';
  echo "'$name'";

  phpinfo();


?>
