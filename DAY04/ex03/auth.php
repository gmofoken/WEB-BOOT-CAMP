<?PHP 
    function auth($login, $passwd)
    {
        $tab = unserialize(file_get_contents("../private/passwd"));
        foreach ($tab as $test)
        {
            $newpw = hash(whirlpool, "FTP".$passwd, FALSE);
            if ($test[login] === $login && $test[passwd] === $newpw)
                return (TRUE);
            else
                return (FALSE);
        }
    }
?>