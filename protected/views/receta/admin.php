<?php
/* @var $this RecetaController */
/* @var $model Receta */

?>

<h1 align="center">Administrar Recetas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'receta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RECETA_ID',
		'RECETACANTIDADPRODUCTO',
		'RECETAUNIDADMEDIDA',
		'PVENTA_ID',
		'MP_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
