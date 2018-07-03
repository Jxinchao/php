<?php

  // 索引数组。下标从0开始   php 5.4以后都用这种写法
  $arr = [1,2,3,4,5,6,7,8,9];

  var_dump($arr);

  // 一样得效果
  $arrs = array(1,2,3,4,5,6,7,8);

  var_dump($arrs);

  // 可以指定小标

  $arr1 = ['2' => 'a','b','v','b'];

  var_dump($arr1);

  // 关联数组

  $arr2 = [
    'java' => '大数据',
    'html' => '页面',
    'php'  => 'mysql',
    'js'   => '效果'
  ];

  var_dump($arr2);

  // 二维数组

  $arr3 = [
    'php' => [
      'html',
      'js',
      'css',
      'java'
    ],
    'java',
    'javascript',
    'c++'
  ];

  var_dump($arr3);

  // 三维数组

  $arr4 = [
    'php' => [
      'html',
      'js' => [
        'dom',
        'bom',
        'js'
      ]
    ]
  ];
  var_dump($arr4);

  /*
  *   【索引数组】
      下标就是数字开始得    $arr = [1,2,3,4,5,6,7,8,9];

      【关联数组】
            $arr2 = [
              'java' => '大数据',
              'html' => '页面',
              'php'  => 'mysql',
              'js'   => '效果'
            ];

      【二维数组】 关联和索引混合得
              $arr3 = [
                'php' => [
                  'html',
                  'js',
                  'css',
                  'java'
                ],
                'java',
                'javascript',
                'c++'
              ];
      【三维数组&& 多维数组】
        $arr4 = [
          'php' => [
            'html',
            'js' => [
              'dom',
              'bom',
              'js'
            ]
          ]
        ];
  */

  $arr5 = ['a','b','c','d'];

  // 获取数组中得值
  echo $arr5[1];

  // 添加一个元素

  $arr5[4] = '这是我添加得元素';

  // 删除一个元素

  unset($arr5[2]);

  var_dump($arr);

  // 二维数组获取

  $arr6 = [
    'php' => [
      'html',
      'js' => [
        'dom',
        'bom',
        'js'
      ]
    ]
  ];
  var_dump($arr6['php']['js'][1]);


  // 求和

  $arr7 = [1,2,3,4,5,6,7,8,9];

  $sum = 0;
  $num = count($arr7);

  for($i = 0; $i<$num;$i++){
    $sum += $arr7[$i];
  };

  var_dump($sum);

?>
