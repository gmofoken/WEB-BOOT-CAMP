<?PHP
if ($_GET['action'] === 'set' && $_GET['value'] !== null && $_GET['name'] !== null)
{
	setcookie($_GET['name'], $_GET['value'], time() + (86400));	
}
else if ($_GET['action'] === 'get' && $_GET['name'] !== null)
{
	$cookie = $_GET['name'];
	if (($_COOKIE[$cookie]) !== null)
	{
		echo $_COOKIE[$cookie];
	}
}
else if ($_GET['action'] === 'del' && $_GET['name'] !== null)
{
	$cookie = $_GET['name'];
	if ($_COOKIE[$cookie] !== null)
		setcookie($cookie, '', time() - 3600);
}
?>
