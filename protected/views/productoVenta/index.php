<?php
/* @var $this ProductoVentaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto Ventas',
);

$this->menu=array(
	array('label'=>'Create ProductoVenta', 'url'=>array('create')),
	array('label'=>'Manage ProductoVenta', 'url'=>array('admin')),
);
?>

<h1>Producto Ventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
