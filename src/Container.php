<?php
class Container{
    protected $def;
    protected $res = [];

    public function __construct($def){
        $this->def = $def;
    }
    public function get($id){
        if(array_key_exists($id, $this->res)){
            return $this->res[$id];
        }
        if(!array_key_exists($id, $this->def)){
            throw new Exception("ID {$id} was not found");
        }
        $resolved = $this->def[$id]($this);
        $this->res[$id] = $resolved;
        return $resolved;
    }

}