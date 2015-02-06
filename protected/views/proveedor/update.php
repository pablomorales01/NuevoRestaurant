<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */


$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'View Proveedor', 'url'=>array('view', 'id'=>$model->PROV_ID)),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>Update Proveedor <?php echo $model->PROV_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>