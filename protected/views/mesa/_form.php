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
)); 

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#Mesa_MESANUM').validCampoFranz('1234567890');
  $('#Mesa_MESAPERSONAS').validCampoFranz('1234567890');
");
?>
	
	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>


	<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="grabado_ok">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
    <?php endif; ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'MESANUM'); ?>
		
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