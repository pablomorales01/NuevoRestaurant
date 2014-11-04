<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROV_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PROV_ID), array('view', 'id'=>$data->PROV_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVNOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PROVNOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVRUT')); ?>:</b>
	<?php echo CHtml::encode($data->PROVRUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVTELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->PROVTELEFONO); ?>
	<br />


</div>