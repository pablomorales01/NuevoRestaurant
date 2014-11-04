<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */

$this->breadcrumbs=array(
	'Registro Compras Pfs'=>array('index'),
	$model->RPF_ID,
);

$this->menu=array(
	array('label'=>'List RegistroComprasPf', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasPf', 'url'=>array('create')),
	array('label'=>'Update RegistroComprasPf', 'url'=>array('update', 'id'=>$model->RPF_ID)),
	array('label'=>'Delete RegistroComprasPf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RPF_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RegistroComprasPf', 'url'=>array('admin')),
);
?>

<h1>View RegistroComprasPf #<?php echo $model->RPF_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RPF_ID',
		'PVENTA_ID',
		'PROV_ID',
		'RVTASFECHA',
		'RPFPRECIO_COMPRA',
		'RPFPCANTIDAD',
	),
)); ?>
