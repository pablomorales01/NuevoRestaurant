<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-compras-pf-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 


$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));

?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form" align="center">
    <div class="row">
  		<?php echo $form->dropDownListControlGroup($model,'PVENTA_ID',
  			CHtml::listData($productos, 'PVENTA_ID', 'PVENTANOMBRE'),
      array('prompt' => 'Seleccione')      
      ); ?>


  
  

	<div class="row">
		<?php echo $form->labelEx($model,'PROV_ID'); ?>
		<?php echo $form->textField($model,'PROV_ID'); ?>
		<?php echo $form->error($model,'PROV_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RVTASFECHA'); ?>
		<?php echo $form->textField($model,'RVTASFECHA'); ?>
		<?php echo $form->error($model,'RVTASFECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RPFPRECIO_COMPRA'); ?>
		<?php echo $form->textField($model,'RPFPRECIO_COMPRA'); ?>
		<?php echo $form->error($model,'RPFPRECIO_COMPRA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RPFPCANTIDAD'); ?>
		<?php echo $form->textField($model,'RPFPCANTIDAD'); ?>
		<?php echo $form->error($model,'RPFPCANTIDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	
</div>
  </div>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->