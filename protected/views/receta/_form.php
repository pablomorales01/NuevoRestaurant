<?php
/* @var $this RecetaController */
/* @var $model Receta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'receta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<script type="text/javascript">
 
$(function(){
	// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
	$("#agregar").on('click', function(){
		$("#tabla tbody tr:eq(0)").clone().removeClass('fila-base').appendTo("#tabla tbody");
	});
 
	// Evento que selecciona la fila y la elimina 
	$(document).on("click",".eliminar",function(){
		var parent = $(this).parents().get(0);
		$(parent).remove();
	});
});
 
</script>

<style type="text/css">
 
.fila-base{ display: none; } /* fila base oculta */
.eliminar{ cursor: pointer; color: #000; }
input[type="text"]{ width: 80px; } /* ancho a los elementos input="text" */
 
</style>
	<p class="note" align="center">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'RECETANOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	<?php echo $form->error($model,'RECETANOMBRE'); ?>

	<table id="tabla">
	<!-- Cabecera de la tabla -->
	<thead>
		<tr>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Unidad de Medida</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
 
	<!-- Cuerpo de la tabla con los campos -->
	<tbody>
 
		<!-- fila base para clonar y agregar al final -->
		<tr class="fila-base">
			<td>
				<?php 
                        echo $form->dropDownListControlGroup($model, 'MP_ID', 
                            CHtml::listData($MP, 'MP_ID', 'MPNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );

      			?>
			</td>
			<td>
				<?php echo $form->textFieldControlGroup($model,'RECETACANTIDADPRODUCTO'); ?>
				<?php echo $form->error($model,'RECETACANTIDADPRODUCTO'); ?>
      		</td>
			<td>
				<?php echo $form->textFieldControlGroup($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'RECETAUNIDADMEDIDA'); ?>
			</td>
			<td class="eliminar">Eliminar</td>
		</tr>
		<!-- fin de código: fila base -->
 
	</tbody>
</table>
<!-- Botón para agregar filas -->
<input type="button" id="agregar" value="Agregar fila" />

<?php  /*
	<div class="fila-base">
		<?php //echo $form->labelEx($model,'RECETANOMBRE'); ?>
		<?php echo $form->textFieldControlGroup($model,'RECETANOMBRE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RECETANOMBRE'); ?>
	

		<?php //echo $form->labelEx($model,'MP_ID'); ?>
		<?php //echo $form->textFieldControlGroup($model,'MP_ID'); ?>
		<?php //echo $form->error($model,'MP_ID'); ?>
		<?php 
                        echo $form->dropDownListControlGroup($model, 'MP_ID', 
                            CHtml::listData($MP, 'MP_ID', 'MPNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );

      ?>

		<?php //echo $form->labelEx($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->textFieldControlGroup($model,'RECETACANTIDADPRODUCTO'); ?>
		<?php echo $form->error($model,'RECETACANTIDADPRODUCTO'); ?>
	

		<?php //echo $form->labelEx($model,'RECETAUNIDADMEDIDA'); ?>
		<?php echo $form->textFieldControlGroup($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RECETAUNIDADMEDIDA'); ?>
	</div>

	*/?>

	<div>
		<?php echo BsHtml::Button('+', array('color' => BsHtml::BUTTON_COLOR_INFO)) ?>
	</div>
	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->