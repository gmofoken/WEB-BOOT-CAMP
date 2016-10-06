<?PHP 
if ($_POST['submit'] == "OK")
{
    $login = $_POST['login'];
    $oldpw = hash(whirlpool, "FTP".$_POST['oldpw'], FALSE);
    $newpw = hash(whirlpool, "FTP".$_POST['newpw'], FALSE);
    $tab = unserialize(file_get_contents("../private/passwd"));
    if ($oldpw === NULL || $newpw === NULL || $login === NULL || $oldpw === $newpw)
        echo "ERROR\n";
    else{
        foreach ($tab as $test){
            $arr = array();
            if ($login === $test['login'] && $oldpw === $test['passwd']){
                $test['passwd'] = $newpw;
                $arr[] = $test;
                file_put_contents("../private/passwd", serialize($arr));
                echo "OK";
                break;
            }
            else{
                $arr[] = $test;
                echo "ERROR";
                break;
            }
        }
    }
}
?>