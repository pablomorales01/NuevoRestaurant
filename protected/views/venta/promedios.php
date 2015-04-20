<h1 align="center">Precios promedios de compra</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'precio_promedio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>"table table-striped",
	'columns'=>array(
		//pventa_id
		//precio promedio
		//REsto_id
		'producto',
		'precio',
		//'resto',
		
	),
)); ?>