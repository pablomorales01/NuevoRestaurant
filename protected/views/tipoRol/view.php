<?php
/* @var $this TipoRolController */
/* @var $model TipoRol */

$this->breadcrumbs=array(
	'Tipo Rols'=>array('index'),
	$model->ROL_ID,
);

$this->menu=array(
	array('label'=>'List TipoRol', 'url'=>array('index')),
	array('label'=>'Create TipoRol', 'url'=>array('create')),
	array('label'=>'Update TipoRol', 'url'=>array('update', 'id'=>$model->ROL_ID)),
	array('label'=>'Delete TipoRol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ROL_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoRol', 'url'=>array('admin')),
);
?>

<h1>View TipoRol #<?php echo $model->ROL_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ROL_ID',
		'ROLNOMBRE',
	),
)); ?>
