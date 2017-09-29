<?php
header('content-type:text/html;charset=utf-8');

//return 返回的是一个类型
function table1(){
	$table="<table border='1' cellpadding='0' cellspacing='0'width='80%'>";
		for($i=1;$i<=6;$i++){
			$table.="<tr>";
				for($j=1;$j<=5;$j++){
					$table.="<td>xx</td>";
				}
			$table.="</tr>";
		}
		$table.="</table>";
		return $table;
}
echo table1();
 // **按照需求创建指定的表格
// @param number $rows
// @param number $cols
// @return string 

function table2($rows,$cols){
	$table="<table border='1' cellpadding='0' cellspacing='0'width='80%'>";
		for($i=1;$i<=$rows;$i++){
			$table.="<tr>";
				for($j=1;$j<=$cols;$j++){
					$table.="<td>xx</td>";
				}
			$table.="</tr>";
		}
		$table.="</table>";
		return $table;
}
echo table2(5,10);
echo "<br/>";
echo table2(3,10);
echo "<br/>";
// 创建一个表格，默认是3，5列，表格的默认颜色是红色，默认内容是x
// 可选函数
function table3($rows=3,$cols=5,$bgColor='red',$content='x'){
	$table8="<table border='1' width='80%' bgcolor='{$bgColor}' cellpadding='0'cellspacing='0'>";
		for($i=1;$i=$rows;$i++){
			$table.="<tr>";
			for($j=1;$cols;$j++){
				$table.="<td>{$content}</td>";
			}
			$table.="<tr/>";


		}


	$table.="</table>";
	return $table8;

}

echo table3();
echo "<br/>";
echo table3(10,20);










