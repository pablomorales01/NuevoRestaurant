<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */


$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1 align="center">Create Proveedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>