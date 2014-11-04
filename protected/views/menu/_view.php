<?php
/* @var $this MenuController */
/* @var $data Menu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENU_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MENU_ID), array('view', 'id'=>$data->MENU_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENUNOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->MENUNOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENUPRECIO')); ?>:</b>
	<?php echo CHtml::encode($data->MENUPRECIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MENUCANTIDADPERSONAS')); ?>:</b>
	<?php echo CHtml::encode($data->MENUCANTIDADPERSONAS); ?>
	<br />


</div>