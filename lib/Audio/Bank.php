<?php
namespace Audio;
class Bank{
    public function __construct(){}
    
    public function getBank(){
        return $this->collection;
    }
    
    public function addAudio($audio){
        array_push($this->collection, $audio);
    }
    
    public function removeAudio($audio){
        $key = array_search($audio, $this->collection);
        if($key !== false){
            $collection = array_diff_key($this->deck, array($key));
        }
    }
    
    private $collection;
}
?>