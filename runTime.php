<?php

/**
 * 计算程序运行时间
 * Created by PhpStorm.
 * User: sunhaunzhi
 * Date: 2017/9/25
 * Time: 13:37
 */
class runTime
{
    private $starTime;
    private $stopTime;

    private function getMicTime()
    {
        $mictime = microtime();
        list($usec, $sec) = explode(' ', $mictime);
        return (float)$usec + (float)$sec;
    }

    public function star()
    {
        $this->starTime = $this->getMicTime();
    }

    public function stop()
    {
        $this->stopTime = $this->getMicTime();
    }

    public function spent()
    {
        //return round($this->stopTime - $this->starTime) * 1000;//单位：毫秒数
        echo '<br>耗时:' . ($this->stopTime - $this->starTime) . '<br>';//单位：秒
    }
}