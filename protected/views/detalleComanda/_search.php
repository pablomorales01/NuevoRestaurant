<?php
/* @var $this DetalleComandaController */
/* @var $model DetalleComanda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DETALLE_ID'); ?>
		<?php echo $form->textField($model,'DETALLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_ID'); ?>
		<?php echo $form->textField($model,'COM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DETALLEESTADO'); ?>
		<?php echo $form->textField($model,'DETALLEESTADO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->