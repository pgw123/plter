<?php
include_once('model.php');//引入封装文件
con('root','','one');//引入封装文件
//$res=getOne('news','cis=9');
$res=getList('nm','cid=3');
echo "<pre>";
var_dump($res);
include_once('news'.'.html');