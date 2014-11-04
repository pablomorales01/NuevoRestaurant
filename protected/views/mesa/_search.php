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
		<?php echo $form->label($model,'MESA_ID'); ?>
		<?php echo $form->textField($model,'MESA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MESACANTIDADPERSONA'); ?>
		<?php echo $form->textField($model,'MESACANTIDADPERSONA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->