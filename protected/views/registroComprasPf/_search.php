<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RPF_ID'); ?>
		<?php echo $form->textField($model,'RPF_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROV_ID'); ?>
		<?php echo $form->textField($model,'PROV_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RVTASFECHA'); ?>
		<?php echo $form->textField($model,'RVTASFECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RPFPRECIO_COMPRA'); ?>
		<?php echo $form->textField($model,'RPFPRECIO_COMPRA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RPFPCANTIDAD'); ?>
		<?php echo $form->textField($model,'RPFPCANTIDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->