<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
));

	if($resto == null) //no existen restaurant
	{
		echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Restaurantes en el sistema. ')
    		.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../restaurant/create')));	
	}
	else {
?>

	<p class="note" align="center">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<?php  //PARA LOS RESTAURANTES
                        echo $form->dropDownListControlGroup($model, 'RESTO_ID', 
                            CHtml::listData($resto, 'RESTO_ID', 'RESTONOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );

      ?>
    </div>
	<div class="row">
		<?php //echo $form->labelEx($model,'IMAGENNOMBRE'); ?>
		<?php //echo $form->textFieldControlGroup($model,'IMAGENNOMBRE',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'IMAGENNOMBRE'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'IMAGEN'); ?>
		<?php echo $form->fileField($model,'IMAGEN'); ?>
		<?php echo $form->error($model,'IMAGEN'); ?>
	</div>

	<?php if(!$model->isNewRecord && $model->IMAGEN!="" && strlen($model->IMAGEN)!=0){ ?>
	<div class="row">
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/protected/images/subidas/'.$model->IMAGEN,"imagen", array("width"=>200, "height"=>200)); ?>
	<?php // La Imagen se muestra aquí si la página es la página de actualización ?>
	</div>
	<?php } ?>


	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php } ?>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->