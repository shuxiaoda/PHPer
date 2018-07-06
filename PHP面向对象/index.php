<?php
Header("Content-type:text/html;charset=utf-8");
class Person{
    public $name = "曹禺";
    public $work = "雷雨";
    public function film(){
        echo $name."拍电影";
    }
}
$p = new Person();
echo $p->film();