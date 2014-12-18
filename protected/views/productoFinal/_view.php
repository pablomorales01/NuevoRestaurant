<?php
/* @var $this ProductoFinalController */
/* @var $data ProductoFinal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PVENTA_ID), array('view', 'id'=>$data->PVENTA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTANOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PVENTANOMBRE); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('BODEGA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->BODEGA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PFINALSTOCK')); ?>:</b>
	<?php echo CHtml::encode($data->PFINALSTOCK); ?>
	<br />


</div>