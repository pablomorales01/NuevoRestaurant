<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_INLINE, //en linea (boton al lado)
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
    	'class' => 'bs-example'
    	)
    ));
?>

	<!-- Deberia ir N° de mesa, Producto y el estado del producto-->
	<?php if($mesa != null) //no existen mesas 
	{
		echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Mesas en el sistema. ')
    		.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../mesa/create')));	
	}
	else {?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'VENTA_ID'); ?>
		<?php echo $form->textField($model,'VENTA_ID'); ?>
		<?php echo $form->error($model,'VENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MENU_ID'); ?>
		<?php echo $form->textField($model,'MENU_ID'); ?>
		<?php echo $form->error($model,'MENU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MESA_ID'); ?>
		<?php echo $form->textField($model,'MESA_ID'); ?>
		<?php echo $form->error($model,'MESA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_ID'); ?>
		<?php echo $form->textField($model,'USU_ID'); ?>
		<?php echo $form->error($model,'USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_USU_ID'); ?>
		<?php echo $form->textField($model,'USU_USU_ID'); ?>
		<?php echo $form->error($model,'USU_USU_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMFECHA'); ?>
		<?php echo $form->textField($model,'COMFECHA'); ?>
		<?php echo $form->error($model,'COMFECHA'); ?>
	</div>
	-->
	
	<div class="row">
		<?php echo $form->labelEx($mesa,'MESANUM'); ?>
		<?php echo $form->textField($mesa,'MESANUM'); ?>
		<?php echo $form->error($mesa,'MESANUM'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	<?php } ?>

<?php $this->endWidget(); ?>

</div><!-- form -->