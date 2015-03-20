<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-compras-mp-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PROV_ID'); ?>
		<?php echo $form->textField($model,'PROV_ID'); ?>
		<?php echo $form->error($model,'PROV_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MP_ID'); ?>
		<?php echo $form->textField($model,'MP_ID'); ?>
		<?php echo $form->error($model,'MP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RCMPPRECIO_COMPRA'); ?>
		<?php echo $form->textField($model,'RCMPPRECIO_COMPRA'); ?>
		<?php echo $form->error($model,'RCMPPRECIO_COMPRA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RCMPCANTIDAD'); ?>
		<?php echo $form->textField($model,'RCMPCANTIDAD'); ?>
		<?php echo $form->error($model,'RCMPCANTIDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RCMPFECHA'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			 'model'=>$model,
			 'attribute'=>'RCMPFECHA',
			 'value'=>$model->RCMPFECHA,
			 'language' => 'es',
			 'htmlOptions' => array('readonly'=>"readonly"),		 
			 'options'=>array(
			 	//'showAnim'=>'fold',
			 'autoSize'=>true,
			 'defaultDate'=>$model->RCMPFECHA,
			 'dateFormat'=>'yy-mm-dd',

			 'selectOtherMonths'=>true,
			 'showAnim'=>'slide',
			 'showButtonPanel'=>true,

			 'showOtherMonths'=>true,
			 'changeMonth' => 'true',
			 'changeYear' => 'true',
			 )
			 )); 
		  	?>
		<?php echo $form->error($model,'RCMPFECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->