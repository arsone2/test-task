<?php

$time_start = microtime(true);

for ($i = 6 ; $i <= 500000 ; $i++)
{
$numbers = array();
$numbers_2 = array();
$numbers_3 = array();
$numbers_4 = array();
$numbers_5 = array();
$numbers_6 = array();

# convert to string
$num_str = "$i";

# put all digits to array
for($j = 0 ; $j < strlen($num_str); $j++){
	$numbers[] = $num_str[$j];
	}

# 2

$i2 = $i * 2;
$i2_str = "$i2";

for($j = 0 ; $j < strlen($i2_str); $j++){
	$numbers_2[] = $i2_str[$j];
	}

# 3

$i3 = $i * 3;
$i3_str = "$i3";

for($j = 0 ; $j < strlen($i3_str); $j++){
	$numbers_3[] = $i3_str[$j];
	}

# 4

$i4 = $i * 4;
$i4_str = "$i4";

for($j = 0 ; $j < strlen($i4_str); $j++){
	$numbers_4[] = $i4_str[$j];
	}

# 5

$i5 = $i * 5;
$i5_str = "$i5";

for($j = 0 ; $j < strlen($i5_str); $j++){
	$numbers_5[] = $i5_str[$j];
	}

# 6

$i6 = $i * 6;
$i6_str = "$i6";

for($j = 0 ; $j < strlen($i6_str); $j++){
	$numbers_6[] = $i6_str[$j];
	}

sort($numbers);
sort($numbers_2);
sort($numbers_3);
sort($numbers_4);
sort($numbers_5);
sort($numbers_6);

if($numbers == $numbers_2 && $numbers == $numbers_3 && $numbers == $numbers_4 && $numbers == $numbers_5 && $numbers == $numbers_6){
	echo 'FOUND NUMBER = ' . $i . '<br>'
	. ' multiple 2 = ' . $i2_str . '<br>'
	. ' multiple 3 = ' . $i3_str . '<br>'
	. ' multiple 4 = ' . $i4_str . '<br>'
	. ' multiple 5 = ' . $i5_str . '<br>'
	. ' multiple 6 = ' . $i6_str . '<br>';
	}
}

echo 'Total execution time: ' . round(microtime(true) - $time_start, 1) . ' seconds';
?>