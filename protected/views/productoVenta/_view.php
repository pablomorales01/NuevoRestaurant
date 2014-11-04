<?php
/* @var $this ProductoVentaController */
/* @var $data ProductoVenta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PVENTA_ID), array('view', 'id'=>$data->PVENTA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MENU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTANOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PVENTANOMBRE); ?>
	<br />


</div>