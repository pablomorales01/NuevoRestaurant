<?php
/* @var $this MesaController */
/* @var $data Mesa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MESA_ID), array('view', 'id'=>$data->MESA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESANUM')); ?>:</b>
	<?php echo CHtml::encode($data->MESANUM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESACANTIDADPERSONA')); ?>:</b>
	<?php echo CHtml::encode($data->MESACANTIDADPERSONA); ?>
	<br />


</div>