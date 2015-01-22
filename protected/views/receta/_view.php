<?php
/* @var $this RecetaController */
/* @var $data Receta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECETA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RECETA_ID), array('view', 'id'=>$data->RECETA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PVENTA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECETANOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RECETANOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECETACANTIDADPRODUCTO')); ?>:</b>
	<?php echo CHtml::encode($data->RECETACANTIDADPRODUCTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RECETAUNIDADMEDIDA')); ?>:</b>
	<?php echo CHtml::encode($data->RECETAUNIDADMEDIDA); ?>
	<br />


</div>