<?php
/* @var $this VentaController */
/* @var $model Venta */

?>

<h1 align="center">Administrar Ventas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'venta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'VENTA_ID',
		'uSU.USURUT',
		'VENTAFECHA',
		'VENTATOTAL',
		'VENTAFORMADEPAGO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
