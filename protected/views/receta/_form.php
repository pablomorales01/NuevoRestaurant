<?php
/* @var $this RecetaController */
/* @var $model Receta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'receta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->textField($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->error($model,'RECETACANTIDADPRODUCTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RECETAUNIDADMEDIDA'); ?>
		<?php echo $form->textField($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RECETAUNIDADMEDIDA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
		<?php echo $form->error($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MP_ID'); ?>
		<?php echo $form->textField($model,'MP_ID'); ?>
		<?php echo $form->error($model,'MP_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->