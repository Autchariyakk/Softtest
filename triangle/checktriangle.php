<!DOCTYPE html>
<html>
<head>
<title>chektriangle</title>
<link href="demo.css" media="all" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Result is </h1>
<table id="result">
<td>

<?PHP
$side_A = $_POST['sideA'];
$side_B = $_POST['sideB'];
$side_C = $_POST['sideC'];
$match = 0;
if ($side_A == $side_B){
$match = $match+1;
}
if ($side_A == $side_C){
$match = $match+2;
}
if ($side_B == $side_C){
$match = $match+3;
}
if ($match==0){
	if(($side_A+$side_B)<=$side_C){
	echo 'Not a triangle';
	}
	elseif (($side_B+$side_C)<=$side_A){
	echo 'Not a triangle';
	}
	elseif (($side_A+$side_C)<=$side_B){
	echo 'Not a triangle';
	}
	else {
	echo 'Scalene';
	}
}
elseif ($match==1) {
	if(($side_A+$side_C)<=$side_B){
	echo 'Not a triangle';
	}
	else {
	echo 'Isosceles';
	}
}
elseif ($match==2) {
	if(($side_A+$side_C)<=$side_B){
	echo 'Not a triangle';
	}
	else {
	echo 'Isosceles';
	}
	}
elseif ($match==3) {
	if(($side_B+$side_C)<=$side_A){
	echo 'Not a triangle';
	}
	else {
	echo 'Isosceles';
	}
}
else {
echo 'Equilateral';
}
?>

</td>
</body>
</html>