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

		'PVENTA_ID',
		'PVENTANOMBRE',
		//'MENU_ID',
		'BODEGA_ID',
		'PFINALSTOCK',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
