<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materia-prima-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'BODEGA_ID'); ?>
		<?php echo $form->textField($model,'BODEGA_ID'); ?>
		<?php echo $form->error($model,'BODEGA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TMP_ID'); ?>
		<?php echo $form->textField($model,'TMP_ID'); ?>
		<?php echo $form->error($model,'TMP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MPNOMBRE'); ?>
		<?php echo $form->textField($model,'MPNOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'MPNOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MPUNIDAD_MEDIDA'); ?>
		<?php echo $form->textField($model,'MPUNIDAD_MEDIDA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'MPUNIDAD_MEDIDA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MPSTOCK'); ?>
		<?php echo $form->textField($model,'MPSTOCK'); ?>
		<?php echo $form->error($model,'MPSTOCK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->