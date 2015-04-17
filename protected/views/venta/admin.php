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
		array('name'=>'USU_ID',
			  'value'=>'$data->uSU->USUNOMBRES'),
		array('name'=>'USU_ID',
			  'value'=>'$data->uSU->USUAPELLIDOS'),
		'VENTAFECHA',
		'VENTATOTAL',
		'VENTAFORMADEPAGO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
