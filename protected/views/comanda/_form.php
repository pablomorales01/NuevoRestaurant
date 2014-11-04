<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comanda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'VENTA_ID'); ?>
		<?php echo $form->textField($model,'VENTA_ID'); ?>
		<?php echo $form->error($model,'VENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
		<?php echo $form->error($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MESA_ID'); ?>
		<?php echo $form->textField($model,'MESA_ID'); ?>
		<?php echo $form->error($model,'MESA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_ID'); ?>
		<?php echo $form->textField($model,'USU_ID'); ?>
		<?php echo $form->error($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_USU_ID'); ?>
		<?php echo $form->textField($model,'USU_USU_ID'); ?>
		<?php echo $form->error($model,'USU_USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMFECHA'); ?>
		<?php echo $form->textField($model,'COMFECHA'); ?>
		<?php echo $form->error($model,'COMFECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->