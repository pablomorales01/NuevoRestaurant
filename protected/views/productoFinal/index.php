<?php
/* @var $this ProductoFinalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto Finals',
);

$this->menu=array(
	array('label'=>'Create ProductoFinal', 'url'=>array('create')),
	array('label'=>'Manage ProductoFinal', 'url'=>array('admin')),
);
?>

<h1>Producto Finals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
