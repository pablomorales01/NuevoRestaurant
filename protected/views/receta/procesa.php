<?php
// recuperamos los elementos
$elementos = $_POST['lstBox2'];

echo "<p><b>Elementos Seleccionados</b></p>";
// obtener cada elemento seleccionado
for($i = 0; $i < sizeof($elementos);$i++){
	echo $elementos[$i]."<br>";
}
?>