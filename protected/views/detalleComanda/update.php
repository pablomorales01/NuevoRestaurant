<?php
/* @var $this DetalleComandaController */
/* @var $model DetalleComanda */

$this->breadcrumbs=array(
	'Detalle Comandas'=>array('index'),
	$model->DETALLE_ID=>array('view','id'=>$model->DETALLE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleComanda', 'url'=>array('index')),
	array('label'=>'Create DetalleComanda', 'url'=>array('create')),
	array('label'=>'View DetalleComanda', 'url'=>array('view', 'id'=>$model->DETALLE_ID)),
	array('label'=>'Manage DetalleComanda', 'url'=>array('admin')),
);
?>

<h1>Update DetalleComanda <?php echo $model->DETALLE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>