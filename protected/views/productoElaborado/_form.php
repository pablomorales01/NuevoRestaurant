

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-elaborado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<?php 
	if($mp == null)
	{
		echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen regristo de materia prima para elaborar un producto ')
    		.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array(
    			'url' => '../../materiaPrima/create'
    			)));
	}
	else{


?>
	
	

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php    echo $form->errorSummary($model); ?>

	 <div class="form" align="center">
		  <div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-12">
  	<?php 
  		echo $form->textFieldControlGroup($model, 'PVENTANOMBRE');
  		echo $form->error($model,'PVENTANOMBRE'); 
  	 ?>
  	 <?php 
  		echo $form->textFieldControlGroup($model, 'CALORIAS');
  		echo $form->error($model,'CALORIAS'); 
  	 ?>
  	 <?php 
  		echo $form->textFieldControlGroup($model, 'GRAMOS');
  		echo $form->error($model,'GRAMOS'); 
  	 ?>
		  </div>
		  </div>
  </div>

	<div class="row buttons" align="center">
    <?php echo BsHtml::submitButton('Siguiente', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
  </div>
<?php } ?>


<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
