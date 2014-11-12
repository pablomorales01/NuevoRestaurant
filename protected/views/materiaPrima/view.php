<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */

$this->breadcrumbs=array(
	'Materia Primas'=>array('index'),
	$model->MP_ID,
);
$this->menu=array(
	array('label'=>'List MateriaPrima', 'url'=>array('index')),
	array('label'=>'Create MateriaPrima', 'url'=>array('create')),
	array('label'=>'Update MateriaPrima', 'url'=>array('update', 'id'=>$model->MP_ID)),
	array('label'=>'Delete MateriaPrima', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Materia Prima #<?php echo $model->MP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MP_ID',
		'BODEGA_ID',
		//'TMP_ID',
		'MPNOMBRE',
		'MPUNIDAD_MEDIDA',
		'MPSTOCK',
	),
)); ?>
