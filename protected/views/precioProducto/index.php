<?php
/* @var $this PrecioProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Precio Productos',
);

$this->menu=array(
	array('label'=>'Create PrecioProducto', 'url'=>array('create')),
	array('label'=>'Manage PrecioProducto', 'url'=>array('admin')),
);
?>

<h1>Precio Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
