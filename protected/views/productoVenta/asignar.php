<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'usuario-_form-form',
  'enableAjaxValidation'=>false,
)); ?>

<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'asignar_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));

?>

  <p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>



    
  <div class="form" align="center">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-12">formulario
    <?php echo $form->dropDownListControlGroup($tipo,array(
        'Producto final'=> 'Producto final',
        'Producto elaborado'=>'Producto elaborado',
      array('prompt' => 'Seleccione')      
      )); ?>
    
    </div> <!--fin col--> 


  </div> <!--Fin row-->
  <div class="row buttons" align="center">
    <?php echo BsHtml::submitButton('Siguiente', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
  </div>

</div><!-- form -->
<?php 
  $this->endWidget();
 
  $this->endWidget(); ?>

