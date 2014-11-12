<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */
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

<?php if($bodega == null) //No existen bodegas 
    {
        echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Bodegas en el sistema. ')
            .'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../bodega/create')));   
    }
else {
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php  //PARA LAS BODEGAS
                        echo $form->dropDownListControlGroup($model, 'BODEGA_ID', 
                            CHtml::listData($bodega, 'BODEGA_ID', 'BODEGANOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );
    ?>
	
	<?php echo $form->textFieldControlGroup($model, 'MPNOMBRE', array(
			'append' => BsHtml::icon(BsHtml::GLYPHICON_USER)));
	?>

	<?php //PARA LA UNIDAD DE MEDIDA
        echo $form->dropDownListControlGroup($model, 'MPUNIDAD_MEDIDA', array(
        'prompt' => 'Seleccione',
        'gr'=> 'Gramos', //lo que guarda => lo que muestro
        'Kg'=>'Kilogramos',
        'mL'=>'Mililitros',
        'L'=>'Litros',
      ));
      ?>

    <?php echo $form->textFieldControlGroup($model, 'MPSTOCK');
	?>
	
	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>
	 
<?php } ?>
<?php $this->endWidget(); ?>
