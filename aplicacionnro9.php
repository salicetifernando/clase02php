<?php

$lapicera  = array("color" => "" ,"marca" => "", "trazo" => "", "precio" => "" );

foreach ($lapicera as $dato ) 
{
	
	$dato["color"] = "rojo";
	$dato["marca"] = "faber";
	$dato["trazo"] = "grueso";
	$dato["precio"] = "salado";
	
	//$dato["color"] = "rojo";
	
}
foreach ($lapicera as $dato)
 {
 	echo $dato. "<br>";
}


?>