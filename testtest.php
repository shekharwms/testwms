<?php


$input = 3;

$input1 = 3-1;
$input2 = $input-2;
$cars = array(0, 1);
$cars1 = array_reverse($cars);

for($i=1; $i<=$input1; $i++)
{
	if($i==1)
	{
	$cars = $cars;
	$cars1 = array_reverse($cars);
	}
	else
	{
		$cars = $test1;
	$cars1 = array_reverse($test1);
	}
	foreach ($cars as &$value) {
		$value = '0'.$value;
	}
	unset($value);

	foreach ($cars1 as &$value) {
		$value = '1'.$value;
	}
	unset($value);

	$test1 = array_merge($cars,$cars1);

	//print_r($test1);
	
	//$output = array_slice($test1, $input2);
	$output = array_slice($test1, -3,3, true);

	
}
	print_r($output);
?>