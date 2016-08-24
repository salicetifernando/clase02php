<?php
$num = 1;
$res = 0;
$flag = "no";
while ($flag == "no") {
	$res++;
	echo $res."<br>";
	if ($res == 999) {
		$flag = "si";
	}

}
echo "se sumaron la cantidad de $res numeros";
//echo "$res";
/*$num = 0 ;
if ( $num == 1)
	echo "algo";
else
	echo "otra cosa";
*/
?>