<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */

?>

<h1 align="center">Ver Registro de Compras Materia Prima #<?php echo $model->RCMP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RCMP_ID',
		'PROV_ID',
		'MP_ID',
		'RCMPPRECIO_COMPRA',
		'RCMPCANTIDAD',
		'RCMPFECHA',
	),
)); ?>
