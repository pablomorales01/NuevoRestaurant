<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

$this->breadcrumbs=array(
	'Precio Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PrecioProducto', 'url'=>array('index')),
	array('label'=>'Manage PrecioProducto', 'url'=>array('admin')),
);
?>

<h1>Create PrecioProducto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>