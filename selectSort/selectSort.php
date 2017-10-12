<?php
/**
 * 选择排序
 *
 * 思路分析：在要排序的一组数中，选出最小的一个数与第一个位置的数交换。然后在剩下的数当中再找最小的与第二个位置的数交换，如此循环到倒数第二个数和最后一个数比较为止。
 *
 * Created by PhpStorm.
 * User: sunhaunzhi
 * Date: 2017/10/10
 * Time: 11:11
 */

include_once "runTime.php";

function selectSort($arr)
{
    //双重循环完成，外层控制轮数，内层控制比较次数
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        //先假设最小的值的位置
        $p = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            //$arr[$p] 是当前已知的最小值
            if ($arr[$p] > $arr[$j]) {
                //比较，发现更小的,记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
                $p = $j;
            }
        }
        /*echo $p . '<br>';*/
        //已经确定了当前的最小值的位置，保存到$p中。如果发现最小值的位置与当前假设的位置$i不同，则位置互换即可。
        if ($p != $i) {
            $tmp = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tmp;
        }

        /*print_r($arr);
        echo "<br>";*/
    }
    //返回最终结果
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
print_r(selectSort($numberArr));
$time->stop();//该语句最好写在代码段的最结尾处
$time->spent();