<?php
/* @var $this ProductoElaboradoController */
/* @var $model ProductoElaborado */

$this->breadcrumbs=array(
	'Producto Elaborados'=>array('index'),
	$model->PVENTA_ID,
);

$this->menu=array(
	array('label'=>'List ProductoElaborado', 'url'=>array('index')),
	array('label'=>'Create ProductoElaborado', 'url'=>array('create')),
	array('label'=>'Update ProductoElaborado', 'url'=>array('update', 'id'=>$model->PVENTA_ID)),
	array('label'=>'Delete ProductoElaborado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PVENTA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductoElaborado', 'url'=>array('admin')),
);
?>

<h1>View ProductoElaborado #<?php echo $model->PVENTA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PVENTA_ID',
		'PVENTANOMBRE',
		//'MENU_ID',
	),
)); ?>
