<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'VENTA_ID'); ?>
		<?php echo $form->textField($model,'VENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_ID'); ?>
		<?php echo $form->textField($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VENTAFECHA'); ?>
		<?php echo $form->textField($model,'VENTAFECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VENTATOTAL'); ?>
		<?php echo $form->textField($model,'VENTATOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VENTAFORMADEPAGO'); ?>
		<?php echo $form->textField($model,'VENTAFORMADEPAGO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->