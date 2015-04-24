<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'usuario-_form-form',
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

<?php if($bodega == null) //No existen bodegas 
    {
        echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Bodegas en el sistema. ')
            .'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../bodega/create')));   
    }
else if($TMP == null)
    {
        echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Tipos de Materia Prima en el sistema. ')
            .'Por favor ingrese una' . BsHtml::alertLink(' Aquí.', array('url' => '../TipoMateriaPrima/create')));
    }
else {

  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#MateriaPrima_MPNOMBRE').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#MateriaPrima_MPSTOCK').validCampoFranz('1234567890');
");
?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model);?> 
    <div class="form" align="center">
    <div class="row">

	 <?php //PARA LAS BODEGAS
                        echo $form->dropDownListControlGroup($model, 'BODEGA_ID', 
                            CHtml::listData($bodega, 'BODEGA_ID', 'BODEGANOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );
    
	
	echo $form->textFieldControlGroup($model, 'MPNOMBRE', array(
			'append' => BsHtml::icon(BsHtml::GLYPHICON_USER)));
	

	 //PARA LA UNIDAD DE MEDIDA
        echo $form->dropDownListControlGroup($model, 'MPUNIDAD_MEDIDA', array(
        'gr'=> 'Gramos', //lo que guarda => lo que muestro
        'Kg'=>'Kilogramos',
        'mL'=>'Mililitros',
        'L'=>'Litros'),
         array('prompt' => 'Seleccione') 
      );
      

     echo $form->textFieldControlGroup($model, 'MPSTOCK');
	?>
	
	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php } ?>
</div>
</div>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>