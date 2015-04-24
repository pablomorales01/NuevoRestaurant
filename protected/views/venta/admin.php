<?php
/* @var $this VentaController */
/* @var $model Venta */
?>
<script type="text/javascript">
function imprimirSelec(nombre)
{
 var ficha = document.getElementById(nombre);//almacenamos en variable los datos del div a imprimir
 var ventimp = window.open(' ', 'Impresion');//aqui se genera una pagina temporal 
 ventimp.document.write( ficha.innerHTML );//aqui cargamos el contenido del div seleccionado
 ventimp.document.close();//cerramos el documento
 ventimp.print( );//enviamos los datos a la impresora
 ventimp.close();//cerramos ventana temporal
}
</script>
<h1 align="center">Administrar Ventas</h1>
<?php
// this is the date picker
$dateisOn = $this->widget('zii.widgets.jui.CJuiDatePicker', array(
 /*'model'=>$model,
 'attribute' => 'date_first',*/
 'name' => 'Venta[fecha1]',
 'value' => $model->fecha1,
 'language'=>'es',
 'options'=>array(
 'showAnim'=>'fold',
 'dateFormat'=>'yy-mm-dd',
 'changeMonth' => 'true',
 'changeYear'=>'true',
 'constrainInput' => 'false',
 ),
 'htmlOptions'=>array(
 'style'=>'height:20px;width:70px;',
 ),
 ),true) . '<br> hasta <br> ' . $this->widget('zii.widgets.jui.CJuiDatePicker', array(
 /*'model'=>$model,
 'attribute' => 'date_last',*/
 'name' => 'Venta[fecha2]',
 'value' => $model->fecha2,
 'language'=>'es',
 'options'=>array(
 'showAnim'=>'fold',
 'dateFormat'=>'yy-mm-dd',
 'changeMonth' => 'true',
 'changeYear'=>'true',
 'constrainInput' => 'false',
 ),
 'htmlOptions'=>array(
 'style'=>'height:20px;width:70px',
 ),
 ),true);
?>

<a href="javascript:imprimirSelec('imprimir')" >Imprimir</a>
<div id="imprimir">
<?php //echo CHtml::link("Descargar", array("admin", "excel"=>1)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'venta-grid',
	'dataProvider'=>$model->search(),
	'afterAjaxUpdate'=>"function() { //Esto es lo que hay que agregar
	 jQuery('#Venta_fecha1').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['es'], {'showAnim':'fold','dateFormat':'yy-mm-dd','changeMonth':'true','showButtonPanel':'true','changeYear':'true','constrainInput':'false'}));
	 jQuery('#Venta_fecha2').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['es'], {'showAnim':'fold','dateFormat':'yy-mm-dd','changeMonth':'true','showButtonPanel':'true','changeYear':'true','constrainInput':'false'}));
	 }",
	'filter'=>$model,
	'columns'=>array(
		'VENTA_ID',
		array('name'=>'USU_ID',
			  'value'=>'$data->uSU->USUNOMBRES'),
		array('name'=>'USU_ID',
			  'value'=>'$data->uSU->USUAPELLIDOS'),
		array('name'=>'VENTAFECHA',
			  'filter'=>$dateisOn,
			  'value'=>'$data->VENTAFECHA'),
		'VENTATOTAL',
		'VENTAFORMADEPAGO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
