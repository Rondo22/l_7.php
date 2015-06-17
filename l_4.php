<?php
// $langs = array(
// 	5=>'PHP',
//  	6=>'Python',
//   	10=>'Ruby',
//   	37=>'JavaScript',
// );

// $Length = count($langs);

// 	// for ( $i = 0; $i < $Length; $i ++) { // цикл 
//  //    	echo $langs[$i] . '<br>';

// 		// var_dump($langs);
// 		print_r($langs);





// 2)
$langs = array(
	'text'=>'PHP',
 	'text1'=>'Python',
  	'text2'=>'Ruby',
  	'text3'=>'JavaScript',
);

// foreach ($langs as $key => $langs) {
// 	echo $key   . ' > ';
// 	echo $langs .'<br>';
// }




// 3)
$home = array(
	'text'=>'PHP',
 	'text1'=>'Python',
  	'text2'=>'Ruby',
  	'text3'=>'JavaScript',
);
$contacts = array(
	'text'=>'Contacts',
 	'text1'=>'Contacts.php',
  	'text2'=>'_blank',
  	'text3'=>'Contacts page',
);

$menu = array(
	$home,	
	$contacts,
	);

foreach ($menu as $link) {
	// var_dump($link);
	echo '<a href=" '. $link['text1'] .'">' . $link['text'] . '</a>';
}




?>
