<?php
/* @var $this MesaController */
/* @var $model Mesa */

$this->breadcrumbs=array(
	'Mesas'=>array('index'),
	$model->MESANUM,
);

$this->menu=array(
	array('label'=>'List Mesa', 'url'=>array('index')),
	array('label'=>'Create Mesa', 'url'=>array('create')),
	array('label'=>'Update Mesa', 'url'=>array('update', 'id'=>$model->MESANUM)),
	array('label'=>'Delete Mesa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MESANUM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mesa', 'url'=>array('admin')),
);
?>

<h1>View Mesa #<?php echo $model->MESANUM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RESTO_ID',
		'MESANUM',
		'MESAPERSONAS',
		'ESTADO',
	),
)); ?>
