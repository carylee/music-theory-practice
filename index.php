<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Sasha's Music Theory Practice</title>
    <LINK href="style.css" rel="stylesheet" type="text/css">
  </head>
<body>
<?php
$major_keys = array('C' , 'C#' , 'Db' , 'E' , 'F' , 'F#' , 'Gb' , 'G' , 'Ab' , 'A' , 'Bb' , 'B' , 'Cb');

$minor_keys = array('a', 'bb', 'b', 'c', 'c#', 'd', 'd#', 'eb', 'e', 'f', 'f#', 'g', 'g#');

$major_roman_nums = array('I', 'ii', 'iii', 'IV', 'V', 'vi', 'vii<span class="super">o</span>', 'V/V', 'vii<span class="super">o</span>/V', 'V/IV', 'vii<span class="super">o</span>/IV', 'V/ii', 'vii<span class="super">o</span>/ii', 'V/vi', 'vii<span class="super">o</span>/vi', 'V/iii', 'vii<span class="super">o</span>/iii');

$major_roman_7ths = array('ii', 'V', 'vii<span class="super">o</span>');

$chromatics = array('Fr<span class="super">+6</span>', 'Ger<span class="super">+6</span>', 'It<span class="super">+6</span>', 'N<span class="super">6</span>');

$minor_roman_nums = array('i', 'ii<span class="super">o</span>', 'III', 'iv', 'V', 'VI', 'vii<span class="super">o</span>', 'V/V', 'vii<span class="super">o</span>/V', 'V/iv', 'vii<span class="super">o</span>/iv', 'V/ii', 'vii<span class="super">o</span>/ii', 'V/VI', 'vii<span class="super">o</span>/VI', 'V/III', 'vii<span class="super">o</span>/III');

$minor_roman_7ths = array('iio', 'V', 'vii<span class="super">o</span>');

$inversions_w_7ths = array('7', '6/5', '4/3', '4/2');

$inversions_wo_7ths = array(' ', '6', '6/4');

for ($i = 0; $i < 60; $i++) {

$random = rand(1,11);
//echo $random;

if ($random == 1 || $random == 2 || $random == 3) {
$chord[$i] = combine($major_keys, $major_roman_nums, $inversions_wo_7ths);
}

if ($random == 4 || $random == 5 || $random == 6) {
$chord[$i] = combine($minor_keys, $minor_roman_nums, $inversions_wo_7ths);
}

if ($random == 7 || $random == 8) {
$chord[$i] = combine($major_keys, $major_roman_7ths, $inversions_w_7ths);
}

if ($random == 9 || $random == 10) {
$chord[$i] = combine($minor_keys, $minor_roman_7ths, $inversions_w_7ths);
}

if ($random == 11) {
$chord[$i] = "<i>Key:</i> " . "<b>" . $major_keys[array_rand($major_keys)] . "</b><br/>" . $chromatics[array_rand($chromatics)]."<br/>";
}

/*echo $chord[$i];
echo "<br/>";*/
}
?>
<table>
<?php
$runs = 0;
$columns = 6;
$elements = sizeof($chord);
$rows = ceil($elements / $columns);
for ($j = 0; $j < $rows; $j++) {
	echo "<tr>";
	for ($foo = 0; $foo < $columns; $foo++) {
		echo "<td>";
		echo $chord[$runs];
		echo "</td>\r";
		$runs++;
	}
	echo "</tr>\r";
}

function combine($key_array, $roman_array, $inversion_array)
	{
	    $combined = "<i>Key:</i> " . "<b>" . $key_array[array_rand($key_array)] . "</b><br/>" . $roman_array[array_rand($roman_array)] . " " .$inversion_array[array_rand($inversion_array)]."<br/>";
	    
	    return $combined;
	}
	
?>


</body>
</html>
