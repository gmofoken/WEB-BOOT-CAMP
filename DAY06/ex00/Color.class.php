<?PHP
class Color{
    public $red = 0;
    public $green = 0;
    public $blue = 0;
    public static $verbose = FALSE;

    function __construct($kwargs){
        if (array_key_exists('rgb', $kwargs)){
            $num = intval($kwargs['rgb']);
            $this->green = $num >> 8 & 0xff;
            $this->red = ($num >> 16) & 0xff;
            $this->blue = $num & 0xff;
        }
        else{
            if (array_key_exists('red', $kwargs))
                $this->red = $kwargs['red'];
            if (array_key_exists('green', $kwargs))
                $this->green = $kwargs['green'];
            if (array_key_exists('blue', $kwargs))
                $this->blue = $kwargs['blue'];
        }
        if (self::$verbose)
            print($this->__toString()." "."Constructed.".PHP_EOL);
        return ;
    }

    public static function doc(){
        return file_get_contents("Color.doc.txt").PHP_EOL;
    }

    public function __toString(){
        return ('Color( Red:'.str_pad($this->red, 6, ' ', STR_PAD_LEFT).', Green:'.str_pad($this->green, 6, ' ', STR_PAD_LEFT).', Blue:'.str_pad($this->blue, 6, ' ', STR_PAD_LEFT).')');
    }

    function add($color){
        return new Color(array("red" => $this->red + $color->red,
            "green" => $this->green + $color->green,
            "blue" => $this->blue + $color->blue));
    }

    function sub($min){
        return new Color(array("red" => $this->red - $sub->red,
            "green" => $this->green - $sub->green,
            "blue" => $this->blue - $sub->blue));
    }

    function mult($color){
        return new Color(array("red" => $this->red + $color,
            "green" => $this->green + $color,
            "blue" => $this->blue + $color));
    }
    
    function __destruct()
    {
        if (self::$verbose)
            print($this->__toString()." "."Destructed.".PHP_EOL);
        return ;
    }
}
?>
