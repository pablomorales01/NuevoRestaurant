<script>
function eliminar(div){
	if(confirm('Quiere Eliminar?'))
		// console.log($(div).parent().parent().parent().html()); 
		$(div).parent().parent().parent().remove();
}
</script>

<h1 align="center">Modificar menú </h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
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

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<?php echo $form->textFieldControlGroup($lp,'MENUNOMBRE'); ?>
		<?php echo $form->error($lp,'MENUNOMBRE'); ?>
		<?php echo $form->textFieldControlGroup($lp,'MENUPRECIO');?>
		<?php echo $form->error($lp,'MENUPRECIO'); ?>
		<?php echo $form->textFieldControlGroup($lp,'MENUCANTIDADPERSONAS');?>
		<?php echo $form->error($lp,'MENUCANTIDADPERSONAS'); ?>

	</div>

	

	<div class="row">

	<table class="linear" cellspacing="0" >
	<?php
	// see http://www.yiiframework.com/doc/guide/1.1/en/form.table
	// Note: Can be a route to a config file too,
	//       or create a method 'getMultiModelForm()' in the member model
    

    //Lo que va dentro de la tabla
	$memberFormConfig = array(
		  'elements'=>array(

              'PVENTA_ID'=>array(
				'type'=>'dropdownlist',
				//'value'=>$model()->MP_ID,
				'items'=>CHtml::listData($pv, 'PVENTA_ID', 'PVENTANOMBRE'),
				'prompt'=>'seleccione',
				//'placeholder'=>'Producto',
			),
		  	'PPCANTIDAD'=>array(
              	'type'=>'text',
		  		'maxlength'=>40,
		  		'placeholder'=>'Cantidad',
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
//n <td class = "mmf_cell" respecto a la cantidad de recetas que vengan
//$html_ = '<thead><tr><th class="required">Mp <span class="required">*</span></th><th>Recetacantidadproducto</th><th>Recetaunidadmedida</th><th>&nbsp;</th></tr></thead><tbody><tr class="mmf_row id_member_copy" id="id_member_copytemplate" style="">';
//echo $html_;

$html_ = '<table><tbody><tr>';
echo $html_;
foreach ($pps as $pp) {
//cada receta del producto elab
$precio = $pp->PVENTA_ID;
$precio = ProductoVenta::model()->findAllByAttributes(array('PVENTA_ID'=>$precio));

$variable= '<td class="mmf_cell">
<select name="PrecioProducto[PVENTA_ID][]" id="PrecioProducto_PVENTA_ID">
';
foreach ($pv as $producto) {
		if($producto->PVENTA_ID == $pp->PVENTA_ID){
			$variable.='<option value="'.$producto->PVENTA_ID.'" selected>'.$producto->PVENTANOMBRE.'</option>';}
		
		else{
$variable.='<option value="'.$producto->PVENTA_ID.'">'.$producto->PVENTANOMBRE.'</option>';}}
 

$variable.='</select>
</td><td class="mmf_cell">
<input maxlength="40" placeholder="Cantidad" name="PrecioProducto[PPCANTIDAD][]" id="Precio_Producto_PPCANTIDAD" type="text" value= '.$pp->PPCANTIDAD.'>

</td><td class="mmf_cell"><a onclick="eliminar(this);" class="mmf_removelink" style="cursor: pointer">Eliminar</a></td></tr></tbody>';
 echo $variable;
	
}
?>
</table>

	</div> <!-- fin div row-->


	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Editar', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>


</div><!-- form -->
<!--<option value="'.$materia->MP_ID.'">'.$materia->MPNOMBRE.'</option>-->