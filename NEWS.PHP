<?php
include_once('model.php');//引入封装文件
con('root','root','text');//连接数据库
// $res=getOne('news','cid=9');
$res=getList('news','cid=9');//调用函数查询多条数据
echo "<pre>";
var_dump($res);
include_once('news'.'.html');//引入相对应的HTML页面
