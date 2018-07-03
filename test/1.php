<?php
  // include('includes.php');   报错后会继续执行

  // require('includes.php');  // 报错后不会继续执行

  // select();

  //include 和 require 语句是相同的，除了错误处理方面：

// require 会生成致命错误（E_COMPILE_ERROR）并停止脚本
// include 只生成警告（E_WARNING），并且脚本会继续
// 因此，如果您希望继续执行，并向用户输出结果，即使包含文件已丢失，那么请使用 include。否则，在框架、CMS 或者复杂的 PHP 应用程序编程中，请始终使用 require 向执行流引用关键文件。这有助于提高应用程序的安全性和完整性，在某个关键文件意外丢失的情况下。
//
// 包含文件省去了大量的工作。这意味着您可以为所有页面创建标准页头、页脚或者菜单文件。然后，在页头需要更新时，您只需更新这个页头包含文件即可。


  include('includes.php')
?>
