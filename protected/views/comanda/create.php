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

<h1>Create Comanda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>