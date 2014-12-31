<?php
/* @var $this ProductoVentaController */
/* @var $model ProductoVenta */

$this->breadcrumbs=array(
	'Producto Ventas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductoVenta', 'url'=>array('index')),
	array('label'=>'Create ProductoVenta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#producto-venta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Producto Ventas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'producto-venta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PVENTA_ID',
		//'MENU_ID',
		'PVENTANOMBRE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
