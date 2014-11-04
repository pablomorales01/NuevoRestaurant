<?php
/* @var $this DetalleComandaController */
/* @var $data DetalleComanda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DETALLE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DETALLE_ID), array('view', 'id'=>$data->DETALLE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COM_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PVENTA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DETALLEESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->DETALLEESTADO); ?>
	<br />


</div>