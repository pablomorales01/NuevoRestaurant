<?php
/* @var $this VentaController */
/* @var $model Venta */
?>

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
