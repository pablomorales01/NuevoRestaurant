<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MENUNOMBRE'); ?>
		<?php echo $form->textField($model,'MENUNOMBRE',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'MENUNOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MENUPRECIO'); ?>
		<?php echo $form->textField($model,'MENUPRECIO'); ?>
		<?php echo $form->error($model,'MENUPRECIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MENUCANTIDADPERSONAS'); ?>
		<?php echo $form->textField($model,'MENUCANTIDADPERSONAS'); ?>
		<?php echo $form->error($model,'MENUCANTIDADPERSONAS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->