<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_ID'); ?>
		<?php echo $form->textField($model,'USU_ID'); ?>
		<?php echo $form->error($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VENTAFECHA'); ?>
		<?php echo $form->textField($model,'VENTAFECHA'); ?>
		<?php echo $form->error($model,'VENTAFECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VENTATOTAL'); ?>
		<?php echo $form->textField($model,'VENTATOTAL'); ?>
		<?php echo $form->error($model,'VENTATOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VENTAFORMADEPAGO'); ?>
		<?php echo $form->textField($model,'VENTAFORMADEPAGO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'VENTAFORMADEPAGO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->