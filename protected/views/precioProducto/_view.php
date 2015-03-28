<?php
/* @var $this PrecioProductoController */
/* @var $data PrecioProducto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PP_ID), array('view', 'id'=>$data->PP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MENU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PVENTA_ID); ?>
	<br />


</div>