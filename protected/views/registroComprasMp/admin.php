<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */



$this->menu=array(
	array('label'=>'List RegistroComprasMp', 'url'=>array('index')),
	array('label'=>'Create RegistroComprasMp', 'url'=>array('create')),
);

?>

<h1>Compras de Materia Prima</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registro-compras-mp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RCMP_ID',
		'pROV.PROVNOMBRE',
		'mP.MPNOMBRE',
		'RCMPPRECIO_COMPRA',
		'RCMPCANTIDAD',
		'RCMPFECHA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
