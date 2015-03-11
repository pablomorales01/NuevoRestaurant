<div class="form">

<?php 
//var_dump($_POST);
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true, 
    'id' => 'recetas-form',
));
?>
<fieldset>
    <legend>Receta</legend>
<?php 
        echo $form->dropDownListControlGroup($model, 'MP_ID', 
            CHtml::listData(MateriaPrima::model()->findAll(), 'MP_ID', 'MPNOMBRE'),
             array(
                'prompt' => 'Seleccione una ',	
                'ajax' => array(
				    'type'=>'POST',
				    'url'=>array('/receta/add'),
				    'update'=>'#vista',
				    )
                )
             );
?>
</fieldset>
<div id="vista"></div>

<?php
$this->endWidget();
?>
</div><!-- form -->