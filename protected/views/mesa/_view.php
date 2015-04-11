<?php
/* @var $this MesaController */
/* @var $data Mesa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESANUM')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MESANUM), array('view', 'id'=>$data->MESANUM)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESTO_ID')); ?>:</b>
	<?php echo CHtml::encode($data->RESTO_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESAPERSONAS')); ?>:</b>
	<?php echo CHtml::encode($data->MESAPERSONAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>