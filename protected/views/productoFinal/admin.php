<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

$this->breadcrumbs=array(
	'Producto Final'=>array('index'),
	'Manage',
);
?>

<h1>Administrar Producto Final</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'producto-final-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PVENTA_ID',
		'PVENTANOMBRE',
		//'MENU_ID',
		'BODEGA_ID',
		'PFINALSTOCK',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
