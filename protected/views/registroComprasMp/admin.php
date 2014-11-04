<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */

$this->breadcrumbs=array(
	'Registro Compras Mps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RegistroComprasMp', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasMp', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-compras-mp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Registro Compras Mps</h1>

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
	'id'=>'registro-compras-mp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RCMP_ID',
		'PROV_ID',
		'MP_ID',
		'RCMPPRECIO_COMPRA',
		'RCMPCANTIDAD',
		'RCMPFECHA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
