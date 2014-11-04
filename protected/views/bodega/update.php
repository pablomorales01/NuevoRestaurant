<?php
/* @var $this BodegaController */
/* @var $model Bodega */

$this->breadcrumbs=array(
	'Bodegas'=>array('index'),
	$model->BODEGA_ID=>array('view','id'=>$model->BODEGA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bodega', 'url'=>array('index')),
	array('label'=>'Create Bodega', 'url'=>array('create')),
	array('label'=>'View Bodega', 'url'=>array('view', 'id'=>$model->BODEGA_ID)),
	array('label'=>'Manage Bodega', 'url'=>array('admin')),
);
?>

<h1>Update Bodega <?php echo $model->BODEGA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>