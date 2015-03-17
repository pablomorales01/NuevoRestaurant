<?php
/* @var $this MateriaPrimaController */
/* @var $model MateriaPrima */

?>

<h1 align="center">Administrar Materia Prima</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materia-prima-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'MPNOMBRE',
		array(
			'name'=>'TMP_ID',
			'value'=>'$data->tMP==null?" ":$data->tMP->TMPNOMBRE',
			'filter'=>CHtml::listData(TipoMateriaPrima::model()->findAll(),'TMP_ID', 'TMPNOMBRE')),
		array(
		'name'=>'BODEGA_ID',
		'value' => '$data->bODEGA==null?" ":$data->bODEGA->BODEGANOMBRE',
		'filter'=>CHtml::listData(Bodega::model()->findAll(),'BODEGA_ID', 'BODEGANOMBRE')
		),
		
		'MPSTOCK',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
