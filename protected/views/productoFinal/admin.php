<?php
/* @var $this ProductoFinalController */
/* @var $model ProductoFinal */

?>

<h1 align="center">Administrar Producto Final</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'producto-final-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PVENTANOMBRE',
		array(
		'name'=>'BODEGA_ID',
		'value' => '$data->bODEGA==null?" ":$data->bODEGA->BODEGANOMBRE',
		'filter'=>CHtml::listData(Bodega::model()->findAll(),'BODEGA_ID', 'BODEGANOMBRE')
		),
		'PFINALSTOCK',
		'ESTADO',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
