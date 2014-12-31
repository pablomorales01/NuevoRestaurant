<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGEN_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IMAGEN_ID), array('view', 'id'=>$data->IMAGEN_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGENNOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGENNOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGEN')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGEN); ?>
	<br />


</div>