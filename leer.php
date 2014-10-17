<?php
$file = fopen("registro.txt", "r") or exit("Imposible abrir el archivo!"); 		//Abrimos el archivo txt
$linea = ""; 																	//declaro e inicializo en vacio una variable
$concatenado = ""; 																//declaro e inicializo en vacio una variable

#recorro cada linea del archivo y la voy concatenando para conformar un string largo o una cadena completa
while(!feof($file)){
	$concatenado .=fgets($file);
}

fclose($file); 																	//cierro el archivo
$linea = explode("=", $concatenado); 											//separa cada linea del texto en un array utilizando el simbolo "=" como separador de linea

#Prueba del array , Se puede reccorrer el array completo con un for o foreach para comprobar su funcionamiento o con print_r para ver el array armado
#print_r($linea);

#echo $linea[0];
#echo $linea[1];
#echo $linea[2];
#echo $linea[3];

#foreach ($linea as $value) {
#	echo $value."<br>";
#}
?>