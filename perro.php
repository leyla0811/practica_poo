<?php
require_once('perro.php');

$perrito=new perro("1","oso",new persona("a1","juan","mendoza"),"5 cm");

echo $perrito->getid();
echo "<br>";
echo $perrito->getnombre();
echo "<br>";
echo $perrito->gettamaño();
echo "<br>";
echo $perrito->getpersona();

