<?php
class animal{
    private $id;
    private $nombre;

    public function __construct($id,$nombre){
       $this->id=$id;
       $this->nombre=$nombre

    }
    public function getid(){
        return $this->id;
    }

}
$perro1= new animal("1","oso");

