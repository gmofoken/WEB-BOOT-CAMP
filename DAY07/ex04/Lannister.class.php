<?PHP 
    class Lannister{
        function sleepWith($sexPartner){
            if (get_parent_class($sexPartner) === 'Lannister')
                print("Not even if I'm drunk !".PHP_EOL);
            else
                print("Let's do this.".PHP_EOL);
        }
    }
?>