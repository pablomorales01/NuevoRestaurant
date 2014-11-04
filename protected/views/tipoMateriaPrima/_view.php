<?php
/* @var $this TipoMateriaPrimaController */
/* @var $data TipoMateriaPrima */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TMP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TMP_ID), array('view', 'id'=>$data->TMP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TMPNOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->TMPNOMBRE); ?>
	<br />


</div>