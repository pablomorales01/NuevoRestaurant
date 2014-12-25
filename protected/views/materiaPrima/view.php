<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */

?>

<h1 align="center">Detalle Materia Prima #<?php echo $model->MP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MP_ID',
		'BODEGA_ID',
		//'TMP_ID',
		'MPNOMBRE',
		'MPUNIDAD_MEDIDA',
		'MPSTOCK',
	),
)); ?>
