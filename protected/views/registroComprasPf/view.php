<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */
?>

<h1 align="center">Ver Registro Compras Prpducto final #<?php echo $model->RPF_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RPF_ID',
		'PVENTA_ID',
		'PROV_ID',
		'RVTASFECHA',
		'RPFPRECIO_COMPRA',
		'RPFPCANTIDAD',
	),
)); ?>
