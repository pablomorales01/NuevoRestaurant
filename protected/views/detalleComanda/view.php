<?php
/* @var $this DetalleComandaController */
/* @var $model DetalleComanda */

$this->breadcrumbs=array(
	'Detalle Comandas'=>array('index'),
	$model->DETALLE_ID,
);

$this->menu=array(
	array('label'=>'List DetalleComanda', 'url'=>array('index')),
	array('label'=>'Create DetalleComanda', 'url'=>array('create')),
	array('label'=>'Update DetalleComanda', 'url'=>array('update', 'id'=>$model->DETALLE_ID)),
	array('label'=>'Delete DetalleComanda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DETALLE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleComanda', 'url'=>array('admin')),
);
?>

<h1>View DetalleComanda #<?php echo $model->DETALLE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DETALLE_ID',
		'COM_ID',
		'PVENTA_ID',
		'DETALLEESTADO',
	),
)); ?>
