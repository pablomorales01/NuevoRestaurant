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
		array(
			'name'=> 'RESTO_ID',
			'value' => '$data->rESTO->RESTONOMBRE',
		),

		'RESTO_ID',
		//'IMAGEN_ID',
		//'IMAGENNOMBRE',
		'IMAGEN',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
