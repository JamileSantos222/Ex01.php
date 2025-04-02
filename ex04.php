<?php 
	$a = 1;
	$b = 2;
	$c = 3;

	if($a >= $b && $a >= $c ){
		echo $a . $b . $c ."<br/>";

	} elseif($b >= $a && $b >= $c){
		echo $b . $a . $c ."<br/>";

	} else { 
		echo $c . $b . $a ."<br/>";
	}
 
?>