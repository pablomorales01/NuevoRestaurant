<?php
/* @var $this RegistroComprasMpController */
/* @var $model RegistroComprasMp */

?>

<h1>Compras de Materia Prima</h1>
<?php echo CHtml::link("Descargar", array("admin", "excel"=>1)); ?>


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
