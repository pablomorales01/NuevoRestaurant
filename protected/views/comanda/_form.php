<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
)); ?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'VENTA_ID'); ?>
		<?php echo $form->error($model,'VENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'MENU_ID'); ?>
		<?php echo $form->error($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'MESANUM'); ?>
		<?php echo $form->error($model,'MESANUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_ID'); ?>
		<?php echo $form->error($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'USU_USU_ID'); ?>
		<?php echo $form->error($model,'USU_USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'COMFECHA'); ?>
		<?php echo $form->error($model,'COMFECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'COM_ESTADO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COM_ESTADO'); ?>
	</div>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->