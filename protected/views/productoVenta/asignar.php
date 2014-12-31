

    <?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'asignar-form',
  // Please note: When you enable ajax validation, make sure the corresponding
  // controller action is handling ajax validation correctly.
  // There is a call to performAjaxValidation() commented in generated controller code.
  // See class documentation of CActiveForm for details on this.
  'enableAjaxValidation'=>false,
)); 

?>
  <div class="form" align="center" id='formulario'>
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-12">formulario
<br> <br>
    <?php echo CHtml::dropDownList('listname', $select, 
              array('PRODUCTO ELABORADO' => 'PRODUCTO ELABORADO', 
                'PRODUCTO FINAL' => 'PRODUCTO FINAL'),
              array('prompt' => 'Seleccione'));
    ?>
    
  </div> <!--fin col--> 


  </div> <!--Fin row-->
  <div class="row buttons" align="center">
    <?php echo BsHtml::submitButton('Siguiente', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
  </div>

</div><!-- form -->

<?php $this->endWidget(); ?>