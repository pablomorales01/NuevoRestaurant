<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>false,
)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#Proveedor_PROVNOMBRE').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#Proveedor_PROVRUT').validCampoFranz('1234567890k-.k');
  $('#Proveedor_PROVTELEFONO').validCampoFranz('1234567890');

");
?>

	<p class="note" align="center">Campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PROVNOMBRE'); ?>	 
	
		<?php echo $form->textFieldControlGroup($model,'PROVRUT'); ?>

		<?php echo $form->textFieldControlGroup($model,'PROVTELEFONO'); ?>

	</div>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->