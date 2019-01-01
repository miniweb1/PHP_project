<?php
$a = $_POST['a'] ; //den
$b = $_POST['b'] ; //mesec
$c = $_POST['c'] ; //godina

if ($a<=31 && $b==1) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==1) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}

if ($a<=31 && $b==3) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==3) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=31 && $b==5) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==5) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=31 && $b==7) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==7) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=31 && $b==8) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==8) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=31 && $b==10) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==10) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=31 && $b==12) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=32 && $b==12) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=30 && $b==4) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=31 && $b==4) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=30 && $b==6) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=31 && $b==6) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=30 && $b==9) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=31 && $b==9) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($a<=30 && $b==11) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($a>=31 && $b==11) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}


if ($c%4==0 && $a<=29 && $b==2) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($c%4==0 && $a>=30 && $b==2) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}
if ($c%4===1 && $a<=28 && $b==2) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Valid date";
}
if ($c%4===1 && $a>=29 && $b==2) {
	echo '<p>' . $a . "." . $b . "." . $c . '</p>'  ;
	echo  "Not a valid date";
}

?>
<html>
<ul> <a href="forma-date.php"> Начало <a/> </ul>
</html>