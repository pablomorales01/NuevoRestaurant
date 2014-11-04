<?php
/* @var $this RecetaController */
/* @var $model Receta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RECETA_ID'); ?>
		<?php echo $form->textField($model,'RECETA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->textField($model,'RECETACANTIDADPRODUCTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RECETAUNIDADMEDIDA'); ?>
		<?php echo $form->textField($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MP_ID'); ?>
		<?php echo $form->textField($model,'MP_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->