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
)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'USU_ID'); ?>
		<?php echo $form->textFieldControlGroup($model,'USU_ID'); ?>
		<?php echo $form->error($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'VENTAFECHA'); ?>
		<?php echo $form->textFieldControlGroup($model,'VENTAFECHA'); ?>
		<?php echo $form->error($model,'VENTAFECHA'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'VENTATOTAL'); ?>
		<?php echo $form->textFieldControlGroup($model,'VENTATOTAL'); ?>
		<?php echo $form->error($model,'VENTATOTAL'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'VENTAFORMADEPAGO'); ?>
		<?php echo $form->textFieldControlGroup($model,'VENTAFORMADEPAGO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'VENTAFORMADEPAGO'); ?>
	</div>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->