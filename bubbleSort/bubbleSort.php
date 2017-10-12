<?php
/**
 * 冒泡算法
 *
 * 思路分析：在要排序的一组数中，对当前还未排好的序列，从前往后对相邻的两个数依次进行比较和调整，让较大的数往下沉，较小的往上冒。即，每当两相邻的数比较后发现它们的排序与排序要求相反时，就将它们互换。
 *
 * Created by PhpStorm.
 * User: sunhaunzhi
 * Date: 2017/9/25
 * Time: 10:16
 */
include_once 'runTime.php';

function bubbleSortOne($arr)
{
    $arrLength = count($arr);

    //该层循环控制 需要冒泡的轮数
    for ($i = 1; $i <= $arrLength; $i++) {
        //该层循环用来控制每轮 冒出一个数 需要比较的次数
        for ($k = 0; $k < $arrLength - 1; $k++) {
            if ($arr[$k] > $arr[$k + 1]) {
                $tmp = $arr[$k];
                $arr[$k] = $arr[$k + 1];
                $arr[$k + 1] = $tmp;
            }

        }
    }

    return $arr;
}

function bubbleSortTwo($arr)
{
    $flag = true; // 标示 排序未完成
    $length = count($arr)-1; // 数组长度
    $index = $length; // 最后一次交换的索引位置 初始值为最后一位
    while ($flag) {
        $flag = false; // 假设排序已完成
        $last = 0;
        for ($i=0; $i < $index; $i++) {
            if ($arr[$i] > $arr[$i+1]) {
                $flag = true; // 如果还有交换发生 则排序未完成
                $last = $i; // 记录最后一次发生交换的索引位置
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $tmp;
            }
        }
        $index = $last;
    }
    return $arr;
}

/*生成排序数组*/
$numberArr = [];
for ($i = 0; $i < 20; $i++) {
    $numberArr[] = rand(1, 10000);
}

print_r($numberArr);
echo '<br>';

//类使用方法介绍
$time=new runTime();
$time->star();//该语句尽量写在代码段的最开始处
//程序代码段
print_r(bubbleSortOne($numberArr));
$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();

$time->star();//该语句尽量写在代码段的最开始处
//程序代码段
print_r(bubbleSortTwo($numberArr));
$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();
