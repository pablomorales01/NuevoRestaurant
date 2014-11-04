<?php
/* @var $this ProductoElaboradoController */
/* @var $model ProductoElaborado */

$this->breadcrumbs=array(
	'Producto Elaborados'=>array('index'),
	$model->PVENTA_ID=>array('view','id'=>$model->PVENTA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductoElaborado', 'url'=>array('index')),
	array('label'=>'Create ProductoElaborado', 'url'=>array('create')),
	array('label'=>'View ProductoElaborado', 'url'=>array('view', 'id'=>$model->PVENTA_ID)),
	array('label'=>'Manage ProductoElaborado', 'url'=>array('admin')),
);
?>

<h1>Update ProductoElaborado <?php echo $model->PVENTA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>