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
   <?php echo $form->errorSummary($model); ?>
 	 <?php  
                        echo $form->dropDownListControlGroup($model, 'ROL_ID', 
                            CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')

                             );
      ?>

                        <?php echo $form->error($model, 'ROL_ID'); ?>



      </div>
      <div class="col-xs-6 col-md-4">
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
   <div class="col-xs-12 col-md-8">


    		<?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Save'); ?>
</div></div>
   </div>




<?php
    $this->endWidget();
 ?>

 <?php  } ?>

 <?php
 $this->endWidget();
 ?>
