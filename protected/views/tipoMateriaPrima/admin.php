<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

$this->breadcrumbs=array(
	'Tipo Materia Primas'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-materia-prima-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Tipos de materia prima</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipo-materia-prima-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'TMP_ID',
		'TMPNOMBRE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
