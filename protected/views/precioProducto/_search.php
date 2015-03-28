<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PP_ID'); ?>
		<?php echo $form->textField($model,'PP_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->