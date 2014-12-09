<?php 

$form=$this->beginWidget('CActiveForm', array(
  'id'=>'perfil-_form-form',
  // Please note: When you enable ajax validation, make sure the corresponding
  // controller action is handling ajax validation correctly.
  // See class documentation of CActiveForm for details on this,
  // you need to use the performAjaxValidation()-method described there.
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

<h1 align="center">Editar mi Perfil</h1>

<div class="form" align="center">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-12">
	<!-- Contraseña, Telefono -->
	<?php //var_dump($model->USUPASSWORD, $model->USUTELEFONO) ?>

	<?php echo $form->textFieldControlGroup($model,'USUNOMBRES', array('readonly'=>'false')); ?>
    <?php echo $form->error($model,'USUNOMBRES'); ?>

    <?php echo $form->textFieldControlGroup($model,'USUAPELLIDOS', array('readonly'=>'false')); ?>
    <?php echo $form->error($model,'USUAPELLIDOS'); ?>

    <?php echo $form->textFieldControlGroup($model,'USURUT', array('readonly'=>'false')); ?>
    <?php echo $form->error($model,'USURUT'); ?>

	<?php echo $form->passwordFieldControlGroup($model,'USUPASSWORD'); ?>
    <?php echo $form->error($model,'USUPASSWORD'); ?>

    <?php echo $form->textFieldControlGroup($model,'USUTELEFONO'); ?>
    <?php echo $form->error($model,'USUTELEFONO'); ?>

</div>
</div>
</div>

<div class="row buttons" align="center">
    <?php echo BsHtml::submitButton('Guardar', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
</div>

<?php $this->endWidget(); 
	  $this->endWidget(); 
?>