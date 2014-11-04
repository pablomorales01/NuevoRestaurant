<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PROV_ID'); ?>
		<?php echo $form->textField($model,'PROV_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVNOMBRE'); ?>
		<?php echo $form->textField($model,'PROVNOMBRE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVRUT'); ?>
		<?php echo $form->textField($model,'PROVRUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVTELEFONO'); ?>
		<?php echo $form->textField($model,'PROVTELEFONO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->