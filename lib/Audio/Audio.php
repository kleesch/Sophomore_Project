<?php
namespace Audio;
class Audio
{
    public function __construct($name = null){
        
        if($name !== null){
            $this->name = $name;
        }
        
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    private $name;
}

?>