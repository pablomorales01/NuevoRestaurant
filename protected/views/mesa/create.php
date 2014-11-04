<?php
/* @var $this MesaController */
/* @var $model Mesa */

$this->breadcrumbs=array(
	'Mesas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mesa', 'url'=>array('index')),
	array('label'=>'Manage Mesa', 'url'=>array('admin')),
);
?>

<h1>Create Mesa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>