<?php
$a = $_POST['a'] ;
$b = $_POST['b'] ;
$c = $_POST['c'] ;

if ($b>$c && $c>$a && $b>$a) {
	echo $a . " / " . $c . " / " . $b;
}
elseif ($c>$a && $a>$b && $c>$b) {
	echo $b . " / " . $a . " / " . $c;
}
elseif ($a>$b && $b>$c && $a>$c ) {
	echo $c . " / " . $b . " / ". $a;
}
elseif ($a>$c && $c>$b && $a>$b ) {
	echo $b . " / " . $c . " / ". $a;
}
elseif ($c>$b && $b>$a && $c>$a ) {
	echo $a . " / " . $b . " / ". $c;
}
elseif ($b>$c && $b>$a && $a>$c ) {
	echo $c . " / " . $a . " / ". $b;
}
elseif ($a>$b && $b=$c ) {
	echo $b . " / " . $c . " / ". $a;
}
elseif ($b>$a && $a=$c ) {
	echo $a . " / " . $c . " / ". $b;
}
elseif ($c>$b && $a=$b ) {
	echo $a . " / " . $b . " / ". $c;
}

?>
<html>
<ul> <a href="forma-narastvane.php"> Начало <a/> </ul>
</html>