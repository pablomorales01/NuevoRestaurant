<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */

$this->breadcrumbs=array(
	'Registro Compras Pfs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RegistroComprasPf', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasPf', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-compras-pf-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Registro Compras Pfs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registro-compras-pf-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RPF_ID',
		'PVENTA_ID',
		'PROV_ID',
		'RVTASFECHA',
		'RPFPRECIO_COMPRA',
		'RPFPCANTIDAD',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
