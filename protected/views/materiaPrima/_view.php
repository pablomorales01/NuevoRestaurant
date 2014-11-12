<?php
/* @var $this MateriaPrimaController */
/* @var $data MateriaPrima */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MP_ID), array('view', 'id'=>$data->MP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BODEGA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->BODEGA_ID); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('TMP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TMP_ID); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('MPNOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->MPNOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MPUNIDAD_MEDIDA')); ?>:</b>
	<?php echo CHtml::encode($data->MPUNIDAD_MEDIDA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MPSTOCK')); ?>:</b>
	<?php echo CHtml::encode($data->MPSTOCK); ?>
	<br />


</div>