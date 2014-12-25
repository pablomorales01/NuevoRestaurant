<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */


/*Aqui llegan Total de mesas
  Total de Menu y total de los detalles de comanda*/
?>

<div class="form">

<?php

$form=$this->beginWidget('CActiveForm', array(
  'id'=>'bodega-form',
  'enableAjaxValidation'=>false,
));

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_INLINE, //en linea (boton al lado)
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
    	'class' => 'bs-example'
    	)
    ));
?>

	<!-- Deberia ir N° de mesa, Producto y el estado del producto-->
	<?php if($mesa == null) //no existen mesas 
	{
		echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Mesas en el sistema. ')
    		.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../mesa/create')));	
	}
	if($menu == null)
	{

		echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existe Menu en el sistema. ')
    		.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../menu/create')));
	}
	else {?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	 <?php  //PARA LAS MESAS
                        echo $form->dropDownListControlGroup($model, 'MESA_ID', 
                            CHtml::listData($mesa, 'MESA_ID', 'MESANUM'),
                             array(
                                'prompt' => 'Seleccione')
                             );
      ?>
      <?php  //PARA LOS PRODUCTOS
                        echo $form->dropDownListControlGroup($model, 'MENU_ID', 
                            CHtml::listData($menu, 'MENU_ID', 'MENUNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );
      ?>
      <?php /* //PARA EL ESTADO DEL PRODUCTO
                        echo $form->dropDownListControlGroup($model, 'DETALLE_ID', 
                            CHtml::listData($estado, 'DETALLE_ID', 'DETALLEESTADO'),
                             array(
                                'prompt' => 'Seleccione')
                             );*/
      ?>

	<div class="row buttons" align="center">
    <?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
  </div>
  
	<?php } ?>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->