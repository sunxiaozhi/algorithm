<?php
/**
 * 函数反转
 * Created by PhpStorm.
 * User: sunhaunzhi
 * Date: 2017/9/26
 * Time: 11:02
 */

/*
 *  $a++是先赋值后++，++$a是先++运算后赋值！
 * */

include_once 'runTime.php';

$numberArr = array(122, 2, 3, 45, 4, 52, 4, 1, 32, 333);

function reverse($arr)
{
    $n = count($arr);

    $left = 0;
    $right = $n - 1;

    while ($left < $right) {
        $temp = $arr[$left];
        $arr[$left++] = $arr[$right];
        $arr[$right--] = $temp;
    }

    return $arr;
}

//类使用方法介绍
$time=new runTime();
$time->star();//该语句尽量写在代码段的最开始处
//程序代码段
print_r(reverse($numberArr));
$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();

//类使用方法介绍
$time=new runTime();
$time->star();//该语句尽量写在代码段的最开始处
//程序代码段
print_r(array_reverse ($numberArr));
$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();