<?php
/* @var $this RegistroComprasPfController */
/* @var $data RegistroComprasPf */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RPF_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RPF_ID), array('view', 'id'=>$data->RPF_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PVENTA_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PVENTA_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROV_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PROV_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RVTASFECHA')); ?>:</b>
	<?php echo CHtml::encode($data->RVTASFECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RPFPRECIO_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->RPFPRECIO_COMPRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RPFPCANTIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->RPFPCANTIDAD); ?>
	<br />


</div>