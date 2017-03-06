<?php

class Nintendo
{
    public $bits;

    public static function create($type, $bits)
    {
        switch($type) {
            case 'nes':
                return new Nes($bits);
            case 'snes':
                return new Snes($bits);
        }
        
        throw new Exception("No Nintendo found with that bits o_O");
    }

    public function getType()
    {
        return get_class($this);
    }
}

class Nes extends Nintendo
{
    public function __construct($bits){
        $this->bits = $bits;
    }
}
class Snes extends Nintendo
{
    public function __construct($bits){
        $this->bits = $bits;
    }
}
