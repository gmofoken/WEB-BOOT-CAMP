<?PHP 
class NightsWatch implements IFighter{
    private $_fighters;
    function recruit($fighter){
        if ($fighter instanceof IFighter)
            $this->_fighters[] = $fighter;        
    }
    function fight(){
        foreach($this->_fighters as $fighter)
            $fighter->fight();
    }
}
?>