<?php
/* @var $this MesaController */
/* @var $model Mesa */

?>

<h1 align="center">Detalle Mesa #<?php echo $model->MESA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MESA_ID',
		'MESANUM',
		'MESACANTIDADPERSONA',
	),
)); ?>
