<?php
/* @var $this ComandaController */
/* @var $data Comanda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COM_ID), array('view', 'id'=>$data->COM_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VENTA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->VENTA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MENU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MESA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_USU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USU_USU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMFECHA')); ?>:</b>
	<?php echo CHtml::encode($data->COMFECHA); ?>
	<br />


</div>