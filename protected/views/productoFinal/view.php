<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

$this->breadcrumbs=array(
	'Producto Finals'=>array('index'),
	$model->PVENTA_ID,
);

$this->menu=array(
	array('label'=>'List ProductoFinal', 'url'=>array('index')),
	array('label'=>'Create ProductoFinal', 'url'=>array('create')),
	array('label'=>'Update ProductoFinal', 'url'=>array('update', 'id'=>$model->PVENTA_ID)),
	array('label'=>'Delete ProductoFinal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PVENTA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductoFinal', 'url'=>array('admin')),
);
?>

<h1>View ProductoFinal #<?php echo $model->PVENTA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PVENTA_ID',
		'PVENTANOMBRE',
		'MENU_ID',
		'BODEGA_ID',
		'PFINALSTOCK',
	),
)); ?>
