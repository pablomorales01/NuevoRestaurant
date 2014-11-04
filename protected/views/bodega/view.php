<?php
/* @var $this BodegaController */
/* @var $model Bodega */

$this->breadcrumbs=array(
	'Bodegas'=>array('index'),
	$model->BODEGA_ID,
);

$this->menu=array(
	array('label'=>'List Bodega', 'url'=>array('index')),
	array('label'=>'Create Bodega', 'url'=>array('create')),
	array('label'=>'Update Bodega', 'url'=>array('update', 'id'=>$model->BODEGA_ID)),
	array('label'=>'Delete Bodega', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BODEGA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bodega', 'url'=>array('admin')),
);
?>

<h1>View Bodega #<?php echo $model->BODEGA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BODEGA_ID',
		'BODEGANOMBRE',
	),
)); ?>
