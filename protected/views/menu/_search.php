<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENUNOMBRE'); ?>
		<?php echo $form->textField($model,'MENUNOMBRE',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENUPRECIO'); ?>
		<?php echo $form->textField($model,'MENUPRECIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MENUCANTIDADPERSONAS'); ?>
		<?php echo $form->textField($model,'MENUCANTIDADPERSONAS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->