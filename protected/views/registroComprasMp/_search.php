<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RCMP_ID'); ?>
		<?php echo $form->textField($model,'RCMP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROV_ID'); ?>
		<?php echo $form->textField($model,'PROV_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MP_ID'); ?>
		<?php echo $form->textField($model,'MP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RCMPPRECIO_COMPRA'); ?>
		<?php echo $form->textField($model,'RCMPPRECIO_COMPRA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RCMPCANTIDAD'); ?>
		<?php echo $form->textField($model,'RCMPCANTIDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RCMPFECHA'); ?>
		<?php echo $form->textField($model,'RCMPFECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->