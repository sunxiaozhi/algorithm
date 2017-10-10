<?php
/**
 *
 * Created by PhpStorm.
 * User: sunhaunzhi
 * Date: 2017/10/10
 * Time: 15:05
 */
include_once "runTime.php";

function insertSort($arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $tmp = $arr[$i];
        //内层循环控制，比较并插入
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($tmp < $arr[$j]) {
                //发现插入的元素要小，交换位置，将后边的元素与前面的元素互换
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                //如果碰到不需要移动的元素，由于是已经排序好是数组，则前面的就不需要再次比较了。
                break;
            }
        }
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
print_r(insertSort($numberArr));
$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();