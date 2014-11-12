<?php
/* @var $this ComandaController */
/* @var $model Comanda */

$this->breadcrumbs=array(
	'Comandas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comanda', 'url'=>array('index')),
	array('label'=>'Manage Comanda', 'url'=>array('admin')),
);
?>

<h1>Crear Comanda</h1>

<?php 
$this->renderPartial('_form', array('model'=>$model, 'mesa'=>$mesa, 'menu'=>$menu, 'estado'=>$estado)); 
//envio mesa, porque si no existen mesas no puedo crear una comanda?> 