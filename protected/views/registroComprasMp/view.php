<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */

$this->breadcrumbs=array(
	'Registro Compras Mps'=>array('index'),
	$model->RCMP_ID,
);

$this->menu=array(
	array('label'=>'List RegistroComprasMp', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasMp', 'url'=>array('create')),
	array('label'=>'Update RegistroComprasMp', 'url'=>array('update', 'id'=>$model->RCMP_ID)),
	array('label'=>'Delete RegistroComprasMp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RCMP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RegistroComprasMp', 'url'=>array('admin')),
);
?>

<h1>View RegistroComprasMp #<?php echo $model->RCMP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RCMP_ID',
		'PROV_ID',
		'MP_ID',
		'RCMPPRECIO_COMPRA',
		'RCMPCANTIDAD',
		'RCMPFECHA',
	),
)); ?>
