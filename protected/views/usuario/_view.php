<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USU_ID), array('view', 'id'=>$data->USU_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESTO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->RESTO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ROL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUPASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->USUPASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUCREATE')); ?>:</b>
	<?php echo CHtml::encode($data->USUCREATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUNOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->USUNOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUAPELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->USUAPELLIDOS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USURUT')); ?>:</b>
	<?php echo CHtml::encode($data->USURUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUTELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->USUTELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USUESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->USUESTADO); ?>
	<br />

	*/ ?>

</div>