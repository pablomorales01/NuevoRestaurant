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

<?php $this->beginWidget('bootstrap.widgets.BsPanel');?>

        <form>
           <div class="form" align="center">


              <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

              <?php echo $form->errorSummary($model); ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                             <?php
                             echo $form->textFieldControlGroup($model, 'USUNOMBRES', array(
                               'append' => BsHtml::icon(BsHtml::GLYPHICON_USER)
                               ));
                               ?>

                               <?php echo $form->error($model, 'USUNOMBRES') ?>
                    </div>
                <div class="col-xs-6 col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                           <?php
                           echo $form->textFieldControlGroup($model, 'USUAPELLIDOS', array(
                              'append' => BsHtml::icon(BsHtml::GLYPHICON_USER)
                              ));
                              ?>

                              <?php echo $form->error($model, 'USUAPELLIDOS') ?>
                    </div>
                    <div class="col-xs-6 col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                          <?php
                          echo $form->textFieldControlGroup($model, 'USURUT');
                          ?>
                          <?php echo $form->error($model, 'USURUT') ?>
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

                          <?php $form->error($model, 'USUTELEFONO') ?>
                    </div>
                    <div class="col-xs-6 col-md-4"></div>
              </div>

              <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                      <?php
                      echo $form->dropDownListControlGroup($model, 'USUESTADO', array(
                         'Habilitado',
                         'Deshabilitado'
                         ));
                         ?>
                        <?php $form->error($model, 'USUESTADO') ?>
                    </div>
                    <div class="col-xs-6 col-md-4"></div>
             </div> 
             <div class='row'>
              <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Save'); ?>            
             </div>
            

          <?php
          $this->endWidget();
          ?> 

      </div>
  </form>

  <?php  $this->endWidget(); ?>