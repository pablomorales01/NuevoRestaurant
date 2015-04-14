<?php
/* @var $this ComandaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comandas',
);

$this->menu=array(
	array('label'=>'Create Comanda', 'url'=>array('create')),
	array('label'=>'Manage Comanda', 'url'=>array('admin')),
);
?>

<h1>Comandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
