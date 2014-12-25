<?php
/* @var $this TipoMateriaPrimaController */
/* @var $model TipoMateriaPrima */

?>

<h1 align="center">Tipos de Materia Prima</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipo-materia-prima-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'TMP_ID',
		'TMPNOMBRE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
