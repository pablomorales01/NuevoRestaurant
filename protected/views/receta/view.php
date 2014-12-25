<?php
/* @var $this RecetaController */
/* @var $model Receta */

?>

<h1 align="center">Receta #<?php echo $model->RECETA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RECETA_ID',
		'RECETACANTIDADPRODUCTO',
		'RECETAUNIDADMEDIDA',
		'PVENTA_ID',
		'MP_ID',
	),
)); ?>
