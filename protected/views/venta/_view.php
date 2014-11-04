<?php
/* @var $this VentaController */
/* @var $data Venta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('VENTA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->VENTA_ID), array('view', 'id'=>$data->VENTA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VENTAFECHA')); ?>:</b>
	<?php echo CHtml::encode($data->VENTAFECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VENTATOTAL')); ?>:</b>
	<?php echo CHtml::encode($data->VENTATOTAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VENTAFORMADEPAGO')); ?>:</b>
	<?php echo CHtml::encode($data->VENTAFORMADEPAGO); ?>
	<br />


</div>