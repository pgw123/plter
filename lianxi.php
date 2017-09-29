<?php
//第一题

$arr =array(5,10,11,12,13);
$a=count($arr);
for($i=0;$i<$a;$i++){

	echo $arr[$i];
	echo "<br/>";
}
echo "<hr/>";

//第二题

$arr=array(8,9,6,5,4);
echo array_sum($arr);
// foreach ( $arr as $value) ;
	
// echo "<br/>";
// print_r($arr);
echo "<hr/>";

//第三题

	$arr=array();
for($j=65;$j<91;$j++){
	$c=chr($j);
    //echo strtolower(chr($j)).' ';//输出小写字母  
    echo strtoupper(chr($j));

    echo ord($c);
    echo "&nbsp;";
    }

echo "<hr/>";
//第四题
#include<stdio.h>

$arr =array('a','f','s','A','Y');
$len =count($arr);
for($h=0;$h<$len;$h++){
	$ass=$arr[$h];
echo ord($ass);
echo "<br/>";
}
echo "<hr/>";
//第五题
/**
练习：统计一段字符串中所有元音字母的个数（区分大小写）
*/

$str=array('laudooqwdfiqeodsancvloaeiyepsljkefhsedjvflrfqfwpoutpoqefjgThisisatestfiledifgowhksfdtgujtyiutjearqtwrdbcuywlbnciqtw7qpjnlcghqw88ujcaiutoaddhwdypacadjgwodupnzddlcj'); //原始字符串
$aoo=$str[0];
echo  ($aoo).'<br>'; //先将这个字符串打印并换行
$yynums=0; //声明一个统计元音个数的变量，并赋值为0
$j=strlen($aoo); //使用strlen()函数来获取原始字符串的长度
for($i=0;$i<$j;$i++){ //使用for循环来遍历字符串，注：字符串以数组形式来访问，下标是从0开始的，所以i=0
/*
strstr()函数：第一个参数是待查找的字符串，第二个参数是原始字符串
strstr('aeiouAEIOU',$str[$i])这条语句的作用是：将原始字符串中的每个字符与第一个参数中的字符串中的每个字符进行匹配，只要不返回false，就说明匹配到其中一个
则if()语句成立，下面的$yynums++就可以自加一次，然后for()循环继续
注：因为$str[$i]每次只从原始字符串中读取一个字符与第一个参数进行匹配，所以每次循环也只能匹配一次第一个参数中的字符串
*/
 if(strstr('aeiouAEIOU',$aoo[$i])){ 
  $yynums++;
 }
}
echo $yynums;
echo "<hr/>";
//第六题

$add=array(34,45,56,67,78,89);


// print_r($add[3]);
echo "67的键值是";
print_r(array_keys($add,"67")); 

echo "<hr/>";
//第七题

$amm=array(34,45,56,67,78,89);
echo "最大值为".max($amm);
echo "<br/>";
echo "最小值为".min($amm);
echo "<hr/>";
//第八题

$amm=array(34,45,56,67,78,89);
print_r (array_reverse($amm));

echo "<hr/>";
//第九题

$ajj=array(56,89,34,78,45,67);
sort($ajj);//从小到大
$len=count($ajj);
for($p=0;$p<$len;$p++){
echo  $ajj[$p];
echo "<br/>";
}
echo "<hr/>";

//rsort($ajj);//从大到小





















