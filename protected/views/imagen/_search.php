<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IMAGEN_ID'); ?>
		<?php echo $form->textField($model,'IMAGEN_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGENNOMBRE'); ?>
		<?php echo $form->textField($model,'IMAGENNOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGEN'); ?>
		<?php echo $form->textArea($model,'IMAGEN',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->