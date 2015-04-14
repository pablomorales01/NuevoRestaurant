<?php
/* @var $this ComandaController */
/* @var $model Comanda */
?>

<h1 align="center">Vista Comanda #<?php echo $model->COM_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COM_ID',
		'VENTA_ID',
		'MENU_ID',
		'MESANUM',
		'USU_ID',
		'USU_USU_ID',
		'COMFECHA',
		'COM_ESTADO',
	),
)); ?>
