

<?php 
//第一题 
for($line=1;$line<=4;$line++){
	for($i=1;$i<=14;$i++)
	echo "*";
	echo"<br/><br/>";
	
}
echo "<hr/>";
//第二题
$r=5;
for($i=1;$i<=$r;$i++){
	if($i==1||$i==$r){
		
		echo "******************";
		echo "<br/>";
		
	}else{
		
		echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*";
		echo "<br/>";
	}
}
echo "<hr/>";
//第三题
/*
for($a=0;$a<=3;$a++){
	switch($a){
		case 1:
			echo "&nbsp;&nbsp;&nbsp;&nbsp; *";
			echo "<br/>";
			break;
		case 2:
			echo "&nbsp;&nbsp;&nbsp;***";
			echo "<br/>";
			break;
		case 3:
			echo "&nbsp;&nbsp;*****";
			echo "<br/>";
			break;
	}
	
}
*/
/*
echo "<hr/>";
	$t=3;
	for($line=1;$line<=$t;$line++){
		for($i=$t;$i>=$line;$i--){
		echo "&nbsp;";
		}
			for($y=2;$y<=$line;$y++){
				echo "**";
			}
			echo "*<br/>";
			}
			for($u=2;$u<=$t;$u=($t*2-1)){
				echo "**";
			}
		
	

echo "<hr/>";
*/
function line($a){
		for($i=0;$i<$a;$i++){
			for($b=1;$b<=$a-$i;$b++){
				echo "&nbsp";
			}
			for($c=0;$c<=(2*$i);$c++){
				echo "*";
			}
			echo "<br/>";
		}
		
		for($i=$a-1;$i>=1;$i--){
			for($b=0;$b<=$a-$i;$b++){
				echo "&nbsp";
			}
			for($c=1;$c<2*$i;$c++){
				echo "*";
			}
			echo "<br/>";
		}
		
	}
	line(3);
