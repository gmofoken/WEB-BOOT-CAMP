#!/usr/bin/php
<?PHP
	date_default_timezone_set('Africa/Johannesburg');
	function format($p)
	{	
		if (count($p) != 5);
		{
			echo "Wrong format\n";
			return ;
		}
	}
	if ($argc != 2)
			return ;
	$month = array("/Janvier/", "/Fevrier/", "/Mars/", "/Avril/", 
		"/Mai/", "/Juin/", "/Juillet/", "/Aout/", 
		"/Septembre/", "/Octobre/", "/Novembre/", "/Decembre/");
	$nb_month = array("1", "2", "3", "4", "5", "6", 
		"7", "8", "9", "10", "11", "12");
	$tab = explode(" ", $argv[1]);
	if (count($tab) != 5)
	{
				echo "Wrong Format\n";
						return ;
	}
	$tab[4] = explode(":", $tab[4]);
	$tab[2] = ucfirst($tab[2]);
	$tab[2] = preg_replace($month, $nb_month, $tab[2]);
	$time = mktime($tab[4][0], $tab[4][1], $tab[4][2], 
		$tab[2], $tab[1], $tab[3]);
	echo $time."\n";
?>
