<?php
/* @var $this ComandaController */
/* @var $model Comanda */

?>

<h1 align="center">Administrar Comandas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comanda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'COM_ID',
		'VENTA_ID',
		'MENU_ID',
		'MESA_ID',
		'USU_ID',
		'USU_USU_ID',
		/*
		'COMFECHA',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
