<?php
/* @var $this MesaController */
/* @var $model Mesa */

?>

<h1 align="center">Administrar Mesas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mesa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'MESA_ID',
		'MESANUM',
		'MESACANTIDADPERSONA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
