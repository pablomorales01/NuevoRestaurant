<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>
 <script type="text/javascript">
    $(document).ready(function(){
        //nombre del campo
      $('#Usuario_USURUT').Rut({
      on_error: function(){ alert('Rut incorrecto'); }
    });
    })
    </script>

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'usuario-_form-form',
  'enableAjaxValidation'=>false,
)); ?>

<?php 
    if($roles == null){


      echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Roles en el sistema. ')
        .'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array(
          'url' => '../TipoRol/create'
          )));

    }

    else{

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

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#Usuario_USUNOMBRES').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#Usuario_USUAPELLIDOS').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéíóú');
  $('#Usuario_USURUT').validCampoFranz('1234567890k-.k');
  $('#Usuario_USUTELEFONO').validCampoFranz('1234567890');

");
?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <?php echo $form->errorSummary($model); ?>

  <?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="grabado_ok">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
    <?php endif; ?>
    
  <div class="form" align="center">
  <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-12">formulario
   <!-- <?php echo $form->labelEx($model,'ROL_ID'); ?>-->
    <?php echo $form->dropDownListControlGroup($model,'ROL_ID', 
                            CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')); ?>
    <?php echo $form->error($model,'ROL_ID'); ?>
    
    <!--<?php echo $form->labelEx($model,'USUTELEFONO'); ?>-->
    <?php echo $form->textFieldControlGroup($model,'USUTELEFONO'); ?>
    <?php echo $form->error($model,'USUTELEFONO'); ?>
  

  
    <!--<?php echo $form->labelEx($model,'USUPASSWORD'); ?>-->
    <?php echo $form->passwordFieldControlGroup($model,'USUPASSWORD'); ?>
    <?php echo $form->error($model,'USUPASSWORD'); ?>
  

  
    <!--<?php echo $form->labelEx($model,'USUNOMBRES'); ?>-->
    <?php echo $form->textFieldControlGroup($model,'USUNOMBRES'); ?>
    <?php echo $form->error($model,'USUNOMBRES'); ?>
  

  
   <!-- <?php echo $form->labelEx($model,'USUAPELLIDOS'); ?>-->
    <?php echo $form->textFieldControlGroup($model,'USUAPELLIDOS'); ?>
    <?php echo $form->error($model,'USUAPELLIDOS'); ?>
  

   <!-- <?php echo $form->labelEx($model,'USURUT'); ?>-->
    <?php echo $form->textFieldControlGroup($model,'USURUT'); ?>
    <?php echo $form->error($model,'USURUT'); ?>
  

    <!--<?php echo $form->labelEx($model,'USUESTADO'); ?>-->
    <?php echo $form->dropDownListControlGroup($model,'USUESTADO', array(
        'Habilitado'=> 'Habilitado',
        'Deshabilitado'=>'Deshabilitado'
      )); ?>
    <?php echo $form->error($model,'USUESTADO'); ?>
  </div> <!--fin col--> 


  </div> <!--Fin row-->
  <div class="row buttons" align="center">
    <?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
  </div>

</div><!-- form -->
<?php 
  $this->endWidget();
  }   
  $this->endWidget(); ?>

