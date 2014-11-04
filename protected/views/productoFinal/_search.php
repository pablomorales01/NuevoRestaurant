<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PVENTANOMBRE'); ?>
		<?php echo $form->textField($model,'PVENTANOMBRE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BODEGA_ID'); ?>
		<?php echo $form->textField($model,'BODEGA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PFINALSTOCK'); ?>
		<?php echo $form->textField($model,'PFINALSTOCK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->