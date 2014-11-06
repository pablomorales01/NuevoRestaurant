<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="row">
<div class="col-xs-6 col-sm-4"></div>



<div class="col-xs-6 col-sm-4" align="center">
<?php $this->beginWidget('bootstrap.widgets.BsPanel');?>
<h1>Bienvenido</h1>

<p>Por favor llene sus datos:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los items <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'No cerrar sesión'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<?php $this->endWidget(); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->
</div> <!--Termino del col-->
<div class="col-xs-6 col-sm-4"></div>
</div> <!--Termino del row-->

