<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

$this->breadcrumbs=array(
	'Precio Productos'=>array('index'),
	$model->PP_ID=>array('view','id'=>$model->PP_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PrecioProducto', 'url'=>array('index')),
	array('label'=>'Create PrecioProducto', 'url'=>array('create')),
	array('label'=>'View PrecioProducto', 'url'=>array('view', 'id'=>$model->PP_ID)),
	array('label'=>'Manage PrecioProducto', 'url'=>array('admin')),
);
?>

<h1>Update PrecioProducto <?php echo $model->PP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>