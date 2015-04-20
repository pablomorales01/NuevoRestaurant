<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'bodega-form',
  'enableAjaxValidation'=>false,
)); ?>

<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#Bodega_BODEGANOMBRE').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');

");
?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'BODEGANOMBRE'); ?>
		<?php echo $form->textFieldControlGroup($model,'BODEGANOMBRE',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'BODEGANOMBRE'); ?>
	</div>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->