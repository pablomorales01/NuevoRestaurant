<?php
/* @var $this RestaurantController */
/* @var $data Restaurant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESTO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RESTO_ID), array('view', 'id'=>$data->RESTO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESTONOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RESTONOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESTOFECHACREACION')); ?>:</b>
	<?php echo CHtml::encode($data->RESTOFECHACREACION); ?>
	<br />


</div>