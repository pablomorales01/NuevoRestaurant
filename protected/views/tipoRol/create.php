<?php
/* @var $this TipoRolController */
/* @var $model TipoRol */

$this->breadcrumbs=array(
	'Tipo Rols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoRol', 'url'=>array('index')),
	array('label'=>'Manage TipoRol', 'url'=>array('admin')),
);
?>

<h1>Create TipoRol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>