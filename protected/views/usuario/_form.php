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

<div class="row" >
<div>
<?php 
if($roles == null){


echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen Roles en el sistema. ')
	.'Por favor ingresa uno' . BsHtml::alertLink(' Aquí.', array(
    'url' => '../TipoRol/create'
)));

}

else{

 ?>

<div class="form" align="center">


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div align="center">
			
			<?php
			echo $form->dropDownListControlGroup($model,'ROL_ID',
				CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
			array('empty' => 'Seleccionar')
			);?>
			 

			<?php  echo BsHtml::buttonGroup(array(
		    	array('label' => 'Nuevo Rol',
		        'url' => array('TipoRol/create'),
		        'color' => BsHtml::BUTTON_COLOR_SUCCESS,
		        'type' => BsHtml::BUTTON_TYPE_LINK)));			
			?>

			<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		  Launch demo modal
		</button>
				
		
	</div>





	<!--<div class="row">


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

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php } ?>

</div><!-- form -->
</div>
</div>
<?php $this->endWidget();?>