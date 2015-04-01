<h1 align="center">Modificar Receta </h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'receta-form',
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
		<?php echo $form->textFieldControlGroup($PE,'PVENTANOMBRE',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($PE,'PVENTANOMBRE'); ?>
		<?php echo $form->textFieldControlGroup($PE,'CALORIAS');?>
		<?php echo $form->error($PE,'CALORIAS'); ?>
		<?php echo $form->textFieldControlGroup($PE,'GRAMOS');?>
		<?php echo $form->error($PE,'GRAMOS'); ?>

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

              'MP_ID'=>array(
				'type'=>'dropdownlist',
				//'value'=>$model()->MP_ID,
				'items'=>CHtml::listData($MP, 'MP_ID', 'MPNOMBRE'),
				'prompt'=>'seleccione',
				//'placeholder'=>'Producto',
			),

		  	'RECETACANTIDADPRODUCTO'=>array(
		  		'type'=>'text',
		  		'maxlength'=>40,
		  		'placeholder'=>'Cantidad',
		  	),

		  	'RECETAUNIDADMEDIDA'=>array(
		  		'type'=>'text',
		  		'maxlength'=>40,
		  		'placeholder'=>'Unidad de Medida',
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

$html_ = '<thead><tr></tr><tbody>';
echo $html_;
foreach ($recetas as $receta) {
//cada receta del producto elab
$prima = $receta->MP_ID;
$prima = MateriaPrima::model()->findAllByAttributes(array('MP_ID'=>$prima));

$variable= '<td class="mmf_cell">
<select name="Receta[MP_ID][]" id="Receta_MP_ID">
';
foreach ($MP as $materia) {
		if($materia->MP_ID == $receta->MP_ID){
			$variable.='<option value="'.$materia->MP_ID.'" selected>'.$materia->MPNOMBRE.'</option>';}
		
		else{
$variable.='<option value="'.$materia->MP_ID.'">'.$materia->MPNOMBRE.'</option>';}}
 

$variable.='</select>
</td><td class="mmf_cell">
<input maxlength="40" placeholder="Cantidad" name="Receta[RECETACANTIDADPRODUCTO][]" id="Receta_RECETACANTIDADPRODUCTO" type="text" value= '.$receta->RECETACANTIDADPRODUCTO.'>

</td><td class="mmf_cell">
<input maxlength="40" placeholder="Unidad de Medida" name="Receta[RECETAUNIDADMEDIDA][]" id="Receta_RECETAUNIDADMEDIDA" type="text" value= '.$receta->RECETAUNIDADMEDIDA.'>

</td><td class="mmf_cell"><a onclick="if(confirm("Quiere Eliminar?")) if($(this).parent().parent().attr(&quot;id&quot;)==&quot;id_member_copytemplate&quot;) {clearAllInputs($(&quot;#id_member_copytemplate&quot;));$(this).parent().parent().hide()} else $(this).parent().parent().remove(); mmfRecordCount--; return false;" class="mmf_removelink" href="#">Eliminar</a></td></tr><script type="text/javascript">
/*<![CDATA[*/
mmfRecordCount=0
/*]]>*/
</script><br></tbody>';
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