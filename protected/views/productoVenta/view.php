<?php
/* @var $this ProductoVentaController */
/* @var $model ProductoVenta */

$this->breadcrumbs=array(
	'Producto Ventas'=>array('index'),
	$model->PVENTA_ID,
);

$this->menu=array(
	array('label'=>'List ProductoVenta', 'url'=>array('index')),
	array('label'=>'Create ProductoVenta', 'url'=>array('create')),
	array('label'=>'Update ProductoVenta', 'url'=>array('update', 'id'=>$model->PVENTA_ID)),
	array('label'=>'Delete ProductoVenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PVENTA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductoVenta', 'url'=>array('admin')),
);
?>

<h1>Producto Venta #<?php echo $model->PVENTA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PVENTA_ID',
		//'MENU_ID',
		'PVENTANOMBRE',
	),
)); ?>
