<?PHP
    class jaime extends Lannister{
        function sleepWith($sexPartner){
            if (get_class($sexPartner) === 'Tyrion')
                print("Not even if I'm drunk !".PHP_EOL);
            else if (get_class($sexPartner) === 'Cersei')
                print('With pleasure, but only in a tower in Winterfell, then.'.PHP_EOL);
            else
                print("Let's do this.".PHP_EOL);
        }
    }
?>