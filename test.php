<?php
/**
 * test
 * Created by PhpStorm.
 * User: sunhaunzhi
 * Date: 2017/9/25
 * Time: 13:40
 */

include 'runTime.php';

//类使用方法介绍
$time = new runTime();
$time->star();//该语句尽量写在代码段的最开始处

//程序代码段
$sum = 0;
for ($i = 0; $i < 10000000; $i++) {
    $sum = $sum + $i;
}

echo $sum;

$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();
