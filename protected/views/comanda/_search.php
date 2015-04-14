<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COM_ID'); ?>
		<?php echo $form->textField($model,'COM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VENTA_ID'); ?>
		<?php echo $form->textField($model,'VENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MESANUM'); ?>
		<?php echo $form->textField($model,'MESANUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_ID'); ?>
		<?php echo $form->textField($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_USU_ID'); ?>
		<?php echo $form->textField($model,'USU_USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMFECHA'); ?>
		<?php echo $form->textField($model,'COMFECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_ESTADO'); ?>
		<?php echo $form->textField($model,'COM_ESTADO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->