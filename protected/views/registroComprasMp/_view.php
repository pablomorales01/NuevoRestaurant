<?php
/* @var $this RegistroComprasMpController */
/* @var $data RegistroComprasMp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RCMP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RCMP_ID), array('view', 'id'=>$data->RCMP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROV_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PROV_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->MP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RCMPPRECIO_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->RCMPPRECIO_COMPRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RCMPCANTIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->RCMPCANTIDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RCMPFECHA')); ?>:</b>
	<?php echo CHtml::encode($data->RCMPFECHA); ?>
	<br />


</div>