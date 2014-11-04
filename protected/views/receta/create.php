<?php
/* @var $this RecetaController */
/* @var $model Receta */

$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Receta', 'url'=>array('index')),
	array('label'=>'Manage Receta', 'url'=>array('admin')),
);
?>

<h1>Create Receta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>