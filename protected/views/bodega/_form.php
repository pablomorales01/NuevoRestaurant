<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_INLINE,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'BODEGANOMBRE'); ?>
		<?php echo $form->textField($model,'BODEGANOMBRE',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'BODEGANOMBRE'); ?>
	</div>

	<div class="row buttons">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->