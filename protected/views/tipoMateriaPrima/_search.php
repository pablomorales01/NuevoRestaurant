<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TMP_ID'); ?>
		<?php echo $form->textField($model,'TMP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TMPNOMBRE'); ?>
		<?php echo $form->textField($model,'TMPNOMBRE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->