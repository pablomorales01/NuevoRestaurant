<?php
/* @var $this BodegaController */
/* @var $model Bodega */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bodega-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Administrar Bodegas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bodega-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'BODEGA_ID',
		'BODEGANOMBRE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
