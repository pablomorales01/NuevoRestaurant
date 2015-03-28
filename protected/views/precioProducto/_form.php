<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'precio-producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
		<?php echo $form->error($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
		<?php echo $form->error($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PP_ID'); ?>
		<?php echo $form->textField($model,'PP_ID'); ?>
		<?php echo $form->error($model,'PP_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->