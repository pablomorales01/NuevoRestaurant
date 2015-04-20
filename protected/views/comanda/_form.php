<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
)); 

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/validCampoFranz.js',CClientScript::POS_END);
Yii::app()->clientScript->registerScript('validarCamposEspeciales', "
  $('#Comanda_COM_CANTIDAD').validCampoFranz('1234567890');

");
?>

	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--//NOMBRE DEL RESTAURANT
	//NOMBRE DEL GARZÓN
	//MESA (DROPDOWN)
	//TABLA (PRODUCTO[DROPDOWN], CANTIDAD, PRECIO)
	//ESTADO (DROPDOWN)
	//TOTAL.-->
	

	<?php 
		echo 'Nombre:';
		echo Yii::app()->user->NOMBRES;
		echo ' ';
		echo Yii::app()->user->APELLIDOS;
	 ?>
	<div class="row">
		<?php 
			echo $form->DropdownListControlGroup($model, 'MESANUM', 
				CHtml::listData($mesas, 'MESANUM', 'MESANUM'), 
				array('prompt'=> 'Seleccione'));
		 ?>
	</div>

	<table class="linear" cellspacing="0" >
	<?php
	//Lo que va dentro de la tabla
	$memberFormConfig = array(
		  'elements'=>array(

              'MENU_ID'=>array(
				'type'=>'dropdownlist',
				//'value'=>$model()->MP_ID,
				'items'=>CHtml::listData($menus, 'MENU_ID', 'MENUNOMBRE'),
				'prompt'=>'seleccione',
				//'placeholder'=>'Producto',
			),
              'COM_CANTIDAD'=>array(
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
?>
</table>


	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->