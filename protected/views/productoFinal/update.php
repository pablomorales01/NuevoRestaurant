<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

$this->breadcrumbs=array(
	'Producto Finals'=>array('index'),
	$model->PVENTA_ID=>array('view','id'=>$model->PVENTA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductoFinal', 'url'=>array('index')),
	array('label'=>'Create ProductoFinal', 'url'=>array('create')),
	array('label'=>'View ProductoFinal', 'url'=>array('view', 'id'=>$model->PVENTA_ID)),
	array('label'=>'Manage ProductoFinal', 'url'=>array('admin')),
);
?>

<h1>Update ProductoFinal <?php echo $model->PVENTA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>