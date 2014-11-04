<?php
/* @var $this ComandaController */
/* @var $model Comanda */

$this->breadcrumbs=array(
	'Comandas'=>array('index'),
	$model->COM_ID,
);

$this->menu=array(
	array('label'=>'List Comanda', 'url'=>array('index')),
	array('label'=>'Create Comanda', 'url'=>array('create')),
	array('label'=>'Update Comanda', 'url'=>array('update', 'id'=>$model->COM_ID)),
	array('label'=>'Delete Comanda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COM_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comanda', 'url'=>array('admin')),
);
?>

<h1>View Comanda #<?php echo $model->COM_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COM_ID',
		'VENTA_ID',
		'MENU_ID',
		'MESA_ID',
		'USU_ID',
		'USU_USU_ID',
		'COMFECHA',
	),
)); ?>
