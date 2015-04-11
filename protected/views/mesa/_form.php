<?php
/* @var $this MesaController */
/* @var $model Mesa */
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
	<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="grabado_ok">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
    <?php endif; ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'MESANUM'); ?>
		<?php echo $form->error($model,'MESANUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'MESAPERSONAS'); ?>
		<?php echo $form->error($model,'MESAPERSONAS'); ?>
	</div>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->