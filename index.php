<?php 

	function palindromo($p){

		$palabra=trim($p);
		$nueva_palabra="";

		for($i=strlen($palabra)-1;$i>=0;$i--){
		    $nueva_palabra.=substr($palabra,$i,1);
		}

		$estado="La palabra "."'".$palabra."'";
		if(strtolower($palabra)==strtolower($nueva_palabra)){
		    $estado.=" si es palindrome";
		}else{
		    $estado.=" no es palindrome";
		}

		return $estado;
	}

	$p="oso";
	$resultado=palindromo($p);
	echo $resultado;

?>

<?php   

		function distance($x1, $y1, $x2, $y2){
			$data = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
			return $data;
		}

		$x1 = 1;
		$y1 = 4;

		$x2 = 4;
		$y2 = 6;

		$x3 = 6;
		$y3 = 8;

		$d1 = distance($x1, $y1, $x2, $y2);
		$d2 = distance($x1, $y1, $x3, $y3);
		$d3 = distance($x2, $y2, $x3, $y3);

		$prom_dist = ($d1+$d2+$d3) / 3;

		echo $prom_dist;


?>

<?php 

	/*$nombre1 = array(4,5,6,7,8,4,4,5,5,5,5,3); 

	$nombre = implode(', ',$nombre1);    // Creamos cadena a partir del array 
	$nombre2 = array_unique($nombre1); 

	$v_comunes1 = array_diff_assoc($nombre1, $nombre2);  
	$v_comunes2 = array_unique($v_comunes1);    // Eliminamos los elementos repetidos 
	    sort($v_comunes2);    // Orden ascendente en array  
	$repetidos = implode(', ',$v_comunes2);     // Creamos cadena a partir del array
	//$repetidos =min(array($repetidos));
	$repetidos = (int)$repetidos;

	echo " 
	Todos los elementos: <b>$nombre</b> <br />
	Elementos repetidos: <b>$repetidos</b>"; */

?> 