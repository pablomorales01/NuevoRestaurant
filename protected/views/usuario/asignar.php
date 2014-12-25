<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
//var_dump($aux);

?>

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'usuario-_form-form',
  'enableAjaxValidation'=>false,
)); ?>

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
   if($restos == null){


    	echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Restaurantes en el sistema para asignar al nuevo usuario. ')
    		.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array(
    			'url' => '../../restaurant/create'
    			)));

    }
    else { ?> 
  

    	<?php $this->beginWidget('bootstrap.widgets.BsPanel');?>

        <form>
           <div class="form" align="center">
              <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

              <?php echo $form->errorSummary($model); ?>


              <div class="row">

                 <div class="col-xs-12 col-sm-6 col-md-8">

                    <?php  
                    echo $form->dropDownListControlGroup($model, 'RESTO_ID', 
                        CHtml::listData(Restaurant::model()->findAll(), 'RESTO_ID', 'RESTONOMBRE'),
                        array(
                            'prompt' => 'Seleccione',
                            ));
                            ?>
                    <?php echo $form->error($model, 'RESTO_ID') ?>

                </div>
                <div class="col-xs-6 col-md-4">
                           <?php  
                           echo BsHtml::buttonGroup(array(
                              array('label' => 'Nuevo Restaurant',
                                 'url' => array('Restaurant/create'),
                                 'color' => BsHtml::BUTTON_COLOR_SUCCESS,
                                 'type' => BsHtml::BUTTON_TYPE_LINK)));
                                 ?>
                 </div>
              </div>
             

          <div class="row buttons" align="center">
            <?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
          </div>

    </div>
    </form>

<?php $this->endWidget();

} ?> 

<?php $this->endWidget();?>

<?php $this->endWidget();?>
  

