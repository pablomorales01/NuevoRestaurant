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
	'enableAjaxValidation'=>true,)); 

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>
<!--
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

-->

	<p class="note" align="center">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

	<table class="linear" cellspacing="0" >
	<?php
	// see http://www.yiiframework.com/doc/guide/1.1/en/form.table
	// Note: Can be a route to a config file too,
	//       or create a method 'getMultiModelForm()' in the member model
    

    //Lo que va dentro de la tabla
	$memberFormConfig = array(
		  'elements'=>array(

              'MP_ID'=>array(
				'type'=>'text',
				'maxlength'=>40,
			),

		  	'RECETACANTIDADPRODUCTO'=>array(
		  		'type'=>'text',
		  		'maxlength'=>40,
		  	),

		  	'RECETAUNIDADMEDIDA'=>array(
		  		'type'=>'text',
		  		'maxlength'=>40,
		  	),
			
		));

   echo CHtml::script('function alertIds(newElem,sourceElem){alert(newElem.attr("id"));alert(sourceElem.attr("id"));}');

	$this->widget('ext.multimodelform.MultiModelForm',array(
			'id' => 'id_member', //the unique widget id
			'formConfig' => $memberFormConfig, //the form configuration array
			'model' => $model, //instance of the form model

			//if submitted (not empty) from the controller,
			//the form will be rendered with validation errors
			//'validatedItems' => $validatedMembers,

	        //array of member instances loaded from db
            //only needed if validatedItems are empty (not in displaying validation errors mode)
			/*'data' => empty($validatedItems) ? $model->findAll(
                                             array('condition'=>'groupid=:groupId',
                                                   'params'=>array(':groupId'=>$model->id),
                                                   'order'=>'position', //see 'sortAttribute' below
                                                   )) : null,*/

            'sortAttribute' => 'position', //if assigned: sortable fieldsets is enabled
            //'removeOnClick' => 'alert("test")',
            'hideCopyTemplate'=>true,
            'clearInputs'=>false,
            'tableView' => true, //sortable will not work
            //'jsAfterCloneCallback'=>'alertIds',
            'showAddItemOnError' => false, //not allow add items when in validation error mode (default = true)

            //------------ output style ----------------------
           //'tableView' => true, //sortable will not work

            //add position:relative because of embedded removeLinkWrapper with style position:absolute
            'fieldsetWrapper' => array('tag' => 'div',
                'htmlOptions' => array('class' => 'view','style'=>'position:relative;background:#EFEFEF;')
            ),

            'removeLinkWrapper' => array('tag' => 'div',
                'htmlOptions' => array('style'=>'position:absolute; top:1em; right:1em;')
            ),

		));
?>
</table>

<!--
	<thead>
		<tr>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Unidad de Medida</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
 
	<tbody>
 
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
-->
		<!-- Fila de ejemplo -->
		<!--
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
		</tr>-->
		<!-- fin de código: fila de ejemplo -->
 <!--
	</tbody>
</table>-->
	<!-- Botón para agregar filas -->
	<!--<input type="button" id="agregar" value="+" />-->
	<!--
	<div id="agregar">
			<?php echo BsHtml::Button('+', array('color' => BsHtml::BUTTON_COLOR_INFO)) ?>
	</div>
	</div> --><!-- fin div row-->


	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->