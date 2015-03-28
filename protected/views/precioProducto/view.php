<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

$this->breadcrumbs=array(
	'Precio Productos'=>array('index'),
	$model->PP_ID,
);

$this->menu=array(
	array('label'=>'List PrecioProducto', 'url'=>array('index')),
	array('label'=>'Create PrecioProducto', 'url'=>array('create')),
	array('label'=>'Update PrecioProducto', 'url'=>array('update', 'id'=>$model->PP_ID)),
	array('label'=>'Delete PrecioProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PrecioProducto', 'url'=>array('admin')),
);
?>

<h1>View PrecioProducto #<?php echo $model->PP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MENU_ID',
		'PVENTA_ID',
		'PP_ID',
	),
)); ?>
