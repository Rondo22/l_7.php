<b>PHP</b><br>

<?php
/*
$name = 'Evgen'; //                  первый вариант
if (false) {
	echo 'Hello ' . $name;}
else {
	echo 'Hello WORLD';
}
echo '<br>';
// $name = 'Evgen'; // второй вариант
if (isset($name)) {
	echo 'Hello ' . $name;}
else {
	echo 'Hello WORLD';
}
*/

// $name = ''; //                   третий вариант
// if (isset($name)) {
// 	if ($name === 'Evgen') {
// 		echo 'Hello Administrator';
// 	} elseif ($name === '') {
// 		echo 'Hello unknown'; // дублирует
// 	} else {
// 		echo 'Hello ' . $name;
// 	}
// } else {
// 	echo 'Hello! You are not authentificate';  // дублирует
// }


/*
// $name = 'Evgen'; //                     четвертый вариант

if (isset($name) and $name === 'Evgen') {
	echo 'Hello Administrator';
} elseif (isset($name) and $name === '') {
	echo 'Hello unknown'; // дублирует
} elseif (isset($name)) {
	echo 'Hello ' . $name;
} else {
	echo 'Hello! You are not authentificate';  // дублирует
}
*/

// isset()
echo date ("H");

?>