<?php
/* @var $this DetalleComandaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Comandas',
);

$this->menu=array(
	array('label'=>'Create DetalleComanda', 'url'=>array('create')),
	array('label'=>'Manage DetalleComanda', 'url'=>array('admin')),
);
?>

<h1>Detalle Comandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
