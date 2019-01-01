<?php
$a = $_POST['a'] ;
$b = $_POST['b'] ;
$c = $_POST['c'] ;

		$D=(($b**2)-(4*($a*$c)));

if ($a!=0 && $D>0) {
				$x1= ((-$b+sqrt($D))/(2*$a));
				$x2= ((-$b-sqrt($D))/(2*$a));
	echo '<p>' . "a=" .  $a .'</p>';
	echo '<p>' . "b=" . $b .'</p>';
	echo '<p>' . "c=" . $c .'</p>';
		echo '<p>' . "D=" . $D .  '</p>';
				echo '<p>' . "x1= " . " " . $x1 .'</p>';
				echo '<p>' . "x2= " . " " . $x2 . '</p>';
}
elseif ($a!=0 && $D==0) {
				$X1=((-$b)/(2*$a));
				echo '<p>' . "a=" .  $a .'</p>';
	echo '<p>' . "b=" . $b .'</p>';
	echo '<p>' . "c=" . $c .'</p>';
		echo '<p>' . "D=" . $D .  '</p>';
				echo '<p>' . "x1=" . "x2= " . $X1 .'</p>';
}
elseif ($a!=0 && $D<<0) {
	echo '<p>' . "a=" .  $a .'</p>';
	echo '<p>' . "b=" . $b .'</p>';
	echo '<p>' . "c=" . $c .'</p>';
		echo '<p>' . "D=  " . $D .  '</p>';
	echo "Задачата няма реални решения, защото дискриминантата е по-малка от 0!";
}
?>
<html>
<ul> <a href="forma-kvadratno.php"> Начало <a/> </ul>
</html>