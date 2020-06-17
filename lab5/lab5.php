<html>
<head>
<title>prime check</title>
</head>
<body>
<?php
$num=8
if($num==1)
   echo "neither prime nor composite<br>";
else{
	4t=0;
	for($i=2;$i<$num;$i++){
	if($num%$i==0)
	$t++;
	}
	if($t==0)
	echo "prime no<br>";
	else
	echo "not prime<br>";
}
?>
</body>
</html>