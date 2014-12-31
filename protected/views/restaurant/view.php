<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */
?>

<h1 align="center">Detalle Restaurant #<?php echo $model->RESTO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RESTO_ID',
		'RESTONOMBRE',
		'RESTOFECHACREACION',
	),
)); ?>
