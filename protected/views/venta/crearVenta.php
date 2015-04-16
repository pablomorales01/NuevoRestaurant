<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_inline',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

<h1 align="center">Crear Venta</h1>
<p class="note" align="center">Campos con <span class="required">*</span> son requeridos.</p>

<div class="row">
<?php echo '<div align="center"><b>Fecha: '.$comanda[0]['COMFECHA'].'</b></div>'; ?>

<table align="center">
    <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
    </tr>
<?php 
    $total=0;
    foreach ($comanda as $com) {
        $fila = ListaDePrecios::model()->findbyattributes(array('MENU_ID'=>$com->MENU_ID));
     	
     	  ?>
        <tr>
        <td>
         <?php              
            echo $fila->MENUNOMBRE;?>
        </td>
        <td>
            <?php echo $com->COM_CANTIDAD;?>
        </td>
        <td>
            <?php echo $fila->MENUPRECIO?>
        </td>
        </tr>
        <?php $total = $total + $fila->MENUPRECIO;
     	//No disponible
     
    }

?>
</table>
<?php  //TOTAL DE LA VENTA
    echo '<div align="center"> <b>TOTAL VENTA: '. $total.'</b></div>';?>
</div>
<br>
<?php echo $form->dropDownListControlGroup($model, 'VENTAFORMADEPAGO',
                array(  'Efectivo'=>'Efectivo',
                        'Cheque'=>'Cheque',
                        'Débito'=>'Débito')); ?>

<div class="row buttons" align="center">
        <?php echo BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_SUCCESS));?>
</div>

<?php $this->endWidget(); ?>
