<?php
require_once ('animal.php');
class perro extends animal{
       private $tamaño;

       public function __construct($id,$nombre,$tamaño)
       {
           parent::__construct($id,$nombre);
           $this->tamaño=$tamaño;
       }
       public function gettamaño(){
           return $this->tamaño;
       }
 }
