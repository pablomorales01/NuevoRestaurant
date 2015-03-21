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

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form" align="center">
    <div class="row">
  		<?php echo $form->dropDownListControlGroup($model,'PVENTA_ID',
  			CHtml::listData($productos, 'PVENTA_ID', 'PVENTANOMBRE'),
      array('prompt' => 'Seleccione')      
      ); ?> 

      <?php echo $form->dropDownListControlGroup($model, 'PROV_ID', 
      	CHtml::listData($prov, 'PROV_ID', 'PROVNOMBRE'),
      	array('prompt'=>'Seleccione')
      	); ?>
		
		<?php echo $form->textFieldControlGroup($model,'RPFPRECIO_COMPRA'); ?>
		
		<?php echo $form->textFieldControlGroup($model,'RPFPCANTIDAD'); ?>

		<div class="row"> 
		<div class="column">
		<?php echo $form->labelEx($model,'RVTASFECHA'); ?></div>
		<div class="column">
		 <?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
		 array( 'model'=>$model, 'attribute'=>'RVTASFECHA', 
		 'value'=>$model->RVTASFECHA, 'language' => 'es', 
		 'htmlOptions' => array('readonly'=>"readonly"),
		 'options'=>array( //'showAnim'=>'fold', 'autoSize'=>true, 'defaultDate'=>$model->RCMPFECHA, 'dateFormat'=>'yy-mm-dd',

'selectOtherMonths'=>true, 'showAnim'=>'slide', 'showButtonPanel'=>true,

'showOtherMonths'=>true, 'changeMonth' => 'true', 'changeYear' => 'true', ) )); ?>
</div>
</div>


	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>
	
</div>
  </div>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->