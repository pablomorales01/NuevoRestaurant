<?php
/* @var $this DetalleComandaController */
/* @var $model DetalleComanda */

$this->breadcrumbs=array(
	'Detalle Comandas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleComanda', 'url'=>array('index')),
	array('label'=>'Manage DetalleComanda', 'url'=>array('admin')),
);
?>

<h1>Create DetalleComanda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>