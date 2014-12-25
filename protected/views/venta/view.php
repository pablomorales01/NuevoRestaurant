<?php
/* @var $this VentaController */
/* @var $model Venta */

?>

<h1 align="center">Detalle Venta #<?php echo $model->VENTA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'VENTA_ID',
		'USU_ID',
		'VENTAFECHA',
		'VENTATOTAL',
		'VENTAFORMADEPAGO',
	),
)); ?>
