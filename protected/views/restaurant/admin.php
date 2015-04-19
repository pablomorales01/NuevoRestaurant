<?php
/* @var $this RestaurantController */
/* @var $model Restaurant */
?>

<h1 align="center">Administrar Restaurant</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'restaurant-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'RESTO_ID',
		'RESTONOMBRE',
		'RESTO_RUT',
		'RESTOFECHACREACION',
		'RESTODETALLE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
