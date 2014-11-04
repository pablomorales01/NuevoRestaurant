<?php
/* @var $this TipoRolController */
/* @var $data TipoRol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROL_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ROL_ID), array('view', 'id'=>$data->ROL_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLNOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->ROLNOMBRE); ?>
	<br />


</div>