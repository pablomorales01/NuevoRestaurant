<?php
/* @var $this RegistroComprasPfController */
/* @var $model RegistroComprasPf */
?>

<h1 align="center">Compras producto final</h1>
<?php echo CHtml::link("Descargar", array("admin", "excel"=>1)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registro-compras-pf-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RPF_ID',
		'pVENTA.PVENTANOMBRE',
		'pROV.PROVNOMBRE',
		'RVTASFECHA',
		'RPFPRECIO_COMPRA',
		'RPFPCANTIDAD',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
