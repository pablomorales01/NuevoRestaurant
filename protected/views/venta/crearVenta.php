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
     foreach ($comanda as $com) {
         echo $com->COMFECHA;
     }

?>
</div>

<?php $this->endWidget(); ?>
