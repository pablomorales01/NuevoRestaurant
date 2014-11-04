<?php
/* @var $this ProductoElaboradoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto Elaborados',
);

$this->menu=array(
	array('label'=>'Create ProductoElaborado', 'url'=>array('create')),
	array('label'=>'Manage ProductoElaborado', 'url'=>array('admin')),
);
?>

<h1>Producto Elaborados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
