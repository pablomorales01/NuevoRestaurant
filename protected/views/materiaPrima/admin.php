<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */

$this->breadcrumbs=array(
	'Materia Primas'=>array('index'),
	'Manage',
);



?>

<h1>Administrar Materia Prima</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materia-prima-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'MP_ID',
		array(
		'name'=>'BODEGA_ID',
		'value' => '$data->bODEGA==null?" ":$data->bODEGA->BODEGANOMBRE',
		'filter'=>CHtml::listData(Bodega::model()->findAll(),'BODEGA_ID', 'BODEGANOMBRE')
		),
		//'TMP_ID',
		'MPNOMBRE',
		'MPUNIDAD_MEDIDA',
		'MPSTOCK',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
