<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */
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
)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));

?>

	<p class="note">Campos con  <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model,'PVENTANOMBRE'); ?>
		<?php echo $form->error($model,'PVENTANOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model, 'CALORIAS'); ?>
		<?php echo $form->error($model,'CALORIAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model, 'GRAMOS'); ?>
		<?php echo $form->error($model,'GRAMOS'); ?>
	</div>


	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->