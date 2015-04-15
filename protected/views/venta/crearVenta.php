<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>
<div class="row">
<?php 

		foreach ($comanda as $model) {
		
		echo $form->textFieldControlGroup($model, 'COMFECHA');
		break;
}
?>
</div>
</div>
<?php $this->endWidget(); ?>
