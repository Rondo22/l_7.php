<?php

$langs = array(
	'PHP',
 	'Python',
  	'Ruby',
  	'JavaScript',
);


// foreach ($langs as $langs) {
// 	echo $langs .'<br>';
// }


// print_r($langs);  // Выводит на просмотр в списке масив
// var_dump($langs)// Выводит на просмотр в списке масив + информацию о данных которые находятся в масиве


// for ( $i = 0; $i < 3; $i ++) { // цикл 
// echo $langs[0];
// }


// $count = count($langs);
// for ( $i = 0; $i < $count; $i = $i + 1) { // цикл 
// echo $langs[$i] .'<br>';
// }
// echo $i;
?>


<ul>
	<?php foreach ($langs as $langs){?>
		<li><?php echo $langs ?></li>
	<?php } ?>
</ul>