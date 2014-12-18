<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

$this->breadcrumbs=array(
	'Producto Finals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductoFinal', 'url'=>array('index')),
	array('label'=>'Manage ProductoFinal', 'url'=>array('admin')),
);
?>

<h1>Create ProductoFinal</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'bodega'=>$bodega)); ?>