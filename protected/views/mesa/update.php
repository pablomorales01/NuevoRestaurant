<?php
/* @var $this MesaController */
/* @var $model Mesa */

$this->breadcrumbs=array(
	'Mesas'=>array('index'),
	$model->MESA_ID=>array('view','id'=>$model->MESA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mesa', 'url'=>array('index')),
	array('label'=>'Create Mesa', 'url'=>array('create')),
	array('label'=>'View Mesa', 'url'=>array('view', 'id'=>$model->MESA_ID)),
	array('label'=>'Manage Mesa', 'url'=>array('admin')),
);
?>

<h1>Update Mesa <?php echo $model->MESA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>