<?php
/* @var $this RecetaController */
/* @var $model Receta */
/* @var $form CActiveForm */
?>

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

<?php if($MP == null) //No existen bodegas 
    {
        echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existe Materia Prima en el sistema. ')
            .'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../materiaPrima/create')));   
    }
else {
?>
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php  //PARA LA MATERIA PRIMA
                        echo $form->dropDownListControlGroup($model, 'MP_ID', 
                            CHtml::listData($MP, 'MP_ID', 'MPNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );
    ?>

    <?php echo $form->textFieldControlGroup($model, 'RECETACANTIDADPRODUCTO');?>

    <?php //PARA LA UNIDAD DE MEDIDA
        echo $form->dropDownListControlGroup($model, 'RECETAUNIDADMEDIDA', array(
        'prompt' => 'Seleccione',
        'gr'=> 'Gramos', //lo que guarda => lo que muestro
        'Kg'=>'Kilogramos',
        'mL'=>'Mililitros',
        'L'=>'Litros',
      ));
      ?>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->textField($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->error($model,'RECETACANTIDADPRODUCTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RECETAUNIDADMEDIDA'); ?>
		<?php echo $form->textField($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RECETAUNIDADMEDIDA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
		<?php echo $form->error($model,'PVENTA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MP_ID'); ?>
		<?php echo $form->textField($model,'MP_ID'); ?>
		<?php echo $form->error($model,'MP_ID'); ?>
	</div>
	-->
	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php } ?>

<?php $this->endWidget(); ?>
