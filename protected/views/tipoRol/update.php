<?php
/* @var $this TipoRolController */
/* @var $model TipoRol */

$this->breadcrumbs=array(
	'Tipo Rols'=>array('index'),
	$model->ROL_ID=>array('view','id'=>$model->ROL_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoRol', 'url'=>array('index')),
	array('label'=>'Create TipoRol', 'url'=>array('create')),
	array('label'=>'View TipoRol', 'url'=>array('view', 'id'=>$model->ROL_ID)),
	array('label'=>'Manage TipoRol', 'url'=>array('admin')),
);
?>

<h1>Update TipoRol <?php echo $model->ROL_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>