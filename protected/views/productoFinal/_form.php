<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-final-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
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
  $('#ProductoFinal_PVENTANOMBRE').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#ProductoFinal_PFINALSTOCK').validCampoFranz('1234567890');

");
?>

	<p class="note" align="center">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PVENTANOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PVENTANOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'BODEGA_ID', 
                            CHtml::listData($bodega, 'BODEGA_ID', 'BODEGANOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PFINALSTOCK'); ?>
		<?php echo $form->error($model,'PFINALSTOCK'); ?>
	</div>


		<?php echo $form->dropDownListControlGroup($model,'ESTADO', array(
        'disponible'=> 'Disponible',
        'no disponible'=>'No disponible'),
      array('prompt' => 'Seleccione')      
      ); ?> 

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->