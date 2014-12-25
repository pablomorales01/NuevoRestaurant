<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'restaurant-form',
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
        'enctype'=>'multipart/form-data'
    )
));
?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'RESTONOMBRE'); ?>
		<?php echo $form->textFieldControlGroup($model,'RESTONOMBRE',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'RESTONOMBRE'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'RESTOFECHACREACION'); ?>
		<?php echo $form->textAreaControlGroup($model,'RESTODETALLE'); ?>
		<?php echo $form->error($model,'RESTODETALLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESTOIMAGEN'); ?>
		<?php //echo $form->textFieldControlGroup($model,'RESTOIMAGEN'); ?>
		<?php echo CHtml::activeFileField($model, 'RESTOIMAGEN') ?>
		<?php echo $form->error($model,'RESTOIMAGEN'); ?>
	</div>

	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row">
	     <?php echo CHtml::Restaurant(Yii::app()->request->baseUrl.'/images/subidas'.$model->RESTOIMAGEN,"image",array("width"=>200)); ?>
	</div>
	<?php } ?>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php $this->endWidget(); ?>