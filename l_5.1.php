<?php
// 1)  самостоятельно под себя пишется функции, которые надо по необходимости
// function witam($name = 'Guest', $surname = '')
// {
// 	echo 'Hello ' . $surname .' '. $name . '!!!';
// }

// witam('Victor');
// witam();
// witam('Jon', 'Rambo');

// 2)  самостоятельно под себя пишется функции, которые надо по необходимости
// function witam($name, $surname = '')
// {
// 	return 'Hello ' . $surname .' '. $name . '!!!';
// }

// witam('Victor');
// witam('Jon', 'Rambo');

// $witam = witam('Jon', 'Rambo');
// echo $witam;


// 3)  самостоятельно под себя пишется функции, которые надо по необходимости
// function add($a, $b)
// {
// 	return $a + $b;
// }
// echo add(3*2,10/2);


// 4)  самостоятельно под себя пишется функции, которые надо по необходимости
function add($a, $b)
{
	$c = $a + $b;
	return $c;
	// ...
}
echo add(3*2,10/2);

?>