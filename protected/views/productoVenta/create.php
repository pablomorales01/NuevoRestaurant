<?php
/* @var $this ProductoVentaController */
/* @var $model ProductoVenta */

$this->breadcrumbs=array(
	'Producto Ventas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductoVenta', 'url'=>array('index')),
	array('label'=>'Manage ProductoVenta', 'url'=>array('admin')),
);
?>

<h1>Create ProductoVenta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>