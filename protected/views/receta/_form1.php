<?php
/* @var $this RecetaController */
/* @var $model Receta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
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
	var i=0;
	$("#agregar").on('click', function(){
		$("#tabla tbody tr:eq(0)").clone().removeClass('fila-base').appendTo("#tabla tbody").slideDown(500,function(){
			var ele = $(this).children().children().attr('name').split("[");
			$(this).children().children().attr('name',ele[0]+'['+i+']['+ele[1]);
			i++;
		});
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
</style>

	
	<p class="note" align="center">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

	<?php echo $form->textFieldControlGroup($model, 'PVENTA_ID') ?>

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
                        echo $form->dropDownList($model, 'MP_ID', 
                            CHtml::listData($MP, 'MP_ID', 'MPNOMBRE'),
                             array(
                                'prompt' => 'Seleccione',
                                )
                             );
      			?>
			</td>
			<br>
			<td>
				<?php echo $form->textField($model,'RECETACANTIDADPRODUCTO'); ?>
				<?php echo $form->error($model,'RECETACANTIDADPRODUCTO'); ?>
      		</td>
			<td>
				<?php echo $form->textField($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'RECETAUNIDADMEDIDA'); ?>
			</td>
			<td class="eliminar"><?php echo BsHtml::Button('x', array('color' => BsHtml::BUTTON_COLOR_WARNING)) ?></td>
		</tr>
		<!-- fin de código: fila base -->

		<!-- Fila de ejemplo -->
		<tr>
			<td>
				<?php 
                        echo $form->dropDownList($model, 'MP_ID', 
                            CHtml::listData($MP, 'MP_ID', 'MPNOMBRE'),
                             array(
                                'prompt' => 'Seleccione')
                             );

      			?>
      		</td>
			<td>
				<?php echo $form->textField($model,'RECETACANTIDADPRODUCTO'); ?>
				<?php echo $form->error($model,'RECETACANTIDADPRODUCTO'); ?>
			</td>
			<td>
				<?php echo $form->textField($model,'RECETAUNIDADMEDIDA',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'RECETAUNIDADMEDIDA'); ?>
			</td>
			<td class="eliminar"><?php echo BsHtml::Button('x', array('color' => BsHtml::BUTTON_COLOR_WARNING)) ?></td>
		</tr>
		<!-- fin de código: fila de ejemplo -->
 
	</tbody>
</table>
	<!-- Botón para agregar filas -->
	<!--<input type="button" id="agregar" value="+" />-->
	<div id="agregar">
			<?php echo BsHtml::Button('+', array('color' => BsHtml::BUTTON_COLOR_INFO)) ?>
	</div>
	</div> <!-- fin div row-->

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->