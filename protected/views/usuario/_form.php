<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_INLINE, //en linea (boton al lado)
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<?php 
if($roles == null){?>

<div class="row">
<div class="col-xs-12 col-sm-6 col-md-8">
	<?php  
		echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Roles en el sistema.')
			.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array('url' => '../TipoRol/create'))
			);
	?>
</div> <!-- fin col-->
</div> <!-- Fin row-->

<?php } 


else { ?>

<div class="form">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
		<div>
				<?php
					echo $form->dropDownListControlGroup($model,'ROL_ID',
						CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
					array('empty' => 'Seleccionar')
					);
					
					echo BsHtml::buttonGroup(array(
				    	array('label' => 'Nuevo Rol',
				        'url' => array('TipoRol/create'),
				        'color' => BsHtml::BUTTON_COLOR_SUCCESS,
				        'type' => BsHtml::BUTTON_TYPE_LINK)));
				?>			
		</div>

			<!-- MOSTRAR Y CERRAR FORMULARIO OCULTO -->
			<a href="#" id="show">Mostrar</a>
			<div id="element" style="display: none;">
			   <div id="close"><a href="#" id="hide">cerrar</a></div>
			   <form method="post" action="">
			        Nombre:<br/>
			        <input type="text" id="name" name="name" size="40" /><br/><br/>
			        Mensaje:<br/>
			        <textarea name="message" id="message" rows="6" cols="40"></textarea>
			        <br/><br/>
			        <div style="margin-left: 376px;"><input name="submit" type="submit" value="enviar" id="enviar-btn" /></div>
			    </form>
			</div>

<!-- <div class="row">
		<?php echo $form->labelEx($model,'RESTO_ID'); ?>
		<?php echo $form->textField($model,'RESTO_ID'); ?>
		<?php echo $form->error($model,'RESTO_ID'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'USUPASSWORD'); ?>
		<?php echo $form->textField($model,'USUPASSWORD',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUPASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUCREATE'); ?>
		<?php echo $form->textField($model,'USUCREATE'); ?>
		<?php echo $form->error($model,'USUCREATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUNOMBRES'); ?>
		<?php echo $form->textField($model,'USUNOMBRES',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUNOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUAPELLIDOS'); ?>
		<?php echo $form->textField($model,'USUAPELLIDOS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUAPELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USURUT'); ?>
		<?php echo $form->textField($model,'USURUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'USURUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUTELEFONO'); ?>
		<?php echo $form->textField($model,'USUTELEFONO'); ?>
		<?php echo $form->error($model,'USUTELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUESTADO'); ?>
		<?php echo $form->textField($model,'USUESTADO',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'USUESTADO'); ?>
	</div>

	-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

</div><!-- form -->
<?php } ?>
<?php $this->endWidget();?>