<?php
/* @var $this PrecioProductoController */
/* @var $model PrecioProducto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'precio-producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

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


	<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	

    <?php if(Yii::app()->user->hasFlash('success')):?>
    <script>alert('<?php echo Yii::app()->user->getFlash('success'); ?>');</script>
    <?php endif; ?>


	<div class="row">
		<?php echo $form->textFieldControlGroup($lp,'MENUNOMBRE'); ?>
		<?php echo $form->error($lp,'MENUNOMBRE'); ?>
	</div>
	<div>
		<?php echo $form->textFieldControlGroup($lp, 'MENUPRECIO'); ?>
		<?php echo $form->error($lp,'MENUPRECIO'); ?>
	</div>
	<div>
		<?php echo $form->textFieldControlGroup($lp, 'MENUCANTIDADPERSONAS'); ?>
		<?php echo $form->error($lp,'MENUCANTIDADPERSONAS'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'PVENTA_ID'); ?>
		<?php echo $form->textField($model,'PVENTA_ID'); ?>
		<?php echo $form->error($model,'PVENTA_ID'); ?>
	</div>

	
-->
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

	</div> <!-- fin div row-->

	<div class="row buttons" align="center">
		<?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget() ?>

</div><!-- form -->