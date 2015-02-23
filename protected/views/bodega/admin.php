<?php
/* @var $this BodegaController */
/* @var $model Bodega */


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
