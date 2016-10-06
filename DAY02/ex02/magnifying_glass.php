#!/usr/bin/php
<?PHP
function ft_strtoupper($m)
{
	$t = strstr($m, ">", 1);
	$t = strtoupper($t);
	$t = $t . strstr($m, ">");
	return($t);
}

function ft_strtoupper_r($m)
{
	$t = strstr($m, ">");
	$t = strtoupper($t);
	$e = strstr($m, ">", 1) . $t;
	return ($e);
}

if ($argc > 1)
{
	$str = file_get_contents($argv[1]);
	$tab = explode('title', $str);
	$num = count($tab) - 1;
	$i = 0;
	while ($i <= $num) {
		if (preg_match("/\s{0}=/", $tab[$i]) >= 1)
			$tab[$i] = ft_strtoupper($tab[$i]);
		$i++;
	}
	$str = implode('title', $tab);
	$tab = explode('<', $str);
	$num = count($tab);
	$i = 0;
	while ($i != $num) {
		if (strstr($tab[$i], "href") != FALSE)
			$tab[$i] = ft_strtoupper_r($tab[$i]);
		$i++;
	}
	$str = implode('<', $tab);
	echo $str;
}
?>
