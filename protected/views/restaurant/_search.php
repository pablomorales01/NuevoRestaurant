<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RESTO_ID'); ?>
		<?php echo $form->textField($model,'RESTO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESTONOMBRE'); ?>
		<?php echo $form->textField($model,'RESTONOMBRE',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESTOFECHACREACION'); ?>
		<?php echo $form->textField($model,'RESTOFECHACREACION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->