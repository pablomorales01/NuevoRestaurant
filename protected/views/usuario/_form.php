<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<?php 
if($roles == null){


echo BsHtml::alert(BsHtml::ALERT_COLOR_SUCCESS, BsHtml::bold('No existen Roles en el sistema. ') . 
	'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array(
    'url' => '../TipoRol/create'
)));


}

else{

 ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RESTO_ID'); ?>
		<?php echo $form->textField($model,'RESTO_ID'); ?>
		<?php echo $form->error($model,'RESTO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROL_ID'); ?>
		<?php echo $form->textField($model,'ROL_ID'); ?>
		<?php echo $form->error($model,'ROL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUPASSWORD'); ?>
		<?php echo $form->textField($model,'USUPASSWORD',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUPASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUCREATE'); ?>
		<?php echo $form->textField($model,'USUCREATE'); ?>
		<?php echo $form->error($model,'USUCREATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUNOMBRES'); ?>
		<?php echo $form->textField($model,'USUNOMBRES',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUNOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUAPELLIDOS'); ?>
		<?php echo $form->textField($model,'USUAPELLIDOS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUAPELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USURUT'); ?>
		<?php echo $form->textField($model,'USURUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'USURUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUTELEFONO'); ?>
		<?php echo $form->textField($model,'USUTELEFONO'); ?>
		<?php echo $form->error($model,'USUTELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUESTADO'); ?>
		<?php echo $form->textField($model,'USUESTADO',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'USUESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); 

}
?>

</div><!-- form -->