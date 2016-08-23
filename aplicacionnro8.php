<?php
$v[1] = 90;
$v[30] = 7;
$v['e'] = 99;
$v["hola"] = "mundo";
$v2  = array(1=> 90,30 => 7,'e'=> 99,"hola" => "mundo");
foreach ($v2 as $dato)
{
	echo $dato."<br>";
	//echo $v[1] ."<br>". $v[30]."<br>". $v['e'] ."<br>". $v["hola"]."<br>";	
}
foreach ($v as $dato ) 
{
	echo $dato . "<br>";
}

?>