<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

?>

<h1 align="center">Detalle Producto Final #<?php echo $model->PVENTA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PVENTA_ID',
		'PVENTANOMBRE',
		//'MENU_ID',
		'BODEGA_ID',
		'PFINALSTOCK',
	),
)); ?>
