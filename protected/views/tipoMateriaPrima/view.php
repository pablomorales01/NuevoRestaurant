<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

?>

<h1 align="center">Detalle Tipo de Materia Prima #<?php echo $model->TMP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TMP_ID',
		'TMPNOMBRE',
	),
)); ?>
