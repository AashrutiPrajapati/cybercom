<?php
	///////////////////
	//arrays in php
	$fruit = array('Apple', 'Mango', 'Orange' );
	echo $fruit[2].'<br>';
	print_r($fruit);
	$fruit[3] = 'Pinapple';
	print_r($fruit);

	$food = array('pasta'=>300 ,'pizza'=>100,'salad'=>150 );
	echo '<br>'.$food['pasta'];
	print_r($food);


	//////////////////////////
	//multi-dimensional arrays
	$foods = array('Healthy'=>array('salad', 'vegetables'), 
		'Unhealthy'=>array('pizza', 'ice-cream'));
	echo '<br>'.$foods['Healthy'][0];
	echo "<br>".$foods['Unhealthy'][1];

	/////////////////////////
	//for each statements
	foreach ($foods as $element => $inner_array) {
		echo nl2br("\n<strong>".$element.'</strong>');
		foreach ($inner_array as $item) {
			echo '<br>'.$item;
		}
	}
?>