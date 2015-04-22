<?php
/* @var $this VentaController */
/* @var $model Venta */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#venta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Administrar Ventas</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'venta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'VENTA_ID',
		array('name'=>'USU_ID',
			  'value'=>'$data->uSU->USUNOMBRES'),
		array('name'=>'USU_ID',
			  'value'=>'$data->uSU->USUAPELLIDOS'),
		'VENTAFECHA',
		'VENTATOTAL',
		'VENTAFORMADEPAGO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
