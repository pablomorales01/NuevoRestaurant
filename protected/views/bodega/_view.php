<?php
/* @var $this BodegaController */
/* @var $data Bodega */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BODEGA_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BODEGA_ID), array('view', 'id'=>$data->BODEGA_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BODEGANOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->BODEGANOMBRE); ?>
	<br />


</div>