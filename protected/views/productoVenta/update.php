<?php
/* @var $this ProductoVentaController */
/* @var $model ProductoVenta */

$this->breadcrumbs=array(
	'Producto Ventas'=>array('index'),
	$model->PVENTA_ID=>array('view','id'=>$model->PVENTA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductoVenta', 'url'=>array('index')),
	array('label'=>'Create ProductoVenta', 'url'=>array('create')),
	array('label'=>'View ProductoVenta', 'url'=>array('view', 'id'=>$model->PVENTA_ID)),
	array('label'=>'Manage ProductoVenta', 'url'=>array('admin')),
);
?>

<h1>Update ProductoVenta <?php echo $model->PVENTA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>