<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PROVNOMBRE'); ?>
		<?php echo $form->textField($model,'PROVNOMBRE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PROVNOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROVRUT'); ?>
		<?php echo $form->textField($model,'PROVRUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'PROVRUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROVTELEFONO'); ?>
		<?php echo $form->textField($model,'PROVTELEFONO'); ?>
		<?php echo $form->error($model,'PROVTELEFONO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->