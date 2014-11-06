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


    		<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

    		<?php echo $form->errorSummary($model); ?>
    		<div class="row">
    			<div class="col-xs-12 col-sm-6 col-md-8">
    			  	<?php 
    				echo CHtml::dropDownList('ROL_ID', '$select', 
    					CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
    					array(
    						'prompt'=>'Selecione',
    						'ajax' => array(
    							'type'=>'POST',
    							'url'=>CController::createUrl('Usuario/DropRol'),
    							'dataType'=>'json',
    							'data'=>array('ROL_ID'=>'js:this.value')
    							/*'success'=>'function(data) {
	                            $("RESTO_ID").html(data.dropDownResto);
                       	 		}'*/
                       	 		
    							)

    						)); 

    				?>

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
    						<div class="col-xs-12 col-sm-6 col-md-8">
    							<?php  
    							echo CHtml::dropDownList('RESTO_ID', '$select', 
    					CHtml::listData(Restaurant::model()->findAll(), 'RESTO_ID', 'RESTONOMBRE'),
    					array(
    						'prompt'=>'Selecione',
    						'ajax' => array(
    							'type'=>'POST',
    							//'url'=>CController::createUrl('Usuario/DropRol'),
    							'dataType'=>'json',
    							'data'=>array('RESTO_ID'=>'js:this.value')
    							)

    						)); ?>
    							</div>
    							<div class="col-xs-6 col-md-4">

    							</div>
    						</div>

    						<div class="row">
    							<div class="col-xs-12 col-sm-6 col-md-8">
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
    									<div class="col-xs-6 col-md-4">

    									</div>
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
    										echo $form->textFieldControlGroup($model, 'USUTELEFONO');
    										?>
    									</div>
    									<div class="col-xs-6 col-md-4">

    									</div>
    								</div>

    								<div class="row">
    									<div class="col-xs-12 col-sm-6 col-md-8">
    										<?php
    										echo $form->dropDownListControlGroup($model, 'USUESTADO', array(
    											'Habilitado',
    											'Deshabilitado'
    											));
    											?>

    										</div>
    										<div class="col-xs-6 col-md-4">

    										</div>
    									</div>


    									<div class="row">
    										<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    									</div>



    									<?php
    									$this->endWidget();
    									?>







    									<?php } ?>

    								</div><!-- form -->


    								<?php $this->endWidget();?>