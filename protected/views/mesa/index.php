<?php
/* @var $this MesaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mesas',
);

$this->menu=array(
	array('label'=>'Create Mesa', 'url'=>array('create')),
	array('label'=>'Manage Mesa', 'url'=>array('admin')),
);
?>

<h1>Mesas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
