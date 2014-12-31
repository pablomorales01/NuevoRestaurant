<?php
/* @var $this ImagenController */
/* @var $model Imagen */

?>

<h1 align="center">Administrar Imagenes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imagen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IMAGEN_ID',
		'IMAGENNOMBRE',
		'IMAGEN',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
