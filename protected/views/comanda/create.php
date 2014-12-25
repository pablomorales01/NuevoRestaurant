<?php
/* @var $this ComandaController */
/* @var $model Comanda */

?>

<h1 align="center">Crear Comanda</h1>

<?php 
$this->renderPartial('_form', array('model'=>$model, 'mesa'=>$mesa, 'menu'=>$menu, 'estado'=>$estado)); 
//envio mesa, porque si no existen mesas no puedo crear una comanda?> 