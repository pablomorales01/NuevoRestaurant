<?php
/* @var $this ProductoVentaController */
/* @var $model ProductoVenta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-venta-form',
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
		<?php echo $form->labelEx($model,'PVENTANOMBRE'); ?>
		<?php echo $form->textField($model,'PVENTANOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PVENTANOMBRE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->