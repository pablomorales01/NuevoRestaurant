<?php
/* @var $this ProductoElaboradoController */
/* @var $model ProductoElaborado */

$this->breadcrumbs=array(
	'Producto Elaborados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductoElaborado', 'url'=>array('index')),
	array('label'=>'Manage ProductoElaborado', 'url'=>array('admin')),
);
?>

<h1>Crear producto elaborado</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'mp'=>$mp, 'pv'=>$pv)); ?>