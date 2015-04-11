<?php
/* @var $this MesaController */
/* @var $model Mesa */
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
		<?php echo $form->label($model,'MESANUM'); ?>
		<?php echo $form->textField($model,'MESANUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MESAPERSONAS'); ?>
		<?php echo $form->textField($model,'MESAPERSONAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->