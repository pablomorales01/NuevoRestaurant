<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL, //en linea (boton al lado)
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
    	'class' => 'bs-example'
    	)
    ));
    ?>



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
    	$this->beginWidget('bootstrap.widgets.BsPanel');
    ?>


 	<div class="form" align="center">
 	<div class="row">
 	<div class="col-xs-12 col-sm-6 col-md-8">
  <!-- <?php echo $form->errorSummary($model); ?>--> <!-- rol -->
 	 <?php  
                        echo $form->dropDownListControlGroup($model, 'ROL_ID', 
                            CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );
      ?>

  </div>
  <div class="col-xs-6 col-md-4"> <!boton para crear otro rol-->
    					<?php  
    					echo BsHtml::buttonGroup(array(
    						array('label' => 'Nuevo Rol',
    							'url' => array('TipoRol/create'),
    							'color' => BsHtml::BUTTON_COLOR_SUCCESS,
    							'type' => BsHtml::BUTTON_TYPE_LINK)));
    							?>
  </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8"> <!nombre->
       <?php
          echo $form->textFieldControlGroup($model, 'USUNOMBRES', array( 
            'append' => BsHtml::icon(BsHtml::GLYPHICON_USER)
            ));
        ?>
      
    </div>  
    <div class="col-xs-6 col-md-4">      
  </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
      <?php
        echo $form->textFieldControlGroup($model, 'USUAPELLIDOS', array(
        'append' => BsHtml::icon(BsHtml::GLYPHICON_USER)
        ));
       ?>
    </div>  
    <div class="col-xs-6 col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
      <?php
      echo $form->textFieldControlGroup($model, 'USURUT');
       ?>
    </div>  
    <div class="col-xs-6 col-md-4"></div>
  </div>

    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
      <?php
       echo $form->passwordFieldControlGroup($model, 'USUPASSWORD');
       ?>
      
    </div>  
    <div class="col-xs-6 col-md-4"></div>
  </div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
      <?php
        echo $form->textFieldControlGroup($model, 'USUTELEFONO');
      ?>
      
    </div>  
<div class="col-xs-6 col-md-4"></div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
     <?php
        echo $form->dropDownListControlGroup($model, 'USUESTADO', array(
        'Habilitado'=> 'Habilitado',
        'Deshabilitado'=>'Deshabilitado'
      ));
      ?>
  
    </div>
    <div class="col-xs-6 col-md-4"></div>
  </div>


    <div class="row">
        <div class="col-xs-12 col-md-8">
        		<?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Save'); ?>   
        </div>
    </div>


   
</div> <!-- fin de form -->

<?php
    $this->endWidget();
 ?>

 <?php  } ?>

 <?php
 $this->endWidget();
 ?>
