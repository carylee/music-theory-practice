<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Sasha's Music Theory Practice</title>
    <LINK href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <?php
  
  $elements = 30;
  
  $root = array('C', 'C#', 'Db', 'D', 'D#', 'Eb', 'E', 'F', 'F#', 'Gb', 'G', 'G#', 'Ab', 'A', 'A#', 'Bb', 'B');
  $quality = array('Major', 'Minor', 'Dominant', 'Diminished', 'Augmented', 'mM7');
  $extensions = array('7th', '9th', '#9', 'b9', '11th', '#11', '13th', '13 + #11');
  $inversions = array('Root', '1st', '2nd', '3rd');
  
  for ($i = 0; $i < $elements; $i++) {
  	$chord[$i] = $root[array_rand($root)] . ' ' . $quality[array_rand($quality)] . ' ' . $extensions[array_rand($extensions)] . ' ' .$inversions[array_rand($inversions)] . '<br/><br/>';
  	
  	echo $chord[$i];
  	}
  