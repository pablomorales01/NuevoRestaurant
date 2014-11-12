<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */

$this->breadcrumbs=array(
	'Materia Primas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MateriaPrima', 'url'=>array('index')),
	array('label'=>'Manage MateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Crear Materia Prima</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'bodega'=>$bodega)); ?>