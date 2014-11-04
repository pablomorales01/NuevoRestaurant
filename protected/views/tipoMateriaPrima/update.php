<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

$this->breadcrumbs=array(
	'Tipo Materia Primas'=>array('index'),
	$model->TMP_ID=>array('view','id'=>$model->TMP_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoMateriaPrima', 'url'=>array('index')),
	array('label'=>'Create TipoMateriaPrima', 'url'=>array('create')),
	array('label'=>'View TipoMateriaPrima', 'url'=>array('view', 'id'=>$model->TMP_ID)),
	array('label'=>'Manage TipoMateriaPrima', 'url'=>array('admin')),
);
?>

<h1>Update TipoMateriaPrima <?php echo $model->TMP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>