<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */

?>

<h1>View PrecioProducto #<?php echo $model->PP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MENU_ID',
		'PVENTA_ID',
	),
)); ?>
