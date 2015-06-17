<b>PHP</b><br><br>

<?php
/*
$name = 'Evgen'; //                  первый вариант
if (false) {
	echo 'Hello ' . $name;}
else {
	echo 'Hello WORLD';
}
echo '<br>';
// $name = 'Evgen'; //               второй вариант
if (isset($name)) {
	echo 'Hello ' . $name;}
else {
	echo 'Hello WORLD';
}
// */

// $name = ''; //                         третий вариант
// if (isset($name)) {
// 	if ($name === 'Evgen') {
// 		echo 'Hello Administrator';
// 	} elseif ($name === '') {
// 		echo 'Hello unknown'; // дублирует
// 	} else {
// 		echo 'Hello ' . $name;
// 	}
// }else{
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
// echo date ("H");

$time = date ("H"); 
echo 'Time: ' . $time . 'hr.';
echo '<br>';

$time = 5;

 if (isset($time)) {
	if ($time >= 6 and $time <= 10) {
		echo 'Доброе утро!';
	} elseif ($time >= 11 and $time <= 18) {
		echo 'Добрый день!';
	}elseif ($time >= 19 and $time <= 22) {
		echo 'Добрый вечер!';
	}elseif ($time = 23-24 and $time = 0-5) {
		echo 'Спокойной ночи!';
	}
	}else {
		echo 'Error to time!';
	}


// $doc = '5';
// if (isset($doc)) {
// 	if ($doc = range(1, 6)) {
// 		echo 'Hello Administrator';
// 	}
// }





?>