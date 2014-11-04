<?php
/* @var $this TipoRolController */
/* @var $model TipoRol */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ROL_ID'); ?>
		<?php echo $form->textField($model,'ROL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROLNOMBRE'); ?>
		<?php echo $form->textField($model,'ROLNOMBRE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->