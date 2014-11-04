<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

$this->breadcrumbs=array(
	'Tipo Materia Primas'=>array('index'),
	$model->TMP_ID,
);

$this->menu=array(
	array('label'=>'List TipoMateriaPrima', 'url'=>array('index')),
	array('label'=>'Create TipoMateriaPrima', 'url'=>array('create')),
	array('label'=>'Update TipoMateriaPrima', 'url'=>array('update', 'id'=>$model->TMP_ID)),
	array('label'=>'Delete TipoMateriaPrima', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TMP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoMateriaPrima', 'url'=>array('admin')),
);
?>

<h1>View TipoMateriaPrima #<?php echo $model->TMP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TMP_ID',
		'TMPNOMBRE',
	),
)); ?>
