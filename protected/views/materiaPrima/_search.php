<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MP_ID'); ?>
		<?php echo $form->textField($model,'MP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BODEGA_ID'); ?>
		<?php echo $form->textField($model,'BODEGA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TMP_ID'); ?>
		<?php echo $form->textField($model,'TMP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MPNOMBRE'); ?>
		<?php echo $form->textField($model,'MPNOMBRE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MPUNIDAD_MEDIDA'); ?>
		<?php echo $form->textField($model,'MPUNIDAD_MEDIDA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MPSTOCK'); ?>
		<?php echo $form->textField($model,'MPSTOCK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->