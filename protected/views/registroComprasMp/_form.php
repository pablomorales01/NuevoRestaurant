<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-compras-mp-form',
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

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	
		<?php echo $form->dropDownListControlGroup($model, 'PROV_ID', 
      	CHtml::listData($prov, 'PROV_ID', 'PROVNOMBRE'),
      	array('prompt'=>'Seleccione')
      	); ?>

      	<?php echo $form->dropDownListControlGroup($model,'MP_ID',
  			CHtml::listData($productos, 'MP_ID', 'MPNOMBRE'),
      array('prompt' => 'Seleccione')      
      ); ?> 
		
		<?php echo $form->textFieldControlGroup($model,'RCMPPRECIO_COMPRA'); ?>
		
		<?php echo $form->textFieldControlGroup($model,'RCMPCANTIDAD'); ?>
		
		<?php echo $form->textFieldControlGroup($model,'RCMPFECHA'); ?>
		
	</div>

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>
	
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->