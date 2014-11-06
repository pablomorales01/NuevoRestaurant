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
	<div class= "col-xs-6 .col-sm-4" align="right">
			
			<?php
			echo $form->dropDownListControlGroup($model,'ROL_ID',
				CHtml::listData(TipoRol::model()->findAll(), 'ROL_ID', 'ROLNOMBRE'),
			array('empty' => 'Seleccionar')
			);?>
	</div>	
	<div class="col-xs-6 .col-sm-4" align="left">
			<?php  
			echo BsHtml::buttonGroup(array(
		    	array('label' => 'Nuevo Rol',
		        'url' => array('TipoRol/create'),
		        'color' => BsHtml::BUTTON_COLOR_SUCCESS,
		        'type' => BsHtml::BUTTON_TYPE_LINK)));
			?>
	</div>	


	<div class="col-xs-12 .col-md-8">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php
$this->endWidget();
?>

			

	
	


<?php } ?>

</div><!-- form -->
</div>

<?php $this->endWidget();?>