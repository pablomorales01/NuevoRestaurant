<?php
/* @var $this RecetaController */
/* @var $model Receta */

$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	$model->RECETA_ID,
);

$this->menu=array(
	array('label'=>'List Receta', 'url'=>array('index')),
	array('label'=>'Create Receta', 'url'=>array('create')),
	array('label'=>'Update Receta', 'url'=>array('update', 'id'=>$model->RECETA_ID)),
	array('label'=>'Delete Receta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RECETA_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receta', 'url'=>array('admin')),
);
?>

<h1>Receta #<?php echo $model->RECETA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RECETA_ID',
		'RECETACANTIDADPRODUCTO',
		'RECETAUNIDADMEDIDA',
		'PVENTA_ID',
		'MP_ID',
	),
)); ?>
