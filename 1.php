<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>兵吃棋矩阵</title>
</head>

<body>
<?php 
echo "[";
for($n=0;$n<50;$n++){
	echo "[";
	$en=0;
	if($n%10<5){
		$a=$n-5;
		$b=$n-11;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=5){
			echo "[".$a.",".$b."]";
			$en++;
		}
		$a+=1;
		$b+=2;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=0){
			if($en>0) echo ",";
			echo "[".$a.",".$b."]";
			$en++;
		}
		$a=$n+5;
		$b=$n+9;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=5){
			if($en>0) echo ",";
			echo "[".$a.",".$b."]";
			$en++;
		}
		$a+=1;
		$b+=2;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=0){
			if($en>0) echo ",";
			echo "[".$a.",".$b."]";
			$en++;
		}
	}else{
		$a=$n-6;
		$b=$n-11;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=9){
			echo "[".$a.",".$b."]";
			$en++;
		}
		$a+=1;
		$b+=2;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=4){
			if($en>0) echo ",";
			echo "[".$a.",".$b."]";
			$en++;
		}
		$a=$n+4;
		$b=$n+9;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=9){
			if($en>0) echo ",";
			echo "[".$a.",".$b."]";
			$en++;
		}
		$a+=1;
		$b+=2;
		if($a>-1&&$a<50&&$b>-1&&$b<50&&$a%10!=4){
			if($en>0) echo ",";
			echo "[".$a.",".$b."]";
			$en++;
		}
	}
	echo "]";
	if($n!=49){
		echo ",<br>";
	}
	
}
echo "];";
?>
</body>
</html>