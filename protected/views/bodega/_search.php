<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BODEGA_ID'); ?>
		<?php echo $form->textField($model,'BODEGA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BODEGANOMBRE'); ?>
		<?php echo $form->textField($model,'BODEGANOMBRE',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->