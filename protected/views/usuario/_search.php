<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USU_ID'); ?>
		<?php echo $form->textField($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESTO_ID'); ?>
		<?php echo $form->textField($model,'RESTO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROL_ID'); ?>
		<?php echo $form->textField($model,'ROL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUPASSWORD'); ?>
		<?php echo $form->textField($model,'USUPASSWORD',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUCREATE'); ?>
		<?php echo $form->textField($model,'USUCREATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUNOMBRES'); ?>
		<?php echo $form->textField($model,'USUNOMBRES',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUAPELLIDOS'); ?>
		<?php echo $form->textField($model,'USUAPELLIDOS',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USURUT'); ?>
		<?php echo $form->textField($model,'USURUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUTELEFONO'); ?>
		<?php echo $form->textField($model,'USUTELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUESTADO'); ?>
		<?php echo $form->textField($model,'USUESTADO',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->