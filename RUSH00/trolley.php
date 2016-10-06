<?PHP
session_start();
if ($_POST['submit'] == "OK"){
	file_put_contents("cart/selected", "");

	$_SESSION['TOTAL'] = 0;
	function cost($val, $qnt){
		$price = $val * $qnt;
		return ($price);
	}

	function prices($selected){
		$price = 0;
		if ($selected == "Guitar")
			$price = 3290;
		else if ($selected == "Violin")
			$price = 950;
		else if ($selected == "Triangle")
			$price = 790;
		else if ($selected == "Drumsticks")
			$price = 850;
		else if ($selected == "Mic")
			$price = 5390;
		else if ($selected == "Headphones")
			$price = 2090;
		else if ($selected == "Tambourine")
			$price = 550;
		else if ($selected == "Cowbell")
			$price = 329;
		else if ($selected == "Keyboard")
			$price = 1990;
		else if ($selected == "Soprano")
			$price = 5790;
		else if ($selected == "Cello")
			$price = 750;
		else if ($selected == "Harmonica")
			$price = 720;
		return ($price);
	}

	function lst($selected){
		$cost = prices($selected);
		$ITEM_T = cost($cost ,$_POST[$selected]);
		$_SESSION[$selected] = $selected." * ".$_POST[$selected]."  =  ".$ITEM_T; 
		return ($ITEM_T);
	}

	if (!empty($_POST['instrument'])){
		foreach($_POST['instrument'] as $selected)
			$_SESSION['TOTAL'] += lst($selected);
	}
	header('Location: Basket.php');
}
else if($_POST['submit'] == "CHECKOUT"){
	//Validate here
	session_destroy();
	header('Location: index.php');
}
?>
